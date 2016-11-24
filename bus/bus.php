
<?php
    //$ch = curl_init();
    //$code=$_GET['code'];//정류장id
    //$url = 'http://ws.bus.go.kr/api/rest/stationinfo/getStationByUid'; /*URL*/
    //$queryParams = '?' . urlencode('ServiceKey') . //'=umfGiqjtzOMarryKchlVrnqw7%2BGPqeV1bDPWigHtwAFpAB8d5lfQ8TXoBvRDCRecXTrmkbz24APGWQR0kPY3Ow%3D%3D';
    //$queryParams .= '&' . urlencode('arsId') . '=' . urlencode($code); /*정류소 ID*/
    //$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
    //$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

    //curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    //curl_setopt($ch, CURLOPT_HEADER, 0);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    //$response = curl_exec($ch);
    //curl_close($ch);

    //var_dump($response);

    $ch = curl_init();
    $url = 'http://openapi.tago.go.kr/openapi/service/ArvlInfoInqireService/getCtyCodeList'; /*URL*/
    $queryParams = '?' . urlencode('ServiceKey') . '=6ISu%2BU8pqwbThpIwmwnckhkU%2BCegNoOvRBwsU7xA6oipYKECKf1MsbHkCziFHtK2Y8s%2B6PxDFo8L6vzoRExNYQ%3D%3D'; /*Service Key*/
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
