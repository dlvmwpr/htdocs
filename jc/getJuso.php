<?php
    $ch = curl_init();
    $srchwrd=$_GET['Address'];
    $searchSe=$_GET['searchTo'];
    $pageNum=$_GET['pageNum'];
    $url = 'http://openapi.epost.go.kr/postal/retrieveNewAdressAreaCdService/retrieveNewAdressAreaCdService/getNewAddressListAreaCd'; /*URL*/

    $queryParams = '?' . urlencode('ServiceKey') . '=H0GLM8I5mHFwkaV2YRkYWKd1izREAGl4VC7BRCZIjfwtipVv%2FBrNTTf01Pi68PYvgawJ0zoo7NPCTqzhewcYaA%3D%3D'; /*Service Key*/
    $queryParams .= '&' . urlencode('searchSe') . '=' . urlencode($searchSe); /*검색구분(읍/면/동, 도로명, 우편번호)*/
    $queryParams .= '&' . urlencode('srchwrd') . '=' . urlencode($srchwrd); /*검색어*/

    $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
    $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode($pageNum); /*페이지 번호*/

    curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
?>
