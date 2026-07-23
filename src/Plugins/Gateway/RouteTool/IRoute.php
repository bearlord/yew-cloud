<?php
/**
 * ESD framework
 * @author tmtbe <896369042@qq.com>
 */

namespace Yew\Cloud\Plugins\Gateway\RouteTool;

use ESD\Plugins\Cloud\Gateway\GatewayConfig;
use ESD\Plugins\Pack\ClientData;

/**
 * Interface IRoute
 * @package ESD\Plugins\EasyRoute\RouteTool
 */
interface IRoute
{
    /**
     * @param ClientData $clientData
     * @param GatewayConfig $gatewayConfig
     * @return bool
     */
    public function handleClientData(ClientData $clientData, GatewayConfig $gatewayConfig): bool;

    /**
     * Get Controller name
     *
     * @return string|null
     */
    public function getControllerName(): ?string;

    /**
     * Get method name
     *
     * @return string|null
     */
    public function getMethodName(): ?string;

    /**
     * Get params
     *
     * @return array|null
     */
    public function getParams(): ?array;

    /**
     * Get path
     *
     * @return string|null
     */
    public function getPath(): ?string;
}