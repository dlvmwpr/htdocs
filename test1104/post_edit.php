<?php
    include "dbCon.php";
    $idx = $_POST['idx'];
    $title = $_POST['title'];
    $sql = "UPDATE bard SET title='$title' where idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>