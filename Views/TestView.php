<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
 *
 * @package   Modules\ModuleTemplate\Views
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\ModuleTemplate\Views;

use phpOMS\Views\View;

/**
 * Template view class.
 *
 * @package Modules\ModuleTemplate\Views
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class TemplateView extends View
{
    /**
     * Custom view function.
     *
     * @return string
     *
     * @since 1.0.0
     */
    public function specialFunction() : string
    {
        return 'Function in custom view. Create your own functions here.';
    }
}
