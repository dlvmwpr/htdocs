<?php
    $search = '%'.$_POST['search'].'%';
    include 'kccdb.php';
    $sql = "select * from member where last_name like:last_name or first_name";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':last_name',$search, PDO::PARAM_STR);
    $stmh->bindValue(':first_name',$search, PDO::PARAM_STR);
    $stmh->execute();
    $count = $stmh ->rowcount();
    print $count.'건입니다.';
?>