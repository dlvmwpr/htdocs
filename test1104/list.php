<table>
    <tr> <th>번호</th> <th>제목</th> <th>작성자</th> </tr>
<?php
include "dbCon.php";

$sql = "SELECT * from bard";
$stmt = $pdo->prepare($sql);
$stmt->execute();

foreach ($stmt as $row) {
    $idx = $row['idx'];
    $name = $row['name'];
    $title = $row['title'];
    
    echo "<tr> <td>$idx</td> <td><a href='view.php?idx=$idx'>$title</a></td> <td>$name</td> </tr>";
}
?>
</table>