<?php

namespace Jagu\Venus\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Projects extends Controller
{
    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jagu.Venus', 'venus', 'projects');
    }

    public function index()
    {
        $this->pageTitle = 'jagu.venus::lang.title.projects';
        return $this->asExtension('ListController')->index();
    }

    public function create()
    {
        $this->pageTitle = 'jagu.venus::lang.title.new_project';
        return $this->asExtension('FormController')->create();
    }

    public function update($projectId)
    {
        $this->pageTitle = 'jagu.venus::lang.title.edit_project';
        return $this->asExtension('FormController')->update($projectId);
    }
}
