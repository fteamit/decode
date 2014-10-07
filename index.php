<?php
include_once 'const.php';
include_once 'functions.php';

//Goi lop Zend Application
require_once 'Zend/Application.php';
$environment = APPLICATION_ENV;
$options = APPLICATION_PATH . '/configs/application.ini';
$application = new Zend_Application($environment, $options);
$application->bootstrap();

$front = Zend_Controller_Front::getInstance();
try {
    $front->dispatch();
} catch (Zend_Exception $e) {
    header( 'HTTP/1.0 404 Not Found' );
    echo "<div style='float:center; width:1000px; margin:0 auto;'><img src='http://www.barrywise.com/wp-content/uploads/2008/08/404-page-not-found-image-194x300.jpg'  alt='Everything is gonna be fine, please do not panic!' /></div>";
}