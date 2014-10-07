<?php
class Admin_Model_Times extends Zend_Db_Table
{

    protected $_name = 'tbl_times';
    protected $_primary = 'time_id';

    public function getAllGame(){
        return $this->fetchall()->toArray();
    }

}
