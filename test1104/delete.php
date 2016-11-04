<?php
    include "dbCon.php";
    $idx = $_GET['idx'];
    $sql = "DELETE from bard where idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>

