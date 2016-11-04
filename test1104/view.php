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
        <table>
            <?php
                include "dbCon.php";
                $idx = $_REQUEST['idx'];
                $sql = "SELECT * from bard where idx=$idx";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                
                $row = $stmt->fetch();
                $name = $row['name'];
                $title = $row['title'];
            ?>
            <tr> <th> 제목 </th> <td> <?=$title?> </td> </tr>
            <tr> <th> 작성자 </th> <td> <?=$name?> </td> </tr>
            <tr> <td> <a href='edit.php?idx=<?=$idx?>'> 수정하기 </a> </td> <td> <a href='delete.php?idx=<?=$idx?>'> 삭제하기 </a> </td> </tr>
        </table>
    </body>
</html>
