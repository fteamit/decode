<?php

class Admin_IndexController extends FTeam_Controller_AdminAction
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
       $pagination = new FTeam_Paginator();
       $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
    }

}
