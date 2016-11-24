<?php
    $ch = curl_init();
    $url = 'http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getCtprvnMesureSidoLIst'; /*URL*/
    $queryParams = '?' . urlencode('ServiceKey') . '=H0GLM8I5mHFwkaV2YRkYWKd1izREAGl4VC7BRCZIjfwtipVv%2FBrNTTf01Pi68PYvgawJ0zoo7NPCTqzhewcYaA%3D%3D'; /*Service Key*/
    $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
    $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

    curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
?>