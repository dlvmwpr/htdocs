<?php
//    phpinfo();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<ul>
    <li>1번</li>
    <li>2번</li>
    <?php
        print "ㅁㅇㄻㄴㅇㄻㄴ";
    ?>
    <li>3번째 예제
    <?php
        print PHP_VERSION;
        print PHP_OS;
        define ("HELLO", "안녕하세요");
        print HELLO."<BR>";
        define ("_18", "Eighteen");
        print _18."<BR>";
        print __DIR__;
    ?>
    </li>
    <li>4번</li>
</ul>
</body>
</html>