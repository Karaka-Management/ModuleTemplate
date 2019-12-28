<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package   Modules\Tasks
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Tasks\Views;

use Modules\Tasks\Models\TaskStatus;
use phpOMS\Views\View;

/**
 * Task view class.
 *
 * @package Modules\Tasks
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class TemplateView extends View
{
    protected $media = [];

    /**
     * Get task status color.
     *
     * @return string
     *
     * @since 1.0.0
     */
    public function specialFunction() : string
    {
        return 'Inside of custom view.';
    }
}
