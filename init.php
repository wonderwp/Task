<?php

use WonderWp\Component\PluginSkeleton\Exception\ServiceNotFoundException;
use WonderWp\Component\Service\ServiceInterface;
use WonderWp\Component\PluginSkeleton\ManagerInterface;
use WonderWp\Component\DependencyInjection\Container;
use WonderWp\Component\Task\TaskServiceInterface;
use WonderWp\Component\Task\Service\CommandServiceInterface;
use WonderWp\Component\PluginSkeleton\ManagerAwareInterface;

add_action('wonderwp.loader.load', 'wwp_register_task_definitions_towards_container', 10, 2);
add_action('wwp.abstract_manager.run', 'wwp_register_task_service_towards_manager', 10, 2);

function wwp_register_task_definitions_towards_container(Container $container)
{
    /**
     * Block Types
     */
    $container['wwp.task.defaultService'] = $container->factory(function () {
        return new \WonderWp\Component\Task\Service\WpCliCommandService();
    });
}

function wwp_register_task_service_towards_manager(ManagerInterface $manager, Container $container)
{
    // Commands
    try {
        $commandService = $manager->getService(ServiceInterface::COMMAND_SERVICE_NAME);
        if ($commandService instanceof CommandServiceInterface || $commandService instanceof TaskServiceInterface) {
            $commandService->register();
        }
    } catch (ServiceNotFoundException $e) {
        if ($e->getServiceType() === ServiceInterface::COMMAND_SERVICE_NAME) {
            //No command service found, use the default one instead
            $commandService = $container['wwp.task.defaultService'];
            if ($commandService instanceof CommandServiceInterface || $commandService instanceof TaskServiceInterface) {
                if ($commandService instanceof ManagerAwareInterface) {
                    $commandService->setManager($manager);
                }
                $commandService->register();
            }
        } else {
            throw $e;
        }
    }
}
