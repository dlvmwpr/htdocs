
<?php
    $ch = curl_init();
    $srchwrd=$_GET['raw_Addr'];//정류장id
    //$url = 'http://ws.bus.go.kr/api/rest/stationinfo/getStationByUid'; /*URL*/
    //$queryParams = '?' . urlencode('ServiceKey') . '=umfGiqjtzOMarryKchlVrnqw7%2BGPqeV1bDPWigHtwAFpAB8d5lfQ8TXoBvRDCRecXTrmkbz24APGWQR0kPY3Ow%3D%3D';
    //$queryParams .= '&' . urlencode('arsId') . '=' . urlencode($code); /*정류소 ID*/

    $url = 'http://openapi.epost.go.kr/postal/retrieveNewAdressAreaCdService/retrieveNewAdressAreaCdService/getNewAddressListAreaCd'; /*URL*/
    $queryParams = '?' . urlencode('ServiceKey') . '=H0GLM8I5mHFwkaV2YRkYWKd1izREAGl4VC7BRCZIjfwtipVv%2FBrNTTf01Pi68PYvgawJ0zoo7NPCTqzhewcYaA%3D%3D'; /*Service Key*/
    $queryParams .= '&' . urlencode('searchSe') . '=' . urlencode("road"); /*검색구분(읍/면/동, 도로명, 우편번호)*/
    $queryParams .= '&' . urlencode('srchwrd') . '=' . urlencode($srchwrd); /*검색어*/

    $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
    $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

    curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
?>
