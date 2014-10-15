<?php

class Admin_Model_Faqs extends Zend_Db_Table
{

    protected $_name = 'tbl_faqs';
    protected $_primary = 'faq_id';
    protected $_languages = DEFAULT_LANGUAGES;

    public function __construct($config = array(), $definition = null)
    {
        parent::__construct($config, $definition);
        $languages = New Zend_Session_Namespace('languages');
        if (!empty($languages->languages))
        {
            $this->_languages = $languages->languages;
        }
    }

    public function getFaqs()
    {
        $data=$this->select();
        $data->from($this->_name);
        $data->where('faq_lang = ?', $this->_languages);
        $data = $this->fetchall($data);
        return $data;

    }

    public function saveFaqs($data, $id = NULL){
        if(!$id) {
            $this->insert($data);
        } else {
            $where = " faq_id = $id";
            $this->update($data,$where);
        }

    }

    public function getById($id) {
        if($id) {
            $data=$this->select();
            $data->from($this->_name);
            $data->where('faq_id = ?', $id);
            $data = $this->fetchRow($data);
            return $data;
        }
    }

    public function deleteFaqs($id) {
        $where = " faq_id = ".$id;
        $this->delete($where);

    }

}
