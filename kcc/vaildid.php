<?php
$id = $_POST['id'];
$connect = mysqli_connect("localhost", "root", "", "kcc");
$query = "SELECT count(*) FROM member WHERE id='$id'";

$result=mysqli_query($connect,$query);
$row = mysqli_fetch_row($result);
if ($row) {
    echo "y";
} else { 
    echo "n";
}
mysqli_close($connect);

/*global $IDvaildok;
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
$db_name = "kcc";
$db_type = "mysql";
$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
try {
    $pdo = new PDO($dsn,$db_user,$db_pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "접속";
} catch (PDOException $Exception) {
    die("오류".$Exception->getMessage());
}

$query = "SELECT * FROM member WHERE id=$id";


$find = $pdo->query($query);

$count = $find->rowCount();


$pdo = null;
$find = null;*/


?>

