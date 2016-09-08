<?php
    $selYear =$_POST['selYear'];
    
    if ($selYear !== "") {
        print "년도 :".$selYear;
    } else {
        print "년도를 선택하세요";
    }
?>