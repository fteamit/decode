<?php
class Faqs_Model_Faqs extends Zend_Db_Table{

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

    public function getByWhere() {
        $data=$this->select();
        $data->from($this->_name);
        $data->where('faq_lang = ?', $this->_languages);
        $data = $this->fetchAll($data);
        return $data;
    }
}