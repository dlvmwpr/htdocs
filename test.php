<?php
//    phpinfo();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <style>
        .gugudan { background:lime; color:green;}
        .odddan { background: white; color:brown;}
    </style>
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
    <?php
        $data = "안녕하세요";
        $data1 = 1;
        print $data;
        print $data1;
        $week[] = "월";
        $week[] = "화";
    
        $week[0] = "월";
        $week[1] = "화";
    
        print $week[0];
        print $week[1];
    
        $month=array(1,2,3,4,5,6,7,8,9,"월");
        $year=[2016,2017,2018];
    
        $month=array();
    
        $member["name"]="곽ㅇㅊ";
        $member["age"]=3;
        $member["height"]=150;
        print $member['age'];
        print "<pre>";
        print_r ($member);
    
        ?>
        </ul>
        <div class='gugudan'>
           <?php
            for ($i=1;$i<=9;$i++) {
                if ($i%2==1) {
                    print ("<p class='odddan'>");
                    for ($j=1; $j<=9;$j++) {
                        print ($i." X ".$j." = ".$i*$j."<br>");
                    }
                    print("</p>");
                } else {
                    for ($j=1; $j<=9;$j++) {
                         print ($i." X ".$j." = ".$i*$j."<br>");
                    }
                }
                print "<br>";
            }
            ?>
        </div>
    </body>
</html>