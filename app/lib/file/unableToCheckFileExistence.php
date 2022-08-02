<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
class unableToCheckFileExistence extends unableToCheckExistence
{
    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_FILE_EXISTS;
    }
}
