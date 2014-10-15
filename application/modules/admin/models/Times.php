<?php
/**
 *TrangVT
 */
class Admin_Model_Times extends Zend_Db_Table
{

    protected $_name = 'tbl_times';
    protected $_primary = 'time_id';

    public function __construct($config = array(), $definition = null)
    {
        parent::__construct($config, $definition);
        $languages = New Zend_Session_Namespace('languages');
        if (!empty($languages->languages)) {
            $this->_languages = $languages->languages;
        }
    }

    /*
     * get times table
     */
    public function getAllTimes()
    {
        $where = "1 = 1";
        $result = $this->fetchall($where);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    /*
     * get single time row
     */
    public function getSingleTime($time_id = null)
    {
        $where = '1=1 AND ';
        if ($time_id) {
            $where .= "$this->_primary = $time_id";
        }
        $select = $this->select()->from($this->_name)->where($where);
        $result = $this->fetchRow($select);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    /*
     * update status sql
     */
    public function statusUpdate($id = null, $status = '')
    {
        if ($id != null && $status !== ''){
            $where = "$this->_primary = $id";
            $data = array('time_status' => $status);
            $result = $this->update($data, $where);
            if ($result != 0){
                return true;
            }
            return false;
        }
    }
    /*
     * update single row sql
     */
    public function updateTime($data = array(), $id = null)
    {
        $where = '1=1 AND ';
        if($id != null){
            $where .= "$this->_primary = $id";
        }
        $result = $this->_db->update($this->_name, $data, $where);
        if ($result != 0){
            return true;
        }
        return false;
    }
    /*
     * insert a new time
     */
    public function insertTime($singleTimeInsert = array()){
        if($singleTimeInsert){
            $insert = $this->insert($singleTimeInsert);
        }
        $result = $this->fetchRow($insert);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    /*
     * delete time
     */
    public function deleteTime($time_id = null){
        $where = '1=1 AND ';
        if($time_id != null){
            $where .= "time_id = $time_id";
        }
        $result = $this->delete($where);
        if ($result != 0){
            return true;
        }
        return false;
    }

}
