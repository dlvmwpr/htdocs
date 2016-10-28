<?php
include 'dbCon.php';
$sql = "insert into board (subject, writer, content, date)"
        . " values (:subject, :writer, :content, :date)";

$subject = $_POST['subject'];
$writer = $_POST['writer'];
$date = date("Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")));

$content = nl2br($_POST['content']);

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':writer', $writer);
$stmt->bindValue(':content', $content);
$stmt->bindValue(':date', $date);

$stmt->execute();
echo "<meta http-equiv='refresh' content='0; url=board.php' >";
?>