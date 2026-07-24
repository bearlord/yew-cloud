<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway;

use Yew\Framework\Controller;

class NormalErrorController extends Controller
{

    /**
     * Called when no method is found
     *
     * @param $methodName
     * @return mixed
     * @throws RouteException
     */
    protected function defaultMethod(?string $methodName)
    {
        throw new RouteException("404 method $methodName can not find");
    }
}