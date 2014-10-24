<?php
$analys_ip = $_SERVER['REMOTE_ADDR'];
$analys = array();
$analysModel = new Default_Model_Test();
$timeOut = time() - 6;
$allAnalys = $analysModel->getAllRows();
foreach($allAnalys as $analys){
    if($analys['analys_ip'] != $analys_ip){
        $analys_time = $analys['analys_time'];
        $analys_id = $analys['analys_id'];
        if($analys_time < $timeOut){
            mysql_connect("localhost", "root", "mysql")or die("cannot connect to server");
            mysql_select_db("decode_db")or die("cannot select DB");
            $sql2="UPDATE tbl_analys SET analys_status='0' WHERE analys_id = ".$analys_id;
            $result2=mysql_query($sql2);
        }
    }
}
?>

<footer>
    <?php
    $online = count($analysModel->getOnlineRow());
    echo __('Visitors currently online: ').$online;
    echo "<br/>";
    $total = count($analysModel->getAllRows());
    echo __('Total visitors: ').$total;
    ?>
    <div class="container">
        <p class="main-footer">Copyright © 2014 Tue Vi Co.Ltd.  All rights reserved.</p>
    </div>
</footer>