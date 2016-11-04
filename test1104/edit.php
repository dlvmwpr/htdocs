<?php
    include "dbCon.php";
    $idx = $_GET['idx'];
    $sql = "SELECT * from bard where idx=$idx";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $name = $row['name'];
    $title = $row['title'];
?>
<form action='post_edit.php' method='post'>
    <input type='hidden' name='idx' value='<?=$idx?>'>
    <table>
        <tr> <th> 작성자 </th> <td> <input type='text' name='name' value='<?=$name?>' readonly> </td> </tr>
        <tr> <th> 제목 </th> <td> <input type='text' name='title' value='<?=$title?>'> </td> </tr>
        <tr> <td colspan='2'> <input type='submit' value='수정하기'> </td> </tr>
    </table>
</form>
