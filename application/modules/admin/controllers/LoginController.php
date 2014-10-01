<?php

class Admin_LoginController extends FTeam_Controller_Action
{

    public function init()
    {
        parent::init();
        $template_path = TEMPLATE_PATH . "/admin/login";
        $this->loadTemplate($template_path);
    }

    public function indexAction()
    {
        if ($this->getRequest()->isPost())
        {
            $email = $this->getRequest()->getParam('email');
            $pass = $this->getRequest()->getParam('password');
            $remember = $this->getRequest()->getParam('remember_me',0);
            $login = new Admin_Model_Login();
            $result = $login->login($email,$pass);
            if($result!== NUll){
                
            }
        }
    }

}
