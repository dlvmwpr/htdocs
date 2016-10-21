<table width="500px">
    <tr> <th>번호</th> <th>아이디</th> <th>비밀번호</th> <th>이름</th> <th>핸드폰번호</th> </tr>
<?php
include "dbCon.php";

$sql = "SELECT * from member";
$stmt = $pdo->prepare($sql);
$stmt->execute();

foreach ($stmt as $row) {
    $idx = $row['idx'];
    $id = $row['id'];
    $pass = $row['pw'];
    $name = $row['name'];
    $phone = $row['phone'];
    
    echo "<tr> <td>$idx</td> <td>$id</td> <td>$pass</td> <td>$name</td> <td>$phone</td> </tr>";
}

?>
</table>