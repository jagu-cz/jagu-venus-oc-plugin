<?php

namespace Jagu\Venus\Components;

use Cms\Classes\ComponentBase;
use Jagu\Venus\Models\Project;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gallery',
            'description' => 'Gallery'
        ];
    }

    public function projects()
    {
        return Project::orderBy('sort_order', 'asc')->get();
    }
}
