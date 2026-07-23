<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Annotation;

use Yew\Cloud\Plugins\Gateway\Annotation\Controller;

/**
 * @Annotation
 * @Target("CLASS")
 */
class RestGatewayController extends Controller
{
    /**
     * @var array
     */
    public $portTypes = ["http"];

    /**
     * @var string
     */
    public $defaultMethod = "GET";

}