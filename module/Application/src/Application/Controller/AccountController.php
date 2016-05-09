<?php
// /module/Application/src/Application/Controller/AccountController.php

// This is to let the application know where this controller is located.
namespace Application\Controller;

// Default Zend Abstract Controller
use Zend\Mvc\Controller\AbstractActionController;

// Your Controller Class (Name should follow the same convention as above). This also extends the default Abstract Controller.
class AccountController extends AbstractActionController
{
    // Keep the name as in your route's action, replacing the dash with uppercase.
    // login-page becomes loginPage, and add Action so zend knows this is the action for the specified route.
    public function loginAction() {
        // Your logic code here.        
    }

}