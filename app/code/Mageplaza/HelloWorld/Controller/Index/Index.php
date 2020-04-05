<?php
/**
 * Created by PhpStorm.
 * User: hero
 * Date: 05/04/2020
 * Time: 18:02
 */

namespace Mageplaza\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        // echo "hello world 2";
        // exit;
        return $this->_pageFactory->create();
    }
}
