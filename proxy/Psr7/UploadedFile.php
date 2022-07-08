<?php namespace yxorP\proxy\Psr7;

use InvalidArgumentException;
use RuntimeException;
use yxorP\psr\Http\Message\StreamInterface;
use yxorP\psr\Http\Message\UploadedFileInterface;

class UploadedFile implements UploadedFileInterface
{
    private static array $errors = [UPLOAD_ERR_OK, UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE, UPLOAD_ERR_PARTIAL, UPLOAD_ERR_NO_FILE, UPLOAD_ERR_NO_TMP_DIR, UPLOAD_ERR_CANT_WRITE, UPLOAD_ERR_EXTENSION,];
    private ?string $clientFilename;
    private ?string $clientMediaType;
    private int $error;
    private $file;
    private bool $moved = false;
    private ?int $size;
    private null|StreamInterface|LazyOpenStream $stream;

    public function __construct($streamOrFile, $size, $errorStatus, $clientFilename = null, $clientMediaType = null)
    {
        $this->setError($errorStatus);
        $this->setSize($size);
        $this->setClientFilename($clientFilename);
        $this->setClientMediaType($clientMediaType);
        if ($this->isOk()) {
            $this->setStreamOrFile($streamOrFile);
        }
    }

    private function setError($error)
    {
        if (false === is_int($error)) {
            throw new InvalidArgumentException('Upload file error status must be an integer');
        }
        if (false === in_array($error, UploadedFile::$errors)) {
            throw new InvalidArgumentException('Invalid error status for UploadedFile');
        }
        $this->error = $error;
    }

    private function setSize($size)
    {
        if (false === is_int($size)) {
            throw new InvalidArgumentException('Upload file size must be an integer');
        }
        $this->size = $size;
    }

    private function setClientFilename($clientFilename)
    {
        if (false === $this->isStringOrNull($clientFilename)) {
            throw new InvalidArgumentException('Upload file client filename must be a string or null');
        }
        $this->clientFilename = $clientFilename;
    }

    private function isStringOrNull($param): bool
    {
        return in_array(gettype($param), ['string', 'NULL']);
    }

    private function setClientMediaType($clientMediaType)
    {
        if (false === $this->isStringOrNull($clientMediaType)) {
            throw new InvalidArgumentException('Upload file client media type must be a string or null');
        }
        $this->clientMediaType = $clientMediaType;
    }

    private function isOk(): bool
    {
        return $this->error === UPLOAD_ERR_OK;
    }

    private function setStreamOrFile($streamOrFile)
    {
        if (is_string($streamOrFile)) {
            $this->file = $streamOrFile;
        } elseif (is_resource($streamOrFile)) {
            $this->stream = new Stream($streamOrFile);
        } elseif ($streamOrFile instanceof StreamInterface) {
            $this->stream = $streamOrFile;
        } else {
            throw new InvalidArgumentException('Invalid stream or file provided for UploadedFile');
        }
    }

    public function moveTo($targetPath)
    {
        $this->validateActive();
        if (false === $this->isStringNotEmpty($targetPath)) {
            throw new InvalidArgumentException('Invalid path provided for move operation; must be a non-empty string');
        }
        if ($this->file) {
            $this->moved = php_sapi_name() == 'cli' ? rename($this->file, $targetPath) : move_uploaded_file($this->file, $targetPath);
        } else {
            copy_to_stream($this->getStream(), new LazyOpenStream($targetPath, 'w'));
            $this->moved = true;
        }
        if (false === $this->moved) {
            throw new RuntimeException(sprintf('Uploaded file could not be moved to %s', $targetPath));
        }
    }

    private function validateActive()
    {
        if (false === $this->isOk()) {
            throw new RuntimeException('Cannot retrieve stream due to upload error');
        }
        if ($this->isMoved()) {
            throw new RuntimeException('Cannot retrieve stream after it has already been moved');
        }
    }

    public function isMoved(): bool
    {
        return $this->moved;
    }

    private function isStringNotEmpty($param): bool
    {
        return is_string($param) && false === empty($param);
    }

    public function getStream(): mixed
    {
        $this->validateActive();
        if ($this->stream instanceof StreamInterface) {
            return $this->stream;
        }
        return new LazyOpenStream($this->file, 'r+');
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function getError(): int
    {
        return $this->error;
    }

    public function getClientFilename(): ?string
    {
        return $this->clientFilename;
    }

    public function getClientMediaType(): ?string
    {
        return $this->clientMediaType;
    }
}