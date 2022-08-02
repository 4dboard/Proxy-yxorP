<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use LogicException;

class unableToMountFilesystem extends LogicException implements filesystemExceptionInterface
{
    public static function becauseTheKeyIsNotValid($key): unableToMountFilesystem
    {
        return new unableToMountFilesystem('Unable to mount filesystem, key was invalid. String expected, received: ' . gettype($key));
    }

    public static function becauseTheFilesystemWasNotValid($filesystem): unableToMountFilesystem
    {
        $received = is_object($filesystem) ? get_class($filesystem) : gettype($filesystem);
        return new unableToMountFilesystem('Unable to mount filesystem, filesystem was invalid. Instance of ' . filesystemOperatorInterface::class . ' expected, received: ' . $received);
    }
}
