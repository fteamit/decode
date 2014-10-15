<?php

class Admin_FaqsController extends FTeam_Controller_AdminAction
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $mfaqs=new Admin_Model_Faqs();

        $this->view->faqs = $mfaqs->getFaqs();

       $pagination = new FTeam_Paginator();
       $this->view->pagination = $pagination->createPaginator(10, $this->_paginator);
    }

    public function editAction() {
        $id = $this->_request->getParam('id');
        if($id) {
            $faqModel = new Admin_Model_Faqs();
            $this->view->items = $faqModel->getById($id);
            $this->saveAction();
        }

    }

    public function saveAction() {

        if($this->_request->isPost()) {

            $errors = array();
            $validate = new Zend_Validate_NotEmpty();
            if(!$validate->isValid($this->_request->getParam('faq_question'))){
                $errors[] = "Question not empty";
            }
            if(!$validate->isValid($this->_request->getParam('faq_answer'))){
                $errors[] = "Answer not empty";
            }
            if(!$validate->isValid($this->_request->getParam('faq_status'))){
                $errors[] = "Status not empty";
            }
            if(!$validate->isValid($this->languages)){
                $errors[] = "Language not empty";
            }
            if(count($errors) > 0) {
                $this->view->items = $errors;
            } else {
                $id = $this->_request->getParam('id');
                if(!$id) {
                    $data = array(
                        'faq_question' => $this->_request->getParam('faq_question'),
                        'faq_answer' => trim($this->_request->getParam('faq_answer')),
                        'faq_status' => $this->_request->getParam('faq_status'),
                        'faq_lang' => $this->languages
                    );
                    $faqModel = new Admin_Model_Faqs();
                    $faqModel->saveFaqs($data);
                } else {
                    $data = array(
                        'faq_question' => $this->_request->getParam('faq_question'),
                        'faq_answer' => trim($this->_request->getParam('faq_answer')),
                        'faq_status' => $this->_request->getParam('faq_status'),
                        'faq_lang' => $this->languages
                    );
                    $faqModel = new Admin_Model_Faqs();
                    $faqModel->saveFaqs($data, $id);
                }
                $this->_redirect('admin/faqs');
            }

        }
    }

    public function deleteAction() {
        $id = $this->_request->getParam('id');
        if($id) {
            $faqsModel = new Admin_Model_Faqs();
            $faqsModel->deleteFaqs($id);
            $this->_redirect('admin/faqs');
        }
    }


}
