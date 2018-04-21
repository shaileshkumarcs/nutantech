<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newmail extends CI_Controller {

	function __construct() {
        parent::__construct();
        
        // Enquiry model class
        //$this->load->library('email');
        /*$this->load->model('Shared_model', 'shared');
        $this->load->model('Flight_Booking_model', 'flight_booking');
        $this->load->model('Flights_model', 'flights');
        $this->load->model('Booking_model', 'bookingdata');
        $this->load->model('Seo_model','seo');
        $this->load->model('BookingPassenger_model', 'passenger');*/
        //$this->load->helper('support_helper');
        // Support helper url
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->helper('url');
    }
	public function index()
	{
 
	   /* ini_set( 'display_errors', 1 );
	 
	    error_reporting( E_ALL );
	 
	    $from = "shailesh.kumarcs@gmail.com";
	 
	    $to = "shailesh94kumar@gmail.com";
	 
	    $subject = "Checking PHP mail";
	 
	    $message = "PHP mail works just fine";
	 
	    $headers = "From:" . $from;
	 
	    mail($to,$subject,$message, $headers);
	 
	    echo "The email message was sent.";*/

	    $to      = 'shailesh94kumar@gmail.com';
		$subject = 'the subject';
		$message = 'hello';
		$headers = 'From: contact@nutantech.online' . "\r\n" .
		    'Reply-To: contact@nutantech.online' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		echo "HIBIFH";
	}
}
?>