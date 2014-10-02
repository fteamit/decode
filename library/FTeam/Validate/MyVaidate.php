<?php

class FTeam_Validate_MyValidate 
{

    protected $arr_fields;

    public function __construct()
    {
        
    }

    public function add_validate($list_validate = array(), $break = TRUE)
    {
        $validate = new Zend_Validate();
        if (count($list_validate) > 0)
        {
            foreach ($list_validate as $_validate)
            {
                $validate->addValidator($_validate, $break);
            }
        }
        return $validate;
    }

    public function set_list_fields($list_fields = array())
    {
        if (count($list_fields) > 0)
        {
            $this->arr_fields = $list_fields;
        }
    }

    public function isValid()
    {
        if (count($this->arr_fields) > 0)
        {
            foreach ($this->arr_fields as $fields => $value)
            {
                if(!$fields->isValid($value))
                {
                    return FALSE;
                }
            }
        }
        return TRUE;
    }

}
