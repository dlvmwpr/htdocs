<?php
include "dbcon.php";
$get = $_POST['selectid'];

for ($i = 0 ; $i <= count($get)-1; $i++) {
    $sql = "DELETE FROM `member` WHERE idx=$get[$i]";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    /*foreach ($stmt as $row) {
        $idx = $row['idx'];
        $userid = $row['id'];
        $kName = $row['kName'];
        $housePostcode = $row['housePostcode'];
        $houseAddress = $row['houseAddress'];
        echo "<tr><td><input type='checkbox' name='selectid[]' value=$idx></td><td>$idx</td><td>$userid</td>"
                . "<td>$kName</td><td>$housePostcode</td><td>$houseAddress</td></tr>";
    }*/
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>