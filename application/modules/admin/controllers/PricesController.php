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
        $this->view->pricesCollection = $this->_priceModel->getAllPrices();
    }

    public function updateAction()
    {
        //display update form or insert form
        if($this->getRequest()->getParam('id')){
            //show update form
            $price_id = $this->getRequest()->getParam('id');
            $singlePrice = $this->_priceModel->getSinglePrice($price_id);
            $this->view->singlePrice = $singlePrice;
        }else{
            //show add form
        }
        //update or insert action
        if($this->getRequest()->isPost()){
            //has request

            $price_validate = array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_Float()
            );

            $arr_messages = array(
                'price_value' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'price is not empty!',
                    Zend_Validate_Float::NOT_FLOAT => 'price is number!'
                ),
                'price_name' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'name is not empty!'
                )
            );
            $arr_validate = array(
                'price_value' => $price_validate,
                'price_name' => new Zend_Validate_NotEmpty()
            );
            $validate = new FTeam_Validate_MyValidate();

            if ($validate->isValid($arr_validate, $arr_messages)){
                //passed validate
                $this->_helper->redirector('index','prices');
            }else{
                //didnt pass validate
                $this->view->messages = $validate->getMessages();
                //$this->_helper->redirector('update','prices','admin',array('id'=>$price_id));

            }
        }

    }

    public function saveAction()
    {
        if($this->getRequest()->isPost()){
            //has request
            $price_validate = array(
                new Zend_Validate_NotEmpty(),
                new Zend_Validate_Float()
            );

            $arr_messages = array(
                'price_value' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'price is not empty!',
                    Zend_Validate_Float::NOT_FLOAT => 'price is number!'
                ),
                'price_name' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'name is not empty!'
                )
            );
            $arr_validate = array(
                'price_value' => $price_validate,
                'price_name' => new Zend_Validate_NotEmpty()
            );
            $validate = new FTeam_Validate_MyValidate();

            if ($validate->isValid($arr_validate, $arr_messages)){
                //passed validate
                echo 11111111;
            }else{
                //didnt pass validate
                $this->_helper->redirector('update','prices','admin',array('id'=>1));

            }
        }else{
            //hadnt request
            $this->_helper->redirector('index','prices');
        }

    }

}