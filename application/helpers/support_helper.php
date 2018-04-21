<?php

/*
 * File to set variables
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


if (!function_exists('getuserip')) {

    function getuserip() {
        // Get user IP address
        if (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
        }

        $ip = filter_var($ip, FILTER_VALIDATE_IP);
        $ip = ($ip === false) ? '0.0.0.0' : $ip;
        return $ip;
    }

}

if (!function_exists('createDir')) {

    function createDir($path) {
        if (!file_exists($path)) {
            $old_mask = umask(0);
            mkdir($path, 0777, TRUE);
            umask($old_mask);
        }
    }

}

if (!function_exists('getformattedvalue')) {

    function getformattedvalue($number) {
        if ($number < 1000000) {
            // Anything less than a million
            $value = number_format($number);
        } else if ($number < 1000000000) {
            // Anything less than a billion
            $value = number_format($number / 1000000, 2) . 'M';
        } else {
            // At least a billion
            $value = number_format($number / 1000000000, 2) . 'B';
        }
        return $value;
    }

}
/**
 * This method used to get current browser agent
 */
if(!function_exists('getBrowserAgent'))
{
    function getBrowserAgent()
    {
        $CI = get_instance();
        $CI->load->library('user_agent');

        $agent = '';

        if ($CI->agent->is_browser())
        {
            $agent = $CI->agent->browser().' '.$CI->agent->version();
        }
        else if ($CI->agent->is_robot())
        {
            $agent = $CI->agent->robot();
        }
        else if ($CI->agent->is_mobile())
        {
            $agent = $CI->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }

        return $agent;
    }
}

if (!function_exists('createsalt')) {

    function createsalt() {
        $salt = rand(333, 999) . time();
        return $salt;
    }

}
if(!function_exists('simpleMail')){

    function simpleMail($to,$msg,$subject){
        require_once(APPPATH.'third_party/phpmailer/class.phpmailer.php');
        //require('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer;
        //$mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'freehosting2.managedns.org';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Username = 'admin@nutantech.online';          // SMTP username
        $mail->Password = 'nutantech@123'; // SMTP password
        $mail->Port       = 587;                         // TCP port to connect to

        $mail->setFrom('admin@nutantech.online', 'Nutantech');
        $mail->addReplyTo('admin@nutantech.online', 'Nutantech');
        $mail->addAddress($to);   // Add a recipient
        $mail->addBCC('contact.nutantech@gmail.com');   // Add CC

        $mail->isHTML(true);  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $msg;
        $mail->send();
    }
}
?>