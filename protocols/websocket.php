<?php namespace yxorP\protocols;

use Exception;
use Throwable;
use yxorP\connection\connectionInterface;
use yxorP\connection\tcpConnection;
use yxorP\protocols\Http\request;
use yxorP\Worker;
use function base64_encode;
use function chr;
use function floor;
use function gettype;
use function is_array;
use function ord;
use function pack;
use function preg_match;
use function sha1;
use function str_repeat;
use function stripos;
use function strlen;
use function strpos;
use function substr;
use function unpack;

class websocket implements protocolInterface
{
    const BINARY_TYPE_BLOB = "\x81";
    const BINARY_TYPE_ARRAYBUFFER = "\x82";

    /* A function that takes in a buffer and a connectionInterface and returns a string. */
    public static function input($buffer, connectionInterface $connection)
    {
        $recv_len = strlen($buffer);
        if ($recv_len < 6) {
            return 0;
        }
        if (empty($connection->websocketHandshake)) {
            return static::dealHandshake($buffer, $connection);
        }
        if ($connection->websocketCurrentFrameLength) {
            if ($connection->websocketCurrentFrameLength > $recv_len) {
                return 0;
            }
        } else {
            $firstbyte = ord($buffer[0]);
            $secondbyte = ord($buffer[1]);
            $data_len = $secondbyte & 127;
            $is_fin_frame = $firstbyte >> 7;
            $masked = $secondbyte >> 7;
            if (!$masked) {
                Worker::safeEcho("frame not masked so close the connection\n");
                $connection->close();
                return 0;
            }
            $opcode = $firstbyte & 0xf;
            switch ($opcode) {
                case 0xa:
                case 0x9:
                case 0x2:
                case 0x1:
                case 0x0:
                    break;
                case 0x8:
                    $close_cb = $connection->onWebSocketClose ?? $connection->worker->onWebSocketClose ?? false;
                    if ($close_cb) {
                        try {
                            $close_cb($connection);
                        } catch (Throwable $e) {
                            Worker::stopAll(250, $e);
                        }
                    } else {
                        $connection->close("\x88\x02\x03\xe8", true);
                    }
                    return 0;
                default:
                    Worker::safeEcho("error opcode $opcode and close websocket connection. Buffer:" . bin2hex($buffer) . "\n");
                    $connection->close();
                    return 0;
            }
            $head_len = 6;
            if ($data_len === 126) {
                $head_len = 8;
                if ($head_len > $recv_len) {
                    return 0;
                }
                $pack = unpack('nn/ntotal_len', $buffer);
                $data_len = $pack['total_len'];
            } else {
                if ($data_len === 127) {
                    $head_len = 14;
                    if ($head_len > $recv_len) {
                        return 0;
                    }
                    $arr = unpack('n/N2c', $buffer);
                    $data_len = $arr['c1'] * 4294967296 + $arr['c2'];
                }
            }
            $current_frame_length = $head_len + $data_len;
            $total_package_size = strlen($connection->websocketDataBuffer) + $current_frame_length;
            if ($total_package_size > $connection->maxPackageSize) {
                Worker::safeEcho("error package. package_length=$total_package_size\n");
                $connection->close();
                return 0;
            }
            if ($is_fin_frame) {
                if ($opcode === 0x9) {
                    if ($recv_len >= $current_frame_length) {
                        $ping_data = static::decode(substr($buffer, 0, $current_frame_length), $connection);
                        $connection->consumeRecvBuffer($current_frame_length);
                        $tmp_connection_type = $connection->websocketType ?? static::BINARY_TYPE_BLOB;
                        $connection->websocketType = "\x8a";
                        $ping_cb = $connection->onWebSocketPing ?? $connection->worker->onWebSocketPing ?? false;
                        if ($ping_cb) {
                            try {
                                $ping_cb($connection, $ping_data);
                            } catch (Throwable $e) {
                                Worker::stopAll(250, $e);
                            }
                        } else {
                            $connection->send($ping_data);
                        }
                        $connection->websocketType = $tmp_connection_type;
                        if ($recv_len > $current_frame_length) {
                            return static::input(substr($buffer, $current_frame_length), $connection);
                        }
                    }
                    return 0;
                } else if ($opcode === 0xa) {
                    if ($recv_len >= $current_frame_length) {
                        $pong_data = static::decode(substr($buffer, 0, $current_frame_length), $connection);
                        $connection->consumeRecvBuffer($current_frame_length);
                        $tmp_connection_type = $connection->websocketType ?? static::BINARY_TYPE_BLOB;
                        $connection->websocketType = "\x8a";
                        $pong_cb = $connection->onWebSocketPong ?? $connection->worker->onWebSocketPong ?? false;
                        if ($pong_cb) {
                            try {
                                $pong_cb($connection, $pong_data);
                            } catch (Throwable $e) {
                                Worker::stopAll(250, $e);
                            }
                        }
                        $connection->websocketType = $tmp_connection_type;
                        if ($recv_len > $current_frame_length) {
                            return static::input(substr($buffer, $current_frame_length), $connection);
                        }
                    }
                    return 0;
                }
                return $current_frame_length;
            } else {
                $connection->websocketCurrentFrameLength = $current_frame_length;
            }
        }
        if ($connection->websocketCurrentFrameLength === $recv_len) {
            static::decode($buffer, $connection);
            $connection->consumeRecvBuffer($connection->websocketCurrentFrameLength);
            $connection->websocketCurrentFrameLength = 0;
            return 0;
        } elseif ($connection->websocketCurrentFrameLength < $recv_len) {
            static::decode(substr($buffer, 0, $connection->websocketCurrentFrameLength), $connection);
            $connection->consumeRecvBuffer($connection->websocketCurrentFrameLength);
            $current_frame_length = $connection->websocketCurrentFrameLength;
            $connection->websocketCurrentFrameLength = 0;
            return static::input(substr($buffer, $current_frame_length), $connection);
        } else {
            return 0;
        }
    }

