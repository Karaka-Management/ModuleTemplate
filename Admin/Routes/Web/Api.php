<?php declare(strict_types=1);

use Modules\ModuleTemplate\Controller\ApiController;
use Modules\ModuleTemplate\Models\PermissionState;

use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^.*/task(\?.*|$)' => [
        [
            'dest' => '\Modules\Tasks\Controller\ApiController:apiTaskCreate',
            'verb' => RouteVerb::PUT,
            'permission' => [
                'module' => ApiController::MODULE_NAME,
                'type'  => PermissionType::CREATE,
                'state' => PermissionState::BASE_MODEL,
            ],
        ],
        [
            'dest' => '\Modules\Tasks\Controller\ApiController:apiTaskSet',
            'verb' => RouteVerb::SET,
            'permission' => [
                'module' => ApiController::MODULE_NAME,
                'type'  => PermissionType::MODIFY,
                'state' => PermissionState::BASE_MODEL,
            ],
        ],
        [
            'dest' => '\Modules\Tasks\Controller\ApiController:apiTaskGet',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => ApiController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::BASE_MODEL,
            ],
        ],
    ],
];
