<?php
/**
 * Class Bookings_Model_Biz_TimesBusiness
 */
class Bookings_Model_Biz_TimesBusiness
{
    protected $_dbTimes;

    public function __construct()
    {
        $this->_dbTimes = new Bookings_Model_Dbtable_Times();
    }

    /**
     * @desc get all slot of time
     * @author ThaiNV <thainv@smartosc.com>
     * @since 09/10/2014
     *
     * @return array|bool
     */
    public function getTimeSlot()
    {
        $aryTimes = array();
        $intIsOk = $this->_dbTimes->listData($aryTimes);
        if ($intIsOk == 1) {
            return $aryTimes;
        }
        return false;
    }

    /**
     * @desc get next 7 day from today
     * @author ThaiNV <thainv@smartosc.com>
     * @since 09/10/2014
     *
     * @return array
     */
    public function getDaysOfWeek()
    {
        $today = date('d-m-Y');
        $aryDate = array();
        for ($i = 0; $i <= 6; $i++) {
            $day = date('D', strtotime($today . ' +' . $i . ' day '));
            $date = date('d-m-Y', strtotime($today . ' +' . $i . ' day '));
            $aryDate[$day] = $date;
        }
        return $aryDate;
    }
}