<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

include("zkteco/zklib/zklib.php");
require_once('env.php');
require_once('class/Attendance.php');
require_once('class/Dbcon.php');

$zk = new ZKLib(DEVICE_IP, 4370);
$ret = $zk->connect();

$date= date('Y-m-d');
$att = new Attendance($zk);
$aa = $att->attendances($date);

// echo "<pre>";
// print_r($aa);
// print_r('OK');



?>