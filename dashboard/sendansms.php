<?php

$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '08039591856',
    'To'    => '07776940980',
    'Body'  => 'Please update your details with Dream and Dream at 08039591856 ', //Incase you are wondering who Dr. Rajasekhar is http://en.wikipedia.org/wiki/Dr._Rajasekhar_(actor)
);
 
$exotel_sid = "student261"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "553ab9e386ab00e9ae1f2bf65b51437b1875ab60"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
//print "Response = ".print_r($http_result);



<h1>AS RESPONSE IS 1 HENCE MESSAGE IS SENT SUCCESFULLY</h1>
?>
