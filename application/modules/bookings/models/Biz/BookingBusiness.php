<?php

class Bookings_Model_Biz_BookingBusiness
{
    protected $_dbBooking;
    const EMAIL_TEMPLATE = '/modules/bookings/views/scripts/emails/';
    const HOST_MAIL = 'thainv@gmail.com';
    const HOST_NAME = 'Thai';

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
            $this->confirmBooking($bookingInfo);
        }
        return $intIsOk;
    }

    public function confirmBooking($data = array())
    {
        if (!empty($data)) {
            $html = new Zend_View();
            $html->setScriptPath(APPLICATION_PATH . self::EMAIL_TEMPLATE);
            $html->assign('name', $data['last_name'] . ' ' . $data['first_name']);

            $mail = new Zend_Mail('utf-8');
            $bodyText = $html->render('ConfirmBooking.phtml');

            $mail->addTo($data['email']);
            $mail->setSubject('Welcome to Decode.com.vn');
            $mail->setFrom(self::HOST_MAIL, self::HOST_NAME);
            $mail->setBodyHtml($bodyText);
            $mail->send();
        }
    }
}