<?php

namespace WonderWp\Component\Task\Service;

use WonderWp\Component\Service\AbstractService;
use WonderWp\Component\Service\Traits\HasAutoloadingCapabilities;
use WonderWp\Component\Task\Traits\HasCommandAutoloader;

abstract class AbstractCommandService extends AbstractService implements CommandServiceInterface
{
    use HasAutoloadingCapabilities, HasCommandAutoloader {
        HasCommandAutoloader::resolveDiscoveryPaths insteadof HasAutoloadingCapabilities;
    }
    public function register()
    {
        add_action('init', function(){
            $autoLoaded = $this->autoload();
        },9);
    }
}
