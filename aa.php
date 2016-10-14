<table>
    <tr><th>번호</th><th>아이디</th><th>이름</th><th>주소</th></tr>
<?php    
    $sql = "SELECT * FROM member";
    $db_user = "root";
    $db_pass = "";
    $db_host = "localhost";
    $db_name = "kcc";
    $db_type = "mysql";
    $db = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

    try {
        $pdo = new PDO($db,$db_user,$db_pass);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        foreach ($stmt as $row) {
            
        }
        echo ($result);
    } catch (PDOException $Exception) {
        die("오류".$Exception->getMessage());
    }
?>