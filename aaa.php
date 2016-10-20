<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="listCommon.css" />
        <script type="text/javascript" src="kcc/js/jquery/jquery-1.8.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready( function() {
                $("#chkAll").change(function () {
                    $(document.getElementsByName('selectid[]')).prop('checked', $(this).prop("checked"));
                    
                });
            });
        </script>
    </head>
    <body>
        <form action="del.php" method="post">
            <table id="mainTable">
                <tr><th><input type="checkbox" id="chkAll"></th><th>번호</th><th>아이디</th><th>이름</th><th>우편번호</th><th>주소</th></tr>
                <?php    
                    include "dbcon.php";
                    $sql = "SELECT * FROM member";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $idx = $row['idx'];
                        $userid = $row['id'];
                        $kName = $row['kName'];
                        $housePostcode = $row['housePostcode'];
                        $houseAddress = $row['houseAddress'];
                        echo "<tr><td><input type='checkbox' name='selectid[]' value=$idx></td><td>$idx</td><td>$userid</td>"
                                . "<td>$kName</td><td>$housePostcode</td><td>$houseAddress</td></tr>";
                    }
                ?>
                <tr><td colspan=6><input type="submit" value="삭제"></td></tr>
            </table>
        </form>
    </body>
</html>
