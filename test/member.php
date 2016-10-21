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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
           function vID () {
                var id = $("#userID").val();
                $("#vaildId").removeClass("hide").addClass("show");
                var pattern = /^[a-z0-9_-](3,16)$/;
                if (!pattern.test(pattern,id)) {
                    $("#vaildId").text("asdf");
                } else {
                    $("#vaildId").text("아이디가 않습니다.");
                }
            };
        </script>
        <style>
            .show { display:table-row; }
            .hide { display:none; }
        </style>
    </head>
    <body>
        <form action="member_post.php" method="post">
            <table>
                <tr>
                    <td>
                    <label for="userID"> 아이디 </label> 
                    <input type="text" name="userID" onkeyup="vID()" id="userID"/>
                    </td>
                    <td id="vaildId" class="hide">vaildId</td>
                </tr>
                <tr>
                    <td>
                    <label for="pass"> 비밀번호 </label> 
                    <input type="password" name="pass"/>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="name"> 이름 </label> 
                    <input type="text" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="phone"> 전화번호 </label> 
                    <input type="text" name="phone"/>
                    <td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="전송">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
