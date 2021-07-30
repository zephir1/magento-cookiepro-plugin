<?php

namespace Onetrust\CookiePro\Block;

use Onetrust\CookiePro\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class CookiePro extends Template implements BlockInterface
{
    protected $storeManager;
    protected $moduleHelper;

    public function __construct(
        Template\Context $context,
        Data $moduleHelper,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->moduleHelper = $moduleHelper;
    }

    public function addData(array $arr)
    {
    }

    public function setData($key, $value = null)
    {
    }

    public function cookieproStatus()
    {
        return $this->moduleHelper->cookieproStatus();
    }

    public function cookieproScript()
    {
        return $this->moduleHelper->cookieproScript();
    }

}
