<?php

class Bookings_IndexController extends FTeam_Controller_Action
{

    protected $class_body = 'booking';

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        
    }
    public function bookingsAction()
    {
        $this->class_body = 'booking-detail';
        $this->view->class_body = $this->class_body;
    }

}
