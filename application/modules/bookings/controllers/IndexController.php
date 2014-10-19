<?php

class Bookings_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'booking';
    protected $_bizTimes;

    /**
     *
     */
    public function init()
    {
        parent::init();
        $this->_bizTimes = new Bookings_Model_Biz_TimesBusiness();
    }

    /**
     *
     */
    public function indexAction()
    {

    }

    /**
     *
     */
    public function bookingsAction()
    {

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

}
