<?php
/**
 * Yew framework
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway;

use Yew\Core\Server\Config\PortConfig;
use Yew\Cloud\Plugins\Gateway\RouteTool\AnnotationRoute;
use Yew\Plugins\Pack\PackTool\LenJsonPack;

class GatewayConfig extends PortConfig
{
    /**
     * @var string
     */
    protected $packTool = LenJsonPack::class;

    /**
     * @var string
     */
    protected $routeTool = AnnotationRoute::class;


    /**
     * @return string
     */
    public function getPackTool(): string
    {
        return $this->packTool;
    }

    /**
     * @param string $packTool
     */
    public function setPackTool(string $packTool): void
    {
        $this->packTool = $packTool;
    }

    /**
     * @return string
     */
    public function getRouteTool(): string
    {
        return $this->routeTool;
    }

    /**
     * @param string $routeTool
     */
    public function setRouteTool(string $routeTool): void
    {
        $this->routeTool = $routeTool;
    }
}