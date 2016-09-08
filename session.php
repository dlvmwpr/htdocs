<!DOCTYPE html>
<?php
    session_start();
    $count=1;
    if (isset($_SESSION['count'])) {
        $count = $_SESSION['count'];
        $count++;
    }
    $_SESSION['count'] = $count;
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if($count == 1) {
    ?>
        첫 방문입니다. <br>
    <?php
        } else {
    ?>
        <?=$count?> 번째 방문입니다. <br>
    <?php
        }
    ?>
</body>
</html>