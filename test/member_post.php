<?php
include "dbCon.php";

$id = $_POST['userID'];
$pw = $_POST['pass'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "insert into member (id,pw,name,phone) values (:id,:pw,:name,:phone)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->bindValue(":pw",$pw);
$stmt->bindValue(":name",$name);
$stmt->bindValue(":phone",$phone);

$stmt->execute();

echo "<meta http-equiv='refresh' content='0; url=member.php'> "
?>