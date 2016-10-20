<?php
include "dbcon.php";
$get = $_POST['selectid'];

for ($i = 0 ; $i <= count($get)-1; $i++) {
    $sql = "DELETE FROM `member` WHERE idx=$get[$i]";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}

echo "<meta http-equiv='refresh' content='0; url=aaa.php' >";
?>