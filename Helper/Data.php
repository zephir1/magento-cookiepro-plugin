<?php

namespace Onetrust\CookiePro\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const COOKIEPRO_STATUS = 'cookiepro/general/cookiepro_status';
    const COOKIEPRO_SCRIPT = 'cookiepro/general/cookiepro_header';

    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    public function cookieproStatus()
    {
        return $this->scopeConfig->getValue(
            self::COOKIEPRO_STATUS,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function cookieproScript()
    {
        return $this->scopeConfig->getValue(
            self::COOKIEPRO_SCRIPT,
            ScopeInterface::SCOPE_STORE
        );
    }

}
