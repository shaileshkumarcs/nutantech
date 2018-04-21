<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct() {
        parent::__construct();
       // $this->load->library('email');
        /*$this->load->model('Shared_model', 'shared');
        $this->load->model('Flight_Booking_model', 'flight_booking');
        $this->load->model('Flights_model', 'flights');
        $this->load->model('Booking_model', 'bookingdata');
        $this->load->model('Seo_model','seo');
        $this->load->model('BookingPassenger_model', 'passenger');*/
        //$this->load->helper('support_helper');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->helper('url');
    }

	public function index()
	{
        //echo "hi";
		$this->load->view('faq');
	}
}
