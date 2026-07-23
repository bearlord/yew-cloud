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
class TcpController extends Controller
{
    /**
     * @var array
     */
    public $portTypes = ["tcp"];

    /**
     * @var string
     */
    public $defaultMethod = "TCP";
}