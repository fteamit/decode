<?php

//Translate
function __($str) {
    $translate =Zend_Registry::get('Zend_Translate');
    return $translate->_($str);
}
//
