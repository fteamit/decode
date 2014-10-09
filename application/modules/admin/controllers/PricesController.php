<?php
/**
 *TrangVT
 */
class Admin_PricesController extends FTeam_Controller_AdminAction
{

    public function init()
    {
        parent::init();
    }

    public function indexAction(){
        $pagination = new FTeam_Paginator();
        $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
    }

    public function updateAction(){
        $this->view->id = $this->getRequest()->getParam('id', 0);

    }
    public function saveAction(){

}

}