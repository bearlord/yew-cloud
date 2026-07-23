<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 * Class ModelAttribute
 * @package ESD\Plugins\Cloud\Gateway\Annotation
 */
class ModelAttribute extends Annotation
{
    /**
     * @var string
     */
    public $value;
}