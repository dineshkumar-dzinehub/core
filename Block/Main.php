<?php

namespace Dzinehub\Core\Block;

class Main extends \Magento\Framework\View\Element\Template
{

    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $_customerSession;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */    
    protected $_storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
        )
    {
        parent::__construct($context, $data);        
        $this->_customerSession = $customerSession;  
        $this->_storeManager = $storeManager;  
    }

    public function getGroupId(){
        return $this->_customerSession->getCustomer()->getGroupId();
    }

    public function getBaseUrl(){
        return $this->_storeManager->getStore()->getBaseUrl();
    }   
}