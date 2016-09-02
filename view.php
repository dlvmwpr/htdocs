<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $pass1 = $_POST['pass1'];
            $honbun = nl2br($_POST['honbun']);
            $hobby = $_POST['hobby'];
            
            if ($name == "" || $pass == "" || $pass1 == "" ) {
                echo ("<script>alert('빈칸있다');location.href='form.php';</script>");
            } else { 
                if ($pass == $pass1) {
                    print "$name 님<br>";
                    print "비밀번호 $pass<br>";
                    print "본문에 쓴 내용<br>$honbun<br>";
                    if (isset($hobby)){
                        $hobby2 = implode(',',$hobby);
                        print "취미 $hobby2";
                    } else {
                        print "취미 음슴";
                    }
                } else {
                    echo ("<script>alert('틀리다 비밀번호');location.href='form.php';</script>");
                }
            }
        ?>
    </body>
</html>
