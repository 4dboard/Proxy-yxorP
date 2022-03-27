<?php /* yxorP */


namespace Predis\Command;


class ServerInfoV26x extends ServerInfo
{

    public function parseResponse($data): array
    {
        if ($data === '') {
            return array();
        }

        $info = array();

        $current = null;
        $infoLines = preg_split('/\r?\n/', $data);

        if (isset($infoLines[0]) && $infoLines[0][0] !== '#') {
            return parent::parseResponse($data);
        }

        foreach ($infoLines as $row) {
            if ($row === '') {
                continue;
            }

            if (preg_match('/^# (\w+)$/', $row, $matches)) {
                $info[$matches[1]] = array();
                $current = &$info[$matches[1]];
                continue;
            }

            [$k, $v] = $this->parseRow($row);
            $current[$k] = $v;
        }

        return $info;
    }
}
