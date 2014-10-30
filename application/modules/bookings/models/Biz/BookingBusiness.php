<?php

class Bookings_Model_Biz_BookingBusiness
{
    protected $_dbBooking;

    public function __construct()
    {
        $this->_dbBooking = new Bookings_Model_Dbtable_Booking();
    }

    public function prepareSave($aryData)
    {
        $id = null;
        if ($aryData) {
            $bookingInfo = array(
                "first_name" => $aryData['first_name'],
                "contact_no" => $aryData['contact_no'],
                "last_name" => $aryData['last_name'],
                "email" => $aryData['email'],
                "game_id" => $aryData['game_id'],
                "time" => $aryData['time'],
                "date" => $aryData['date'],
                "gender" => $aryData['gender'],
            );
            $intIsOk = $this->_dbBooking->insertData($bookingInfo, $id);
        }
        if ($intIsOk == 1) {
            $this->confirmBooking();
        }
        return $intIsOk;
    }

    public function confirmBooking()
    {
        $mail = new Zend_Mail();
        $mail->setBodyText('This is the text of the mail.');
        $mail->setFrom('somebody@example.com', 'Some Sender');
        $mail->addTo('tahivanhus@gmail.com', 'Some Recipient');
        $mail->setSubject('TestSubject');
        $mail->send();
    }
}