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

namespace Modules\ModuleTemplate\Controller;

use Modules\ModuleTemplate\Models\PermissionState;
use Modules\ModuleTemplate\Models\BaseModel;
use Modules\ModuleTemplate\Models\BaseModelMapper;
use Modules\ModuleTemplate\Views\BasicView;

use phpOMS\Asset\AssetType;
use phpOMS\Contract\RenderableInterface;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Views\View;

/**
 * Backend controller for the ModuleTemplate module.
 *
 * @package Modules\ModuleTemplate
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class BackendController extends Controller
{
    /**
     * Routing end-point for application behaviour.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return RenderableInterface Returns a renderable object
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewSample1(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new View($this->app, $request, $response);

        /** @var \phpOMS\Model\Html\Head $head */
        $head = $response->get('Content')->getData('head');
        $head->addAsset(AssetType::CSS, '/Modules/ModuleTemplate/Theme/Backend/css/styles.css');

        $view->setTemplate('/Modules/ModuleTemplate/Theme/Backend/sample');
        $view->addData('nav', $this->app->moduleManager->get('Navigation')->createNavigationMid(1999901001, $request, $response));

        return $view;
    }

    /**
     * Routing end-point for application behaviour.
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return RenderableInterface Returns a renderable object
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function viewSample2(RequestAbstract $request, ResponseAbstract $response, $data = null) : RenderableInterface
    {
        $view = new BaseView($this->app, $request, $response);
        $view->setTemplate('/Modules/ModuleTemplate/Theme/Backend/sample2');
        $view->addData('nav', $this->app->moduleManager->get('Navigation')->createNavigationMid(1999901001, $request, $response));

        $view->addData('some_data', 123);

        return $view;
    }
}
