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
                    $this->view->messages = __('update success!');
                    $this->_helper->redirector('index', 'prices');
                }else{
                    $this->view->messages = array('update_fail' => array(__('update fail!')));
                    $this->_helper->redirector('updates','id',$price_id,'prices');
                }
            }else{
                $this->view->messages = $validate->getMessages();
                $this->_helper->redirector('update','prices','admin',array('id'=>$this->getRequest()->getParam('price_id')));
            }

        }

    }

}//