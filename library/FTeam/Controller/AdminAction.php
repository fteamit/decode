<?php

class FTeam_Controller_AdminAction extends FTeam_Controller_Action
{

    protected $_paginator = array(
        'itemCountPerPage' => ITEM_COUNT_PER_PAGE,
        'pageRange' => PAGE_RANGE,
    );
    protected $_currentController;

    public function init()
    {
        $this->changLanguages();
        $login = new Zend_Session_Namespace('login_admin');
        if (empty($login->user_info))
        {
            
        }
        $template_path = TEMPLATE_PATH . "/admin/default";
        $this->loadTemplate($template_path);
        $this->_arrParam = $this->_request->getParams();
        $this->_currentController = '/' . $this->_arrParam['module'] . '/' . $this->_arrParam['controller'];
        $this->_paginator['currentPage'] = $this->_request->getParam('page', 1);
        $this->view->currentController = $this->_currentController;
    }

}
