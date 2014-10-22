<?php

class IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'home';
    protected $_analysModel;

    public function init()
    {
        parent::init();
        $this->_analysModel = new Default_Model_Test();
    }

    public function indexAction()
    {
        $option = new Admin_Model_Options();
        $this->view->options_home_banner = $option->get_options_fontend(HOME_BANNER );
        $this->view->options_home_decode = $option->get_options_fontend(HOME_DECODE);
        $this->view->options_home_video = $option->get_options_fontend(HOME_VIDEO);

        $analys_ip = $_SERVER['REMOTE_ADDR'];
        $analys_time = time();
        $analys_status = '1';

        $data = array(
            'analys_ip' => $analys_ip,
            'analys_time' => $analys_time,
            'analys_status' => $analys_status
        );
        $count = count($this->_analysModel->getSingleRow($analys_ip));
        if($count == 0){
            $this->_analysModel->insertRow($data);
        }else{
            $this->_analysModel->updateRow($data, $analys_ip);
        }
        $this->view->online = count($this->_analysModel->getOnlineRow());
        $this->view->total = count($this->_analysModel->getAllRows());
    }

}
