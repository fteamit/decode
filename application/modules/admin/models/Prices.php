<?php
/**
 *TrangVT
 */
class Admin_Model_Prices extends Zend_Db_Table
{
    protected $_name = 'tbl_prices';
    protected $_primary = 'price_id';

    public function __construct($config = array(), $definition = null)
    {
        parent::__construct($config, $definition);
        $languages = New Zend_Session_Namespace('languages');
        if (!empty($languages->languages)) {
            $this->_languages = $languages->languages;
        }
    }
    /*
     * get prices table
     */
    public function getAllPrices()
    {
        $where = "price_lang = '$this->_languages'";
        $result = $this->fetchall($where);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    /*
     * get single price row
     */
    public function getSinglePrice($price_id = null)
    {
        $where = '1=1 AND ';
        if ($price_id) {
            $where .= "price_id = $price_id AND price_lang = '$this->_languages'";
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
    public function statusUpdate($option_id = null, $status = '')
    {
        if ($option_id != null && $status !== ''){
            $where = "price_id = $option_id";
            $data = array('price_status' => $status);
            $update = $this->update($data, $where);
            if ($update != 0){
                return true;
            }
            return false;
        }
    }
    /*
     * update single row sql
     */
    public function updatePrice($singlePriceUpdate = array(), $price_id = null)
    {
        $where = '1=1 AND ';
        if($price_id != null){
            $where .= "price_id = $price_id AND price_lang = '$this->_languages'";
        }
        $update = $this->_db->update($this->_name, $singlePriceUpdate, $where);
        if ($update != 0){
            return true;
        }
        return false;
    }
    /*
     * insert price
     */
    public function insertPrice($singlePriceInsert = array()){
        if($singlePriceInsert){
            $price_lang = array('price_lang'=>$this->_languages);
            $singlePriceInsert = array_merge($singlePriceInsert, $price_lang);
            $insert = $this->insert($singlePriceInsert);
        }
        $result = $this->fetchRow($insert);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
}