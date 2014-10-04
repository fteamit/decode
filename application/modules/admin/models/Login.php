<?php

class Admin_Model_Login extends Zend_Db_Table
{

    protected $_name = 'tbl_users';
    protected $_primary = 'user_id';

    public function login($email, $pass)
    {
        $pass = Password_Generator($pass . $email);
        $where = "user_email = '$email' AND user_password = '$pass' AND user_status = 1";
        $column = array('user_id', 'user_email', 'user_name');
        $select = $this->select()
                ->from($this->_name, $column)
                ->where($where);
        $result = $this->fetchRow($select)->toArray();
        return $result;
    }

}
