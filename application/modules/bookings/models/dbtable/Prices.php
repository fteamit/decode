<?php
/**
 * Class Bookings_Model_Dbtable_Prices
 *
 * @author ThaiNV <thainv@smartosc.com>
 * @since  08/10/2014
 */
class Bookings_Model_Dbtable_Prices extends Zend_Db_Table
{
    protected $_TABLE_NAME = "tbl_prices";

    /**
     * @desc    List all record of table
     * @author  ThaiNV <thainv@smartosc.com>
     * @since   08/10/2014
     *
     * @param   reference $aryResult      get return result
     * @param   array     $aryFieldSelect field to filter
     * @param   array     $aryWhere       where condition
     * @param   null      $group          group by clause
     * @param   null      $order          order by clause
     * @param   null      $limit          limit clause
     *
     * @return  int
     */
    public function listData(&$aryResult, $aryFieldSelect = array('*'), $aryWhere = array(), $group = null, $order = null, $limit = null)
    {
        $where = '1 = 1';
        foreach ($aryWhere as $field => $value) :
            switch ($field) {
                case 'Emp_name':
                    $where .= $this->_db->quoteInto(" AND $field LIKE ? ", '%' . $value . '%');
                    break;
                default :
                    $where .= $this->_db->quoteInto(" AND $field = ? ", $value);
                    break;
            }
        endforeach;
        try {
            $sqlStament = $this->_db->select()
                ->from($this->_TABLE_NAME)
                ->where($where);

            if (null !== $order) {
                if (is_array($order)) {
                    foreach ($order as $v):
                        $sqlStament->order($v);
                    endforeach;
                } else {
                    $sqlStament->order($order);
                }
            }
            if (null !== $group) {
                $sqlStament->group($group);
            }
            if (null !== $limit) {
                $sqlStament->limit($limit);
            }
            $aryResult = $this->_db->fetchAll($sqlStament);
            $intIsOk = 1;
        } catch (Zend_Db_Exception $e) {
            echo "Caught exception: " . get_class($e) . "\n";
            echo "Message: " . $e->getMessage() . "\n";
            $intIsOk = -1;
        }
        return $intIsOk;
    }

    /**
     * @desc   insert record to table
     * @author ThaiNV <thainv@smartosc.com>
     * @since   08/10/2014
     *
     * @param  array $aryData      parameter
     * @param  int   $lastInsertId last id insert
     *
     * @return int
     */
    public function insertData($aryData, &$lastInsertId)
    {
        if (empty($aryData)) {
            $intIsOk = -1;
        }
        try {
            $this->_db->insert($this->_TABLE_NAME, $aryData);
            $lastInsertId = $this->_db->lastInsertId();
            $intIsOk = 1;
        } catch (Zend_Db_Exception $e) {
            echo "Caught exception: " . get_class($e) . "\n\n\n";
            echo "Message: " . $e->getMessage() . "\n\n\n";
            echo "Trace: " . $e->getTraceAsString() . "\n\n\n";
            $intIsOk = -1;
        }
        return $intIsOk;
    }

    /**
     * @desc   update table
     * @author ThaiNV <thainv@smartosc.com>
     * @since   08/10/2014
     *
     * @param  array  $aryData parameter
     * @param  string $where   where clause
     *
     * @return int
     */
    public function updateData($aryData, $where)
    {
        if (!$aryData) {
            $intIsOk = -1;
            return $intIsOk;
        }
        try {
            $this->_db->update($this->_TABLE_NAME, $aryData, $where);
            $intIsOk = 1;
        } catch (Zend_Db_Exception $e) {
            echo "Caught exception: " . get_class($e) . "\n";
            echo "Message: " . $e->getMessage() . "\n";
            $intIsOk = -1;
        }
        return $intIsOk;
    }

    /**
     * @desc   delete record of table
     * @author ThaiNV <thainv@smartosc.com>
     * @since   08/10/2014
     *
     * @param  array $aryWhere where clause
     *
     * @return int
     */
    public function deleteData($aryWhere = array())
    {
        try {
            $this->_db->delete($this->_TABLE_NAME, $aryWhere);
            $intIsOk = 1;
        } catch (Zend_Db_Exception $e) {
            echo "Caught exception: " . get_class($e) . "\n";
            echo "Message: " . $e->getMessage() . "\n";
            $intIsOk = -1;
        }
        return $intIsOk;
    }
}