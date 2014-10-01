<?php

class Admin_IndexController extends FTeam_Controller_AdminAction
{

    public function init()
    {
        parent::init();
        $template_path = TEMPLATE_PATH . "/admin/login";
        $this->loadTemplate($template_path);
    }

    public function indexAction()
    {
        
    }
    
    public function pageAction(){
        $paginator = new FTeam_Paginator();
        $totalItem = 20;
        $this->view->panigator = $paginator->createPaginator($totalItem, $this->_paginator);
//        $this->_helper->viewRenderer->setNoRender();
    }

}