    /* A function that is called when a new connection is made. */
    public static function dealHandshake($buffer, tcpConnection $connection)
    {
        if (str_starts_with($buffer, 'GET')) {
            $header_end_pos = strpos($buffer, "\r\n\r\n");
            if (!$header_end_pos) return 0;
            $header_length = $header_end_pos + 4;
            $Sec_WebSocket_Key = '';
            if (preg_match("/Sec-WebSocket-Key: *(.*?)\r\n/i", $buffer, $match)) $Sec_WebSocket_Key = $match[1]; else {
                $connection->close("HTTP/1.1 200 WebSocket\r\nServer: yxorp/" . Worker::VERSION . "\r\n\r\n<div style=\"text-align:center\"><h1>WebSocket</h1><hr>yxorp/" . Worker::VERSION . "</div>", true);
                return 0;
            }
            $new_key = base64_encode(sha1($Sec_WebSocket_Key . "258EAFA5-E914-47DA-95CA-C5AB0DC85B11", true));
            $handshake_message = "HTTP/1.1 101 Switching protocols\r\n" . "Upgrade: websocket\r\n" . "Sec-WebSocket-Version: 13\r\n" . "connection: Upgrade\r\n" . "Sec-WebSocket-Accept: " . $new_key . "\r\n";
            $connection->websocketDataBuffer = '';
            $connection->websocketCurrentFrameLength = 0;
            $connection->websocketCurrentFrameBuffer = '';
            $connection->consumeRecvBuffer($header_length);
            if (empty($connection->websocketType)) $connection->websocketType = static::BINARY_TYPE_BLOB;
            $has_server_header = false;
            if (isset($connection->headers)) if (is_array($connection->headers)) {
                foreach ($connection->headers as $header) {
                    if (stripos($header, 'Server:') === 0) $has_server_header = true;
                    $handshake_message .= "$header\r\n";
                }
            } else {
                if (stripos($connection->headers, 'Server:') !== false) $has_server_header = true;
                $handshake_message .= "$connection->headers\r\n";
            }
            if (!$has_server_header) $handshake_message .= "Server: yxorp/" . Worker::VERSION . "\r\n";
            $handshake_message .= "\r\n";
            $connection->send($handshake_message, true);
            $connection->websocketHandshake = true;
            $on_websocket_connect = $connection->onWebSocketConnect ?? $connection->worker->onWebSocketConnect ?? false;
            if ($on_websocket_connect) try {
                $on_websocket_connect($connection, new request($buffer));
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
            if (!empty($connection->tmpWebsocketData)) {
                $connection->send($connection->tmpWebsocketData, true);
                $connection->tmpWebsocketData = '';
            }
            if (strlen($buffer) > $header_length) return static::input(substr($buffer, $header_length), $connection);
            return 0;
        } elseif (str_starts_with($buffer, '<polic')) {
            $policy_xml = '<?xml version="1.0"?><cross-domain-policy><site-control permitted-cross-domain-policies="all"></site-control><allow-access-from domain="*" to-ports="*"></allow-access-from></cross-domain-policy>' . "\0";
            $connection->send($policy_xml, true);
            $connection->consumeRecvBuffer(strlen($buffer));
            return 0;
        }
        $connection->close("HTTP/1.1 200 WebSocket\r\nServer: yxorp/" . Worker::VERSION . "\r\n\r\n<div style=\"text-align:center\"><h1>WebSocket</h1><hr>yxorp/" . Worker::VERSION . "</div>", true);
        return 0;
    }

    public static function decode($buffer, connectionInterface $connection): string
    {
        $len = ord($buffer[1]) & 127;
        if ($len === 126) {
            $masks = substr($buffer, 4, 4);
            $data = substr($buffer, 8);
        } else {
            if ($len === 127) {
                $masks = substr($buffer, 10, 4);
                $data = substr($buffer, 14);
            } else {
                $masks = substr($buffer, 2, 4);
                $data = substr($buffer, 6);
            }
        }
        $dataLength = strlen($data);
        $masks = str_repeat($masks, floor($dataLength / 4)) . substr($masks, 0, $dataLength % 4);
        $decoded = $data ^ $masks;
        if ($connection->websocketCurrentFrameLength) {
            $connection->websocketDataBuffer .= $decoded;
            return $connection->websocketDataBuffer;
        } else {
            if ($connection->websocketDataBuffer !== '') {
                $decoded = $connection->websocketDataBuffer . $decoded;
                $connection->websocketDataBuffer = '';
            }
            return $decoded;
        }
    }

    /**
     * @throws Exception
     */
    public static function encode($buffer, connectionInterface $connection): string
    {
        if (!is_scalar($buffer)) {
            throw new Exception("You can't send(" . gettype($buffer) . ") to client, you need to convert it to a string. ");
        }
        $len = strlen($buffer);
        if (empty($connection->websocketType)) {
            $connection->websocketType = static::BINARY_TYPE_BLOB;
        }
        $first_byte = $connection->websocketType;
        if ($len <= 125) {
            $encode_buffer = $first_byte . chr($len) . $buffer;
        } else {
            if ($len <= 65535) {
                $encode_buffer = $first_byte . chr(126) . pack("n", $len) . $buffer;
            } else {
                $encode_buffer = $first_byte . chr(127) . pack("xxxxN", $len) . $buffer;
            }
        }
        if (empty($connection->websocketHandshake)) {
            if (empty($connection->tmpWebsocketData)) {
                $connection->tmpWebsocketData = '';
            }
            if (strlen($connection->tmpWebsocketData) > $connection->maxSendBufferSize) {
                if ($connection->onError) {
                    try {
                        ($connection->onError)($connection, connectionInterface::SEND_FAIL, 'send buffer full and drop package');
                    } catch (Throwable $e) {
                        Worker::stopAll(250, $e);
                    }
                }
                return '';
            }
            $connection->tmpWebsocketData .= $encode_buffer;
            if ($connection->maxSendBufferSize <= strlen($connection->tmpWebsocketData)) {
                if ($connection->onBufferFull) {
                    try {
                        ($connection->onBufferFull)($connection);
                    } catch (Throwable $e) {
                        Worker::stopAll(250, $e);
                    }
                }
            }
            return '';
        }
        return $encode_buffer;
    }
}