<?php
/**
 *TrangVT
 */
class Admin_Model_Times extends Zend_Db_Table
{

    protected $_name = 'tbl_times';
    protected $_primary = 'time_id';

    public function getAllTimes(){
        return $this->fetchall()->toArray();
    }

}
