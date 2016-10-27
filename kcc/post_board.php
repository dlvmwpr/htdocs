<?php
include 'dbCon.php';
$sql = "insert into board (subject, writer, content, date)"
        . " values (:subject, :writer, :content, :date)";

$subject = $_POST['subject'];
$writer = $_POST['writer'];
$content = $_POST['content'];
date_default_timezone_set('Asia/Seoul');
$date = date("yyyy-mm-dd");

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':writer', $writer);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':date', $date);

$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=board.php' >";
?>