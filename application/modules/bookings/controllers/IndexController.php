<?php

class Bookings_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'booking';
    protected $_bizTimes;
    protected $_bizGames;
    const ERR_LOAD = 'Can not load more time.';

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
     * Process times booking table
     */
    public function timesdesktopAction()
    {
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        $aryWeekDays = array();
        $aryParams = $this->_request->getParams();

        $isMoreDate = $this->_bizTimes->getDaysOfWeek($aryParams, $aryWeekDays);

        $this->view->curGame = $this->getCurGame($this->_request->getParam('gId'));
        if ($aryTime = $this->_bizTimes->getTimeSlot()) {
            $this->view->aryTime = $aryTime;
        }
        $this->view->curWeek = $aryWeekDays;
        $this->response($this->view->render('index/timesdesktop.phtml'), $isMoreDate, self::ERR_LOAD);
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
        $this->_helper->layout()->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);
        $aryData = $this->_request->getParams();
        $this->view->aryData = $aryData;
        $this->view->class_body = "booking-form";
        $this->response($this->view->render("index/bookingform.phtml"));
    }

    public function getCurGame($id)
    {
        if ($game = $this->_bizGames->getGames($id)) {
            return $game;
        }
        return array();
    }
}
