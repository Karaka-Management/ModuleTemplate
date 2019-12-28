<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package   Modules\ModuleTemplate
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

use Modules\ModuleTemplate\Controller\SearchController;
use Modules\ModuleTemplate\Models\PermissionState;

use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^:help .*$' => [
        [
            'dest' => '\Modules\ModuleTemplate\Controller\SearchController:searchModuleTemplate',
            'verb' => RouteVerb::ANY,
            'permission' => [
                'module' => SearchController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::BASE_MODEL,
            ],
        ],
    ],
];
