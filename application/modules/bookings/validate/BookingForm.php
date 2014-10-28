<?php

class Bookings_Validate_BookingForm extends FTeam_Validate_MyValidate
{
    public function isValid($aryParams)
    {
        $aryErr = array();
        $aryCondition = array();
        if (empty($aryParams)) {
            return false;
        } else {
            foreach ($aryParams as $key => $value) {
                switch ($key) {
                    case "first_name":
                        $aryErr = array(
                            $key => array(Zend_Validate_NotEmpty::IS_EMPTY => "First name can not empty")
                        );
                        $aryCondition = array(
                            $key => new Zend_Validate_NotEmpty()
                        );
                        break;
                    case "last_name":
                        $aryErr = array(
                            $key => array(Zend_Validate_NotEmpty::IS_EMPTY => "Last name can not empty")
                        );
                        $aryCondition = array(
                            $key => new Zend_Validate_NotEmpty()
                        );
                        break;
                    case "contact_no":
                        $aryErr = array(
                            $key => array(Zend_Validate_NotEmpty::IS_EMPTY => "Contact number can not empty"),
                            $key => array(Zend_Validate_Float::NOT_FLOAT => 'Contact number must be number')
                        );
                        $aryCondition = array(
                            $key => array(
                                new Zend_Validate_NotEmpty(),
                                new Zend_Validate_Float(),
                            )
                        );
                        break;
                    case "gender":
                        $aryErr = array(
                            $key => array(Zend_Validate_NotEmpty::IS_EMPTY => "Gender can not empty")
                        );
                        $aryCondition = array(
                            $key => new Zend_Validate_NotEmpty()
                        );
                        break;
                    case "email":
                        $aryErr = array(
                            $key => array(Zend_Validate_NotEmpty::IS_EMPTY => "Email can not empty"),
                            $key => array(Zend_Validate_EmailAddress::INVALID_FORMAT => "Email not valid")
                        );
                        $aryCondition = array(
                            $key => array(
                                new Zend_Validate_NotEmpty(),
                                new Zend_Validate_EmailAddress(),
                            )
                        );
                        break;
                }
            }
            return parent::isValid($aryCondition, $aryErr);
        }
    }
}