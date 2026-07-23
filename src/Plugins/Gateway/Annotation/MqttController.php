<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class MqttController extends Controller
{
    /**
     * @var array
     */
    public $portTypes = ["mqtt"];

    /**
     * @var string
     */
    public $defaultMethod = "tcp";
}