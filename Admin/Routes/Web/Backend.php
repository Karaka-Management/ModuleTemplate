<?php declare(strict_types=1);

use Modules\ModuleTemplate\Controller\BackendController;
use Modules\ModuleTemplate\Models\PermissionState;

use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^.*/moduletemplate/page1.*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\BackendController:viewSample1',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::DASHBOARD,
            ],
        ],
    ],
    '^.*/moduletemplate/page2.*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\BackendController:viewSample2',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::BASE_MODEL,
            ],
        ],
    ],
];
