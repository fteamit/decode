<?php

class Bookings_Model_Biz_PricesBusiness
{
    protected $_dbPrices;

    public function __construct()
    {
        $this->_dbPrices = new Bookings_Model_Dbtable_Prices();
    }

    public function getPrices()
    {
        $aryPrice = array();
        $aryWhere = array(
            'price_lang' => 'vi'
        );
        $intIsOk = $this->_dbPrices->listData($aryPrice, '*', $aryWhere);
        if ($intIsOk == 1) {
            return $aryPrice;
        }
        return false;
    }
}