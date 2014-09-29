<?php

class Admin_IndexController extends FTeam_Controller_AdminAction
{

    protected $_paginator = array(
        'itemCountPerPage' => ITEM_COUNT_PER_PAGE,
        'pageRange' => PAGE_RANGE,
    );
    protected $_currentController;
    
    protected $_arrParam;

    public function init()
    {
        parent::init();
        $this->_arrParam = $this->_request->getParams();
        $this->_currentController = '/' . $this->_arrParam['module'] . '/' . $this->_arrParam['controller'];
        $this->_paginator['currentPage'] = $this->_request->getParam('page', 1);
        $this->_arrParam['paginator'] = $this->_paginator;
    }

    public function indexAction()
    {
        $paginator = new FTeam_Paginator();
        $totalItem = 20;
        $this->view->currentController = $this->_currentController;
        $this->view->panigator = $paginator->createPaginator($totalItem, $this->_paginator);
    }

    public function viewAction()
    {
        echo '<br>' . __METHOD__;
    }

}
