<?php

/**
 * Class Bookings_Model_Biz_TimesBusiness
 */
class Bookings_Model_Biz_TimesBusiness
{
    protected $_dbTimes;

    const PREV = -1;
    const PAGE_LOAD = 0;
    const NEXT = 1;
    const PLUS = '+';
    const MINUS = '-';
    const DAY_LIMIT = '+20 day';

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
     * @param $aryParams
     * @param $aryDate
     * @return bool
     */
    public function getDaysOfWeek($aryParams, &$aryDate)
    {
        $aryDate = array();
        $canLoad = true;
        $op = self::PLUS;
        $dateStage = $aryParams['time'];
        $maxDate = date('d-m-Y', strtotime(date('d-m-Y') . self::DAY_LIMIT));
        switch ($aryParams['act']) {
            case self::PREV:
                $op = self::MINUS;
                if ($this->compareDate($dateStage, date('d-m-Y')) > 0) {
                    $canLoad = false;
                }
                break;
            case self::NEXT;
                if ($this->compareDate($dateStage, $maxDate) < 0) {
                    $canLoad = false;
                }
                break;
        }
        if ($canLoad) {
            $aryDate = $this->processDate($dateStage, $op);
            return true;
        }
        return false;
    }

    /**
     * @param $dateStage
     * @param $op
     * @return array
     */
    public function processDate($dateStage, $op)
    {
        $aryDate = array();
        if ($op == self::MINUS) {
            for ($i = 6; $i >= 0; $i--) {
                $day = date('D', strtotime($dateStage . " $op" . $i . ' day '));
                $date = date('d-m-Y', strtotime($dateStage . " $op" . $i . ' day '));
                $aryDate[$day] = $date;
            }
        } else {
            for ($i = 0; $i <= 6; $i++) {
                $day = date('D', strtotime($dateStage . " $op" . $i . ' day '));
                $date = date('d-m-Y', strtotime($dateStage . " $op" . $i . ' day '));
                $aryDate[$day] = $date;
            }
        }
        return $aryDate;
    }

    /**
     * @param $date1
     * @param $date2
     * @return int
     */
    public function compareDate($date1, $date2)
    {
        return (int)date_diff(date_create($date1), date_create($date2))->format("%R%a");
    }

}