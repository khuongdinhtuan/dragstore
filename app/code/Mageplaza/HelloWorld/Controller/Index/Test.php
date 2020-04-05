<?php
/**
 * Created by PhpStorm.
 * User: hero
 * Date: 05/04/2020
 * Time: 17:01
 */

namespace Mageplaza\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Test extends Action
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
        echo "Hello World";
        exit;
    }
}
