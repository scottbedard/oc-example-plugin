<?php

namespace Bedard\Example;

use Backend;
use System\Classes\PluginBase;

/**
 * Example Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'author'      => 'Scott Bedard',
            'description' => 'No description provided yet...',
            'icon'        => 'icon-leaf',
            'name'        => 'Example',
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'example' => [
                'icon'        => 'icon-leaf',
                'label'       => 'Example',
                'order'       => 500,
                'permissions' => ['bedard.example.*'],
                'url'         => Backend::url('bedard/example/mycontroller'),
            ],
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bedard.example.some_permission' => [
                'label' => 'Some permission',
                'tab' => 'Example',
            ],
        ];
    }
}
