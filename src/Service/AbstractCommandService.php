<?php

namespace WonderWp\Component\Task\Service;

use WonderWp\Component\Service\AbstractService;

abstract class AbstractCommandService extends AbstractService implements CommandServiceInterface
{
    public function register()
    {
        add_action('init', function(){
            $autoLoaded = $this->autoload();
        },9);
    }
    
    public function autoload(array $classNameFromFiles = [], array $discoveryPaths = [], callable $successCallback = null, array $excludedClasses=[]): array
    {
        $discoveryPathsRoots = $this->manager->getConfig('discoveryPathsRoots', [
            'commands' => rtrim($this->manager->getConfig('path.root') ?? '', DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR
        ]);
        $discoverFolderSuffix = $this->manager->getConfig('commandService.discoverFolderSuffix', 'Commands');
        $defaultPaths = $this->deductDefaultDiscoveryPaths($discoveryPathsRoots, $discoverFolderSuffix);
        $discoveryPaths = array_merge($defaultPaths, $discoveryPaths);

        $autoLoaded = parent::autoload($classNameFromFiles, $discoveryPaths, $successCallback);

        /*if (!empty($this->blockTypes)) {
            $this->registerCommands();
        }*/

        return $autoLoaded;
    }
}
