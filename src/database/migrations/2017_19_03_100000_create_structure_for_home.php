<?php

use LaravelEnso\Core\App\Classes\StructureManager\StructureMigration;

class CreateStructureForHome extends StructureMigration
{
    protected $permissionsGroup = [
        'name' => 'core.home', 'description' => 'Home Permissions Group',
    ];

    protected $permissions = [
        ['name' => 'home', 'description' => 'Welcome Page', 'type' => 0],
    ];
}