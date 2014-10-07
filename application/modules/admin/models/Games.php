<?php
class Admin_Model_Games extends Zend_Db_Table
{

    protected $_name = 'tbl_games';
    protected $_primary = 'game_id';

    public function getAllGames(){
        return $this->fetchall()->toArray();
    }



}
