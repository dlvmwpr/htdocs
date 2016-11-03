<?php
include 'dbCon.php';
$sql = "insert into board (subject, writer, content, file, date)"
        . " values (:subject, :writer, :content, :file, :date)";

$subject = $_POST['subject'];
$writer = $_POST['writer'];
$content = nl2br($_POST['content']);
$date = date("Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")));

$file = $_FILES['upload']['name'];
$file_dir = $_SERVER['DOCUMENT_ROOT']."\\fup\\";
$file_token = "\\".date("Ymd").md5(microtime())."\\"; 
mkdir($file_dir.$file_token);
$file_path = $file_dir.$file_token.$file;
//if ($_FILES['upload']['size'] >=)
/*용량적당할때->*/move_uploaded_file($_FILES['upload']['tmp_name'], $file_path);
/*클때->alert(용량초과); echo "<meta http-equiv='refresh' content='0; url=board.php' >";*/
/*
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':writer', $writer);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':file', $file);
$stmt->bindValue(':date', $date);

$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=board.php' >";*/
?>