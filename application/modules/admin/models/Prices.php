<?php
/**
 *TrangVT
 */
class Admin_Model_Prices extends Zend_Db_Table
{

    protected $_name = 'tbl_prices';
    protected $_primary = 'price_id';

    public function getAllPrices(){
        return $this->fetchall()->toArray();
    }

}