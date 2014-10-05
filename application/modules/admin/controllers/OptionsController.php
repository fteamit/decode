<?php

class Admin_OptionsController extends FTeam_Controller_AdminAction
{

    protected $model_options;

    public function init()
    {
        parent::init();
        $this->model_options = new Admin_Model_Options();
    }

    public function indexAction()
    {
        $this->view->general_settings = $this->model_options->get_option_general_settings();
        $this->view->home_setting = $this->model_options->get_option_home_settings();
        $this->view->game_setting = $this->model_options->get_option_game_settings();
        $this->view->contact_setting = $this->model_options->get_option_contact_settings();
    }

    public function updatestatusAction()
    {
        $option_id = $this->getRequest()->getParam('id', 0);
        $status = $this->getRequest()->getParam('status', -1);
        $result = $this->model_options->update_status_option($option_id, $status);
        if ($result)
        {
            $this->_helper->FlashMessenger()->setNamespace('success')->addMessage('update status option success!');
        }
        else
        {
            $this->_helper->FlashMessenger()->setNamespace('fail')->addMessage('update status option fail!');
        }
        $this->_helper->redirector('index', 'options');
    }
    
    public function updateAction()
    {
        $option_id = $this->getRequest()->getParam('id', 0);
        echo "<pre>";
        print_r($option_id);
        echo "</pre>";
    }

}
