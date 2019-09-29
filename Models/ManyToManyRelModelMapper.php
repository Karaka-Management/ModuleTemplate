<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package   Modules\ModuleTemplate\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\ModuleTemplate\Models;

use phpOMS\DataStorage\Database\DataMapperAbstract;

/**
 * Mapper description.
 *
 * @package Modules\ModuleTemplate\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class ManyToManyRelModelMapper extends DataMapperAbstract
{

    /**
     * Columns.
     *
     * @var array<string, array<string, bool|string>>
     * @since 1.0.0
     */
    protected static $columns = [
        'test_has_many_rel_id'     => ['name' => 'test_has_many_rel_id',     'type' => 'int',    'internal' => 'id'],
        'test_has_many_rel_string' => ['name' => 'test_has_many_rel_string', 'type' => 'string', 'internal' => 'string'],
    ];

    /**
     * Primary table.
     *
     * @var   string
     * @since 1.0.0
     */
    protected static $table = 'test_has_many_rel';

    /**
     * Primary field name.
     *
     * @var   string
     * @since 1.0.0
     */
    protected static $primaryField = 'test_has_many_rel_id';
}
