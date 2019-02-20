<?php

namespace nedsbeds\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class BLTCommandInstallerPlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new BLTCommandInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}