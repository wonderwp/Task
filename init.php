<?php

use WonderWp\Component\PluginSkeleton\Exception\ServiceNotFoundException;
use WonderWp\Component\Service\ServiceInterface;
use WonderWp\Component\PluginSkeleton\ManagerInterface;
use WonderWp\Component\DependencyInjection\Container;
use WonderWp\Component\Task\TaskServiceInterface;

add_action('wwp.abstract_manager.run', 'wwp_register_task_service_towards_manager', 10, 2);

function wwp_register_task_service_towards_manager(ManagerInterface $manager, Container $container)
{
    // Commands
    try {
        $commandService = $manager->getService(ServiceInterface::COMMAND_SERVICE_NAME);
        if ($commandService instanceof \WonderWp\Component\Task\TaskServiceInterface) {
            $commandService->register();
        }
    } catch (ServiceNotFoundException $e) {
        if ($e->getServiceType() === ServiceInterface::COMMAND_SERVICE_NAME) {
            //No command service found, nothing to do here for now
        } else {
            throw $e;
        }
    }
}
