<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Api extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->model('crud/Crud_modal');
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
    }

    //The method to generate access_token.For access token need customer Id and Secret Key
    // Provided by health cube.

    public function sendSMS()
    {
        $mobileNumber = $this->input->post('mobileNumber');
        $otp = $this->input->post('otp');
        $msg = 'Your OTP for login to portal is ' . $otp . '-AMTIMB';
        $message = urlencode($msg);
        $authKey = "9402ACkvobJv6246b58bP11";
        $senderId = "AMTIMB";
        $tempID = "1207164879477679801";
        $route = "4";
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => '91' . $mobileNumber,
            'message' => $message,
            'DLT_TE_ID' => $tempID,
            'sender' => $senderId,
            'route' => $route
        );
        $url = "http://map.txtapi.com//api/sendhttp.php";
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
        if (curl_errno($ch)) {
            $respone = array(
                "response_data" => array(
                    "success" => false,
                    "status" => "500",
                    "message" =>  curl_error($ch)
                )
            );
            echo json_encode($respone);
        } else {
            $respone = array(
                "response_data" => array(
                    "success" => true,
                    "status" => "200",
                    "message" =>  $output
                )
            );
            echo json_encode($respone);
        }
        curl_close($ch);
    }

}
