<?php
/* 정규식 적용 함수 */
function cellFormat($num1,$num2,$num3) {
    $cellPattern = "/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/"; //핸드폰번호 정규식
    return preg_replace($cellPattern,"$1-$2-$3", $num1.$num2.$num3);
}
function phoneFormat($num1,$num2,$num3) {
    $phonePattern = "/^(\d{2,3})(\d{3,4})(\d{4})$/"; //전화번호 정규식
    return preg_replace($phonePattern,"$1-$2-$3", $num1.$num2.$num3);
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
$r_Phone = phoneFormat($phoneGroup,$phoneSecond,$phoneThird);
$r_Cell = cellFormat($cellphoneGroup,$cellphoneSecond,$cellphoneThird);
$r_oPhone = phoneFormat($o_phoneGroup,$o_phoneSecond,$o_phoneThird);
$r_Fax = phoneFormat($faxGroup,$faxSecond,$faxThird);

?>