<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("zkteco/zklib/zklib.php");
require_once('class/Attendance.php');
require_once('class/Dbcon.php');
$env = parse_ini_file('.env');

// print_r($env);die();
// $pdo = DB::con();
// $user_id = 1;
// $status = 2;
// $datetime = date('Y-m-d');
// $stmt = $pdo->prepare("INSERT into users (`user_id`, `status`, `datetime`) values (?,?,?)");
// $stmt->execute([$user_id, $status, $datetime]); 

// $data = [
//     'user_id' => $name,
//     'status' => $surname,
//     'datetime' => $sex,
// ];
// $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
// $stmt= $pdo->prepare($sql);
// $stmt->execute($data);


// $id=1;
// $stmt = $pdo->prepare("SELECT * FROM attendance WHERE id=?");
// $stmt->execute([$id]); 
// $user = $stmt->fetch();

// $att = DB::query('SELECT * FROM `attendance`');
// echo "<pre>";
// print_r($att->fetchAll());
// print_r($env['DB_HOST']);
    
$zk = new ZKLib("192.168.0.101", 4370);

$ret = $zk->connect();

// $att = new Attendance($zk);
// $aa = $att->attendances();
echo "<pre>";
print_r('OK');



?>