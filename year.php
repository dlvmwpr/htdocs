<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="yearview.php" name='form1' method="post">
        <select name="selYear" id="">
            <?php
                for($i=1917;$i<=2016;$i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>            
        </select>
        <input type="submit" value='년'>
    </form>
</body>
</html>