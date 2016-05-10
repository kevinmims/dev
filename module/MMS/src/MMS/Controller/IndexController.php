<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // check if login, if yes redirect to dashboardAction
        //  if not, redirect to loginAction

        return new ViewModel();
    }

    public function dashboardAction() {
        return new ViewModel(array(
        	'data' => 'This is the Dashboard Page'));        
    }
}
