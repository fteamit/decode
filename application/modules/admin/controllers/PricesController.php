<?php
/**
 *TrangVT
 */
class Admin_PricesController extends FTeam_Controller_AdminAction
{
    protected $_model;

    public function init()
    {
        parent::init();
        $this->_model = new Admin_Model_Prices();
    }
    /*
     * get prices collection
     */
    public function indexAction()
    {
        $pagination = new FTeam_Paginator();
        $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
        $this->view->pricesCollection = $this->_model->getAllPrices();
    }
    /*
     * update status
     */
    public function updatestatusAction()
    {
        $id = $this->getRequest()->getParam('id');
        $status = $this->getRequest()->getParam('status');
        $result = $this->_model->statusUpdate($id, $status);
        if ($result){
            $this->_helper->FlashMessenger()->setNamespace('success')->addMessage('updated status successfully!');
        }
        else{
            $this->_helper->FlashMessenger()->setNamespace('fail')->addMessage('updated status fail!');
        }
        $this->_helper->redirector('index', 'prices');
    }
    /*
     * update or insert action
     */
    public function updateAction()
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
                $request = $this->getRequest()->getParams();
                $value = $validate->getValue();

                $price_id = $request['price_id'];

                $price_desc = $request['price_desc'];
                $price_status = $request['price_status'];

                $price_name = $value['price_name'];
                $price_value = $value['price_value'];
                $singlePrice = array(
                    'price_name' => $price_name,
                    'price_desc' => $price_desc,
                    'price_value' => $price_value,
                    'price_status' => $price_status
                );
                if($price_id){
                    //update the price
                    $result = $this->_model->updatePrice($singlePrice, $price_id);
                    if ($result){
                        //has changed
                        $this->view->messages = __('updated successfully!');
                    }else{
                        //hasnt changed
                        $this->view->messages = array('wasnt_changed' => array(__('wasnt changed!')));
                        //$this->_helper->redirector('update','prices','admin',array('id'=>$price_id));
                    }
                }else{
                    //insert a price
                    $result = $this->_model->insertPrice($singlePrice);
                    if ($result){
                        $this->_helper->FlashMessenger()->setNamespace('success')->addMessage('inserted successfully!');
                    }
                    else{
                        $this->_helper->FlashMessenger()->setNamespace('fail')->addMessage('inserted fail!');
                    }
                    $this->_helper->redirector('index', 'prices');
                }
            }else{
                //didnt pass validate
                $this->view->messages = $validate->getMessages();
            }
        }
        //display update form or insert form
        if($this->getRequest()->getParam('id')){
            //show update form
            $price_id = $this->getRequest()->getParam('id');
            $singlePrice = $this->_model->getSinglePrice($price_id);
            $this->view->singlePrice = $singlePrice;
        }//show insert form
    }
    /*
     * delete the price
     */
    public function deleteAction(){
        $id = $this->getRequest()->getParam('id');
        $result = $this->_model->deletePrice($id);
        if ($result){
            $this->_helper->FlashMessenger()->setNamespace('success')->addMessage('deleted successfully!');
        }
        else{
            $this->_helper->FlashMessenger()->setNamespace('fail')->addMessage('deleted fail!');
        }
        $this->_helper->redirector('index', 'prices');
    }
}