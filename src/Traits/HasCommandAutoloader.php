<?php

namespace WonderWp\Component\Task\Traits;

trait HasCommandAutoloader
{
    /**
     * Customize discovery paths for commands.
     *
     * @param array $discoveryPaths
     * @return array
     */
    protected function resolveDiscoveryPaths(array $discoveryPaths): array
    {
        $discoveryPathsRoots = $this->manager->getConfig('discoveryPathsRoots', [
            'commands' => rtrim($this->manager->getConfig('path.root') ?? '', DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR,
        ]);

        $discoverFolderSuffix = $this->manager->getConfig('commandService.discoverFolderSuffix', 'Commands');
        $defaultPaths         = $this->deductDefaultDiscoveryPaths($discoveryPathsRoots, $discoverFolderSuffix);

        return array_merge($defaultPaths, $discoveryPaths);
    }
}


