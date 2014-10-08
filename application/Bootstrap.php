<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    //Session
    protected function _intSession()
    {
        Zend_Session::start();
    }

    //cau hinh ket noi db
    protected function _initDb()
    {
        $optionResources = $this->getOption('resources');
        $dbOption = $optionResources['db'];
        $dbOption['params']['username'] = 'root';
        $dbOption['params']['password'] = '';
        $dbOption['params']['dbname'] = 'fteam_decode';

        $adapter = $dbOption['adapter'];
        $config = $dbOption['params'];

        $db = Zend_Db::factory($adapter, $config);
        $db->setFetchMode(Zend_Db::FETCH_ASSOC);
        $db->query("SET NAMES 'utf8'");
        $db->query("SET CHARACTER SET 'utf8'");

        Zend_Registry::set('connectDb', $db);

        Zend_Db_Table::setDefaultAdapter($db);

        return $db;
    }

    protected function _initAutoload()
    {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(array(
            'module' => 'error',
            'controller' => 'error',
            'action' => 'error'
        )));
    }
}