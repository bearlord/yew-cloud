<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 * Class RestController
 * @package ESD\Plugins\Cloud\Gateway\Annotation
 */
class RestController extends Controller
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