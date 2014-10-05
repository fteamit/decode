<?php

class Admin_Model_Options extends Zend_Db_Table
{

    protected $_name = 'tbl_options';
    protected $_primary = 'option_id';

    protected function get_options_by_group_code($group_code, $status = -1)
    {
        $lang = DEFAULT_LANGUAGES;
        $languages = New Zend_Session_Namespace('languages');
        if (!empty($languages->languages))
        {
            $lang = $languages->languages;
        }
        $where = "option_group IN ($group_code) AND option_lang = '$lang'";
        if ($status !== -1)
        {
            $where .= " AND user_status = $status";
        }
        $columns = array('option_id', 'option_name', 'option_group', 'option_status');
        $select = $this->select()
                ->from($this->_name, $columns)
                ->where($where);
        $result = $this->fetchAll($select);
        if (count($result))
        {
            $result = $result->toArray();
        }
        return $result;
    }

    public function get_option_general_settings()
    {
        $str_group_code = "'" . GLOBAL_MENU_TOP . "','" . GLOBAL_LOGO . "'";
        $general_settings = $this->get_options_by_group_code($str_group_code);
        return $general_settings;
    }

    public function get_option_home_settings()
    {
        $str_group_code = "'" . HOME_BANNER . "','" . HOME_VIDEO . "','" . HOME_DECODE . "'";
        $home_settings = $this->get_options_by_group_code($str_group_code);
        return $home_settings;
    }

    public function get_option_game_settings()
    {
        $str_group_code = "'" . GAMES_SLIDESHOW_IMG . "','" . GAMES_RULE . "'";
        $game_settings = $this->get_options_by_group_code($str_group_code);
        return $game_settings;
    }

    public function get_option_contact_settings()
    {
        $str_group_code = "'" . CONTACT_EMAIL . "','" . CONTACT_PHONE . "','" . CONTACT_ADDRESS . "','" . CONTACT_FACEBOOK . "'";
        $contact_settings = $this->get_options_by_group_code($str_group_code);
        return $contact_settings;
    }

    public function update_status_option($option_id = 0, $status = -1)
    {
        if ($option_id > 0 && $status !== -1)
        {
            $where = "option_id = $option_id";
            $data = array('option_status' => $status);
            $update = $this->update($data, $where);
            if ($update > 0)
            {
                return TRUE;
            }
            return FALSE;
        }
    }

}
