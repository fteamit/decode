<?php

class Bookings_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'booking';
    protected $_bizTimes;

    public function init()
    {
        parent::init();
        $this->_bizTimes = new Bookings_Model_Biz_TimesBusiness();
    }

    public function indexAction()
    {

    }

    public function bookingsAction()
    {
        if ($aryTime = $this->_bizTimes->getTimeSlot()) {
            $this->view->aryTime = $aryTime;
        }
        $this->view->curWeek = $this->_bizTimes->getDaysOfWeek();
        $this->class_body = 'booking-detail';
        $this->view->class_body = $this->class_body;
    }

}
