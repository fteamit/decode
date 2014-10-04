<?php

class Admin_Model_Options extends Zend_Db_Table
{

    protected $_name = 'tbl_options';
    protected $_primary = 'option_id';

    public function get_options_by_group_code($group_code ,$languages = DEFAULT_LANGUAGES, $status = -1)
    {
        $where = "option_group IN ($group_code) AND option_lang = '$languages'";
        if($status !== -1){
            $where .= " AND user_status = $status";
        }
        $result = $this->fetchAll($where);
        if(count($result)){
        	$result = $result->toArray();
        }
        return $result;
    }

}
