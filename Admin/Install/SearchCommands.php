<?php declare(strict_types=1);

use Modules\ModuleTemplate\Controller\SearchController;
use Modules\ModuleTemplate\Models\PermissionState;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^:moduletemplate .*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\SearchController:searchHelp',
            'verb' => RouteVerb::ANY,
            'permission' => [
                'module' => SearchController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::MODULETEMPLATE_MODULE,
            ],
        ],
    ],
    '^:moduletemplate :rndCmd1 .*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\SearchController:searchHelp',
            'verb' => RouteVerb::ANY,
            'permission' => [
                'module' => SearchController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::MODULETEMPLATE_STATE2,
            ],
        ],
    ],
    '^:moduletemplate :rndCmd2 .*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\SearchController:searchHelp',
            'verb' => RouteVerb::ANY,
            'permission' => [
                'module' => SearchController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::MODULETEMPLATE_STATE3,
            ],
        ],
    ],
    '^:moduletemplate :rndCmd3 .*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\SearchController:searchHelp',
            'verb' => RouteVerb::ANY,
            'permission' => [
                'module' => SearchController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::MODULETEMPLATE_STATE4,
            ],
        ],
    ],
];
