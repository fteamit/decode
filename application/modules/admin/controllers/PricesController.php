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

    public function addAction(){

    }
    public function saveAction(){

}

}