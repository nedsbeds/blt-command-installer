<?php

namespace nedsbeds\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class BLTCommandInstaller extends LibraryInstaller
{
  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package)
  {
    return 'blt/src/Commands/'.$package->getPrettyName();
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'blt-command' === $packageType;
  }
}