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
        //show update form
        if($this->getRequest()->getParam('id')){
            $price_id = $this->getRequest()->getParam('id');
            $singlePrice = $this->_priceModel->getSinglePrice($price_id);
            $this->view->singlePrice = $singlePrice;
        }

    }

    public function saveAction()
    {
        if($this->getRequest()->isPost()){

            $arr_messages = array(
                'price_name' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'price name is not empty',
                ),
                'price_value' => array(
                    Zend_Validate_NotEmpty::IS_EMPTY => 'price is not empty'
                )
            );
            $arr_validate = array(
                'price_name' => new Zend_Validate_NotEmpty(),
                'price_value' => new Zend_Validate_NotEmpty()
            );
            $validate = new FTeam_Validate_MyValidate();
            if ($validate->isValid($arr_validate, $arr_messages)){

                $request = $this->getRequest()->getParams();
                $value = $validate->getValue();

                $price_id = $request['price_id'];
                $price_name = $value['price_name'];
                $price_desc = $request['price_desc'];
                $price_value = $value['price_value'];
                $price_status = $request['price_status'];
                $singlePrice = array(
                    'price_name' => $price_name,
                    'price_desc' => $price_desc,
                    'price_value' => $price_value,
                    'price_status' => $price_status
                );

                $result = $this->_priceModel->updatePrice($singlePrice, $price_id);

                if ($result){
                    $this->view->messages = __('update settings success!');
                }else{
                    $this->view->messages = array('update_fail' => array(__('update settings fail!')));
                }
            }else{
                $this->view->messages = $validate->getMessages();
            }

        }
        $this->_helper->redirector('index', 'prices');

    }

}