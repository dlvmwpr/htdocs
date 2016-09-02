<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>텍스트 송신 테스트 </title>
    </head>
    <body>
        <form name="form1" method="post" action="view.php">
            이름:<input type='text' name='name'/><br>
            비밀번호:<input type='password' name='pass'/><br>
            비밀번호확인:<input type='password' name='pass1'/><br>
            본문:<textarea name="honbun" cols="30" rows="5"></textarea><br>
            나의취미:<input type="checkbox" name="hobby[]" value="스포츠">스포츠<br>
            <input type="checkbox" name="hobby[]" value="영화감상">영화감상<br>
            <input type="checkbox" name="hobby[]" value="독서">독서<br>
            <input type='submit' value='송신'/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
