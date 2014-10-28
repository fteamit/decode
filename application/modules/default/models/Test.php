<?php
class Default_Model_Test extends Zend_Db_Table{

    protected $_name = 'tbl_analys';
    protected $_primary = 'analys_id';
    protected $_languages = DEFAULT_LANGUAGES;

    public function __construct($config = array(), $definition = null)
    {
        parent::__construct($config, $definition);
        $languages = New Zend_Session_Namespace('languages');
        if (!empty($languages->languages)) {
            $this->_languages = $languages->languages;
        }
    }

	public function test(){
		echo '<br>' . __METHOD__;
	}
    //for count visit online
    public function getAllRows(){
        $where = "1 = 1";
        $result = $this->fetchall($where);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function getSingleRow($analys_ip = null)
    {
        $where = '1=1 AND ';
        if ($analys_ip) {
            $where .= "analys_ip = '$analys_ip'";
        }
        $select = $this->select()->from($this->_name)->where($where);
        $result = $this->fetchRow($select);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }

    public function getOnlineRow()
    {
        $where = "1 = 1 AND analys_status = 1";
        $result = $this->fetchall($where);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function updateRow($data = array(), $analys_ip = null)
    {
        $where = '1=1 AND ';
        if($analys_ip != null){
            $where .= "analys_ip = '$analys_ip'";
        }
        $result = $this->_db->update($this->_name, $data, $where);
        if ($result != 0){
            return true;
        }
        return false;
    }
    public function insertRow($data = array()){
        if($data){
            $insert = $this->insert($data);
        }
        $result = $this->fetchRow($insert);
        if (count($result)) {
            $result = $result->toArray();
        }
        return $result;
    }
    public function statusUpdate($analys_id = null)
    {
        if ($analys_id != null){
            $where = "analys_ip = '$analys_id'";
            $data = array('analys_status' => 0);
            $result = $this->update($data, $where);
            if ($result != 0){
                return true;
            }
            return false;
        }
    }
}