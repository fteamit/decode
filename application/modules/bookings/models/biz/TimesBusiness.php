<?php
class Bookings_Model_Biz_TimesBusiness
{
    protected $_dbTimes;

    public function __construct()
    {
        $this->_dbTimes = new Bookings_Model_Dbtable_Times();
    }

    public function getTimeSlot()
    {

    }
}