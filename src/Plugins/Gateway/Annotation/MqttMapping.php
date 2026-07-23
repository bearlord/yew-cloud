<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
class MqttMapping extends RequestMapping
{
    public $method = ["mqtt"];
}