<?php

class Bookings_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'booking';
    protected $_bizTimes;
    protected $_bizGames;

    /**
     *
     */
    public function init()
    {
        parent::init();
        $this->_bizTimes = new Bookings_Model_Biz_TimesBusiness();
        $this->_bizGames = new Bookings_Model_Biz_GamesBusiness();
    }

    /**
     *
     */
    public function indexAction()
    {
        $aryGames = $this->_bizGames->getGames();
        $this->view->aryGames = $aryGames;

    }

    /**
     *
     */
    public function bookingsAction()
    {
        $id = $this->_request->getParam('id');
        $game = $this->_bizGames->getGames($id);
        if (!$id || empty($game)) {
            $this->redirect('index');
        } else {
            $this->view->curGame = $game;
        }
    }

    /**
     * Process times booking table
     */
    public function timesdesktopAction()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        if ($aryTime = $this->_bizTimes->getTimeSlot()) {
            $this->view->aryTime = $aryTime;
        }

        $aryParams = $this->_request->getParams();
        $aryWeekDays = array();

        $isMoreDate = $this->_bizTimes->getDaysOfWeek($aryParams, $aryWeekDays);
        $this->view->curWeek = $aryWeekDays;
        $this->class_body = 'booking-detail';
        $this->view->class_body = $this->class_body;

        $html = $this->view->render('index/timesdesktop.phtml');
        $aryRespone = array(
            'html' => $html,
            'isMore' => $isMoreDate
        );
        $this->_response->setBody(Zend_Json::encode($aryRespone));
    }

    /**
     *
     */
    public function timesmobileAction()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
    }

    public function bookingformAction()
    {
        $aryData = $this->_request->getParams();
        $this->aryData = $aryData;
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $this->view->class_body = 'booking-form';
    }

}
