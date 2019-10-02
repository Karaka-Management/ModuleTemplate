<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package   Modules\ModuleTemplate\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\ModuleTemplate\Admin;

use phpOMS\DataStorage\Database\DatabasePool;

use phpOMS\Module\InfoManager;
use phpOMS\Module\InstallerAbstract;

/**
 * Installer class.
 *
 * @package Modules\ModuleTemplate\Admin
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class Installer extends InstallerAbstract
{
    /**
     * {@inheritdoc}
     */
    public static function install(DatabasePool $dbPool, InfoManager $info) : void
    {
        parent::install($dbPool, $info);

        /* other install tasks if necessary */
    }
}
