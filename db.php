<?php
$host = "sql110.infinityfree.com";      
$user = "if0_42496421";                
$pass = "SKYYYseeer";           
$dbname = "if0_42496421_smart_robot";   

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "فشل الاتصال: " . $conn->connect_error]));
}
?>
