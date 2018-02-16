<?php
function getConnectionInfo(){
 	$ip_details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
    return array('page_visited' => $_SERVER['REQUEST_URI'], 'time' => date('Y-m-d H:i:s'), 'ip_info' => $ip_details,
                 	'browser' => $_SERVER[HTTP_USER_AGENT], 'referrer' => $_SERVER['HTTP_REFERER']);
}

function appendPHPArrToJsonFile($logfile_url, $array_to_add){
    $tempArray = json_decode(file_get_contents($logfile_url));
    array_push($tempArray, $array_to_add);
    
    file_put_contents($logfile_url, json_encode($tempArray));
}

function appendConnectionInfo($logfile_url) {     
    appendPHPArrToJsonFile($logfile_url, getConnectionInfo());
}