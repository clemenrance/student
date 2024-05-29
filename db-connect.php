<?php 
// Hostname
$host = "student-db.cd4m4gcm286n.us-east-1.rds.amazonaws.com";
// Username
$uname = "admin";
// Password
$pw = "Training123";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>