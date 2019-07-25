<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/6/8
 * Time: 15:03
 */
namespace PackageInstaller\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */

    public function getInstallPath(PackageInterface $package)
    {
        return 'src/'.$package->getPrettyName().'/';
    }
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ship-bundle' === $packageType;
    }
}