<?php
/**
 * Yew Cloud
 * @author bearlord <565364226@qq.com>
 */

namespace Yew\Plugins\Register;

use Yew\Core\Context\Context;
use Yew\Core\Plugin\AbstractPlugin;
use Yew\Core\Plugins\Yew\YewPlugin;

class RegisterPlugin extends AbstractPlugin
{
    public function __construct()
    {
        parent::__construct();
        $this->atAfter(YewPlugin::class);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return "RegisterPlugin";
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
        // TODO: Implement beforeProcessStart() method.
    }
}