<?php
/**
 * Yew Cloud
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Plugins\Gateway;

use Yew\Core\Context\Context;
use Yew\Core\Plugin\AbstractPlugin;
use Yew\Core\Plugin\PluginInterfaceManager;
use Yew\Core\Plugins\Yew\YewPlugin;

class GatewayPlugin extends AbstractPlugin
{

    public function __construct()
    {
        parent::__construct();
        $this->atAfter(YewPlugin::class);
    }

    public function getName()
    {
        return "GatewayPlugin";
    }

    /**
     * @param Context $context
     * @return void
     */
    public function init(Context $context)
    {
        parent::init($context);
    }

    /**
     * @param Context $context
     * @return void
     */
    public function beforeServerStart(Context $context)
    {

    }

    /**
     * @param Context $context
     * @return void
     */
    public function beforeProcessStart(Context $context)
    {

    }

    /**
     * @param PluginInterfaceManager $pluginInterfaceManager
     * @return void
     */
    public function onAdded(PluginInterfaceManager $pluginInterfaceManager)
    {
        parent::onAdded($pluginInterfaceManager);
    }


}