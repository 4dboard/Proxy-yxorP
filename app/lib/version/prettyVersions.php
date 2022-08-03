<?php declare(strict_types=1);

namespace yxorP\app\lib\version;

use Composer\InstalledVersions;
use yxorP\app\lib\version\Exception\providedPackageException;
use yxorP\app\lib\version\Exception\replacedPackageException;
use yxorP\app\lib\version\Exception\versionMissingExceptionInterface;

class prettyVersions
{
    /**
     * @throws versionMissingExceptionInterface
     */
    public static function getVersion(string $packageName): version
    {
        self::checkProvidedPackages($packageName);
        self::checkReplacedPackages($packageName);
        return new version($packageName, InstalledVersions::getPrettyVersion($packageName), InstalledVersions::getReference($packageName));
    }

    /**
     * @throws versionMissingExceptionInterface
     */
    protected static function checkProvidedPackages(string $packageName): void
    {
        if (!method_exists(InstalledVersions::class, 'getAllRawData')) {
            if (isset(InstalledVersions::getRawData()['versions'][$packageName]['provided'])) {
                throw providedPackageException::create($packageName);
            }
            return;
        }
        foreach (InstalledVersions::getAllRawData() as $installed) {
            if (isset($installed['versions'][$packageName]['provided'])) {
                throw providedPackageException::create($packageName);
            }
        }
    }

    /**
     * @throws versionMissingExceptionInterface
     */
    protected static function checkReplacedPackages(string $packageName): void
    {
        if (!method_exists(InstalledVersions::class, 'getAllRawData')) {
            if (isset(InstalledVersions::getRawData()['versions'][$packageName]['replaced'])) {
                throw replacedPackageException::create($packageName);
            }
            return;
        }
        foreach (InstalledVersions::getAllRawData() as $installed) {
            if (isset($installed['versions'][$packageName]['replaced'])) {
                throw replacedPackageException::create($packageName);
            }
        }
    }

    public static function getRootPackageVersion(): version
    {
        return new version(self::getRootPackageName(), InstalledVersions::getRootPackage()['pretty_version'], InstalledVersions::getRootPackage()['reference']);
    }

    public static function getRootPackageName(): string
    {
        return InstalledVersions::getRootPackage()['name'];
    }
}
