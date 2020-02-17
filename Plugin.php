<?php namespace Jagu\Venus;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \Jagu\Venus\Components\Gallery::class => 'gallery'
        ];
    }

    public function registerNavigation()
    {
        return [
            'venus' => [
                'label' => 'jagu.venus::lang.nav.portfolio',
                'url' => Backend::url('jagu/venus/projects'),
                'icon' => 'icon-home',
                'sideMenu' => [
                    'projects' => [
                        'label' => 'jagu.venus::lang.nav.projects',
                        'icon' => 'icon-book',
                        'code' => 'projects',
                        'url' => Backend::url('jagu/venus/projects')
                    ]
                ]
            ]
        ];
    }
}
