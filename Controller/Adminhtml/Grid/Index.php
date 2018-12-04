<?php

namespace Amasty\Wishlist\Controller\Adminhtml\Grid;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * Resource name for Amasty Wishlist
     */
    const RESOURCE_NAME = 'Amasty_Wishlist::amwishlist';

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu(self::RESOURCE_NAME);
        $resultPage->getConfig()->getTitle()->prepend(__('Popular items in wishlists'));

        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return parent::_isAllowed() && $this->_authorization->isAllowed(self::RESOURCE_NAME);
    }
}
