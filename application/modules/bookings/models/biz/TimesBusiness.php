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
        return array(
            date('D', strtotime($today)) => $today,
            date('D', strtotime($today . ' +1 day ')) => date('d-m-Y', strtotime($today . ' +1 day ')),
            date('D', strtotime($today . ' +2 day ')) => date('d-m-Y', strtotime($today . ' +2 day ')),
            date('D', strtotime($today . ' +3 day ')) => date('d-m-Y', strtotime($today . ' +3 day ')),
            date('D', strtotime($today . ' +4 day ')) => date('d-m-Y', strtotime($today . ' +4 day ')),
            date('D', strtotime($today . ' +5 day ')) => date('d-m-Y', strtotime($today . ' +5 day ')),
            date('D', strtotime($today . ' +6 day ')) => date('d-m-Y', strtotime($today . ' +6 day '))
        );
    }
}