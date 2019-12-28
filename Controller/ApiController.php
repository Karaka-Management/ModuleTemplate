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

use Modules\ModuleTemplate\Models\BaseModel;
use Modules\ModuleTemplate\Models\BaseModelMapper;

use phpOMS\Message\NotificationLevel;
use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Model\Message\FormValidation;

/**
 * Api controller for the ModuleTemplate module.
 *
 * @package Modules\ModuleTemplate
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
final class ApiController extends Controller
{
    /**
     * Validate base model create request
     *
     * @param RequestAbstract $request Request
     *
     * @return array<string, bool> Returns the validation array of the request
     *
     * @since 1.0.0
     */
    private function validateBaseModelCreate(RequestAbstract $request) : array
    {
        $val = [];
        if (($val['string'] = empty($request->getData('string')))
            || ($val['int'] = empty($request->getData('int')) || !\is_numeric($request->getData('int')))
        ) {
            return $val;
        }

        return [];
    }

    /**
     * Api method to create a base model
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return void
     *
     * @api
     *
     * @since 1.0.0
     */
    public function apiBaseModelCreate(RequestAbstract $request, ResponseAbstract $response, $data = null) : void
    {
        if (!empty($val = $this->validateBaseModelCreate($request))) {
            $response->set($request->getUri()->__toString(), new FormValidation($val));

            return;
        }

        $baseModel = $this->createBaseModelFromRequest($request);
        $this->createModel($request->getHeader()->getAccount(), $baseModel, BaseModelMapper::class, 'basemodel');
        $this->fillJsonResponse($request, $response, NotificationLevel::OK, 'Base Model', 'Base Model successfully created.', $baseModel);
    }

    /**
     * Method to create base model from request.
     *
     * @param RequestAbstract $request Request
     *
     * @return BaseModel Returns the created base model from the request
     *
     * @since 1.0.0
     */
    private function createBaseModelFromRequest(RequestAbstract $request) : BaseModel
    {
        $baseModel = new BaseModel();

        return $baseModel;
    }

    /**
     * Api method to get a base model
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return void
     *
     * @api
     *
     * @since 1.0.0
     */
    public function apiBaseModelGet(RequestAbstract $request, ResponseAbstract $response, $data = null) : void
    {
        $baseModel = BaseModelMapper::get((int) $request->getData('id'));
        $this->fillJsonResponse($request, $response, NotificationLevel::OK, 'BaseModel', 'BaseModel successfully returned.', $baseModel);
    }

    /**
     * Api method to update a base model
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return void
     *
     * @api
     *
     * @since 1.0.0
     */
    public function apiBaseModelSet(RequestAbstract $request, ResponseAbstract $response, $data = null) : void
    {
        $old = clone BaseModelMapper::get((int) $request->getData('id'));
        $new = $this->updateBaseModelFromRequest($request);
        $this->updateModel($request, $old, $new, BaseModelMapper::class, 'basemodel');
        $this->fillJsonResponse($request, $response, NotificationLevel::OK, 'Base Model', 'Base model successfully updated.', $new);
    }

    /**
     * Method to update an base model from a request
     *
     * @param RequestAbstract $request Request
     *
     * @return BaseModel Returns the updated base model from the request
     *
     * @since 1.0.0
     */
    private function updateBaseModelFromRequest(RequestAbstract $request) : BaseModel
    {
        $baseModel = BaseModelMapper::get((int) ($request->getData('id')));

        return $baseModel;
    }
}
