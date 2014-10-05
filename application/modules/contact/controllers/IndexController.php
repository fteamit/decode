<?php

class Contact_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'contact';

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        $option = new Admin_Model_Options();
        $this->view->options_contact_add = $option->get_options_fontend(CONTACT_ADDRESS);
        $this->view->options_contact_email = $option->get_options_fontend(CONTACT_EMAIL);
        $this->view->options_contact_phone = $option->get_options_fontend(CONTACT_PHONE);
        $this->view->options_contact_facebook = $option->get_options_fontend(CONTACT_FACEBOOK);
    }

}
