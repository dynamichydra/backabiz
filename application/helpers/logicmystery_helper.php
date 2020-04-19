<?php
function sendMail($to,$subject,$message){
    $CI = get_instance();
    $CI->load->library('email');
    $CI->email->initialize($CI->config->item('mailconfig'));

    $CI->email->set_newline("\r\n");
    $CI->email->from('no-reply@zowed.com'); //change it
    $CI->email->to($to); //change it
    $CI->email->subject($subject);
    $CI->email->message($message);
    if(!$CI->email->send()){
        print_r($CI->email->print_debugger());
        die();
        return false;
    }else{
        return true;
    }
}

function sendmobileotp($to,$message)
{
    //Your authentication key
    $authKey = "102606AJFqDw4ljx569cb358";

    //Multiple mobiles numbers separated by comma
    $mobileNumber = $to;

    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "iZoWed";

    //Your message to send, Add URL encoding here.
    $message = $message;
    // urlencode("Your OTP code is :");

    //Define route 
    $route = "4";
    //Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
    );

    //API URL
    $url="http://api.msg91.com/api/sendhttp.php";

    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));


    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    echo $output;
}

function theme_url(){
    return base_url("theme/Cubic/cubic-horizontal/");
}