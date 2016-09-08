<?php
    $location = $_POST['location'];
    if ($location !== "") {
        print '지역 :'.$location;
    } else {
        print '지역을 선택해주세요';
    }
?>