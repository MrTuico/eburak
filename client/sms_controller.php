<?php
class message{
    function api($number,$message,$apicode,$passwd)
    {
       
    
        $ch = curl_init();
        $itexmo = array('Email' => 'jovelynmedallada88@gmail.com', 'Password' => $passwd, 'Recipients' => $number, 'Message' => $message, 'ApiCode' => $apicode, 'SenderId' => 'VIA ITM');
        // curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_URL,"https://api.itexmo.com/api/broadcast");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return curl_exec ($ch);
        curl_close ($ch); 
    
    }
}



function send_text_api($rcvr,$msg){
    $receiver = array($rcvr);

     $smsAPI = 'PR-JOVEL716481_N6K9L'; 
    $smsAPIPassword = "jovelyn24";
    $send = new message();

    $result = $send->api($receiver, $msg, $smsAPI, $smsAPIPassword);
    if($send == false){
        echo json_encode("Success.");
        header("Location:index");	
    }else if($result == true){
        echo json_encode("Message Sent.");
       	header("Location:index");
    }else{
      
        header("Location:signup_form");
       	
    }
}
?>