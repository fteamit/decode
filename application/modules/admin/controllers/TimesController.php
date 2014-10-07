<?php
/**
 *TrangVT
 */
class Admin_TimesController extends FTeam_Controller_AdminAction
{

    public function init()
    {
        parent::init();
    }

    public function indexAction(){
        $pagination = new FTeam_Paginator();
        $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
    }

}