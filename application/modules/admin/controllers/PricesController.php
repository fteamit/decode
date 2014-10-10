<?php
/**
 *TrangVT
 */
class Admin_PricesController extends FTeam_Controller_AdminAction
{

    protected $_priceModel;

    public function init()
    {
        parent::init();
        $this->_priceModel = new Admin_Model_Prices();

    }

    public function indexAction()
    {
        $pagination = new FTeam_Paginator();
        $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
    }

    public function updateAction()
    {
        if($this->getRequest()->getParam('id')){
            $singlePrice = $this->_priceModel->getSinglePrice($this->getRequest()->getParam('id'));
            $this->view->singlePrice = $singlePrice;
        }

    }

    public function saveAction()
    {
        if($this->getRequest()->isPost()){
            $a = $this->getRequest()->getParams();
            var_dump($a);die;
        }

    }

}