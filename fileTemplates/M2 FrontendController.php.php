<?php

namespace ${NAMESPACE};

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class ${NAME}
 */
class ${NAME} extends Action
{
    /**
     * @var PageFactory
     */
    protected ${DS}resultPageFactory;

    /**
     * @var Context
     */
    protected ${DS}context;

    /**
     * ${NAME} constructor.
     *
     * @param Context ${DS}context
     * @param PageFactory ${DS}resultPageFactory
     */
    public function __construct(
        Context ${DS}context,
        PageFactory ${DS}resultPageFactory
    ) {
        parent::__construct(${DS}context);
        ${DS}this->resultPageFactory = ${DS}resultPageFactory;
        ${DS}this->context = ${DS}context;
    }

    /**
     * @return ResponseInterface|ResultInterface|Page
     */
    public function execute()
    {
        return ${DS}this->resultPageFactory->create();
    }
}
