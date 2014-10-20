<?php

class Bookings_Model_Biz_GamesBusiness
{
    protected $_dbGames;

    public function __construct()
    {
        $this->_dbGames = new Bookings_Model_Dbtable_Games();
    }

    /**
     * @param null $id
     * @return array|bool
     */
    public function getGames($id = null)
    {
        $aryGames = array();
        $aryWhere = array();
        if ($id) {
            $aryWhere = array(
                'game_id' => $id
            );
        }
        $intIsOk = $this->_dbGames->listData($aryGames, '*', $aryWhere);
        if ($intIsOk == 1) {
            return $aryGames;
        }
        return false;
    }
}