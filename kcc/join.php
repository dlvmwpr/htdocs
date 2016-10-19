<?php
@include 'dbCon.php';
/* 정규식 적용 함수 */
function cellFormat($g,$s,$t) {
    $cellPattern = "/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/"; //핸드폰번호 정규식
    return preg_replace($cellPattern,"$1-$2-$3", $g.$s.$t);
}
function phoneFormat($g,$s,$t) {
    $phonePattern = "/^(\d{2,3})(\d{3,4})(\d{4})$/"; //전화번호 정규식
    return preg_replace($phonePattern,"$1-$2-$3", $g.$s.$t);
}
function dateFormat($y,$m,$d) {
    $datePattern = "(19[7-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])"; //날짜 정규식
    return preg_replace($datePattern,"$1-$2-$3", $y.$m.$d);
}
$korName = $_POST['korName'];
$engName = $_POST['engName'];
$birthYear = $_POST['birthYear'];
$birthMonth = $_POST['birthMonth'];
$birthDay = $_POST['birthDay'];
$id = $_POST['userid'];
$password = $_POST['password'];
$chkPassword = $_POST['confirm_password'];
$phoneGroup = $_POST['phoneGroup'];
$phoneSecond = $_POST['phoneSecond'];
$phoneThird = $_POST['phoneThird'];
$cellphoneGroup = $_POST['cellphoneGroup'];
$cellphoneSecond = $_POST['cellphoneSecond'];
$cellphoneThird = $_POST['cellphoneThird'];
$sms = $_POST['sms'];
$h_postcode = $_POST['h_postcode'];
$h_address = $_POST['home_addr1'];
$h_address2 = $_POST['home_addr2'];
$dm = $_POST['dm'];
$o_Name = $_POST['office_name'];
$o_jobFamily = $_POST['job_category'];
$o_jobPosition = $_POST['position'];
$o_postcode = $_POST['o_postcode'];
$o_address = $_POST['office_addr1'];
$o_address2 = $_POST['office_addr2'];
$o_phoneGroup = $_POST['o_phoneGroup'];
$o_phoneSecond = $_POST['o_phoneSecond'];
$o_phoneThird = $_POST['o_phoneThird'];
$faxGroup = $_POST['faxGroup'];
$faxSecond = $_POST['faxSecond'];
$faxThird = $_POST['faxThird'];
$marry = $_POST['marry'];
$marryYear = $_POST['marryYear'];
$marryMonth = $_POST['marryMonth'];
$marryDay = $_POST['marryDay'];

/* 전화번호 정규식 적용 */
$r_Phone = phoneFormat($phoneGroup,$phoneSecond,$phoneThird); //일반번호
$r_Cell = cellFormat($cellphoneGroup,$cellphoneSecond,$cellphoneThird); //핸드폰번호
$r_oPhone = phoneFormat($o_phoneGroup,$o_phoneSecond,$o_phoneThird); //회사번호
$r_Fax = phoneFormat($faxGroup,$faxSecond,$faxThird); //팩스번호
$r_Birth = dateFormat($birthYear,$birthMonth,$birthDay);
$r_Marry = dateFormat($marryYear,$marryMonth,$marryDay);
/*
$sql = "INSERT INTO `member`(`idx`, `kName`, `eName`, `birth`, `id`, `pw`, `phone`, `cellphone`, `sms`, `email`, `housePostcode`, `houseAddress`, `DM`, `officeName`, `jobFamily`, `jobPosition`, `officePostcode`, `officeAddress`, `officePhone`, `faxNumber`, `chkMarry`, `weddingDay`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22])";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->rowCount();
echo ($result);
 */
print $r_Birth. "   " . $r_Marry;
?>