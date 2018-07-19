<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	function __construct() {
        parent::__construct();
        // Enquiry model class
        $this->load->model('Enquirymodel','enmodel'); 
        $this->load->helper('support_helper');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->helper('url');
    }
	public function index()
	{
		// Load the contactus view from view
		$this->load->view('Contactus');
	}
	public function enquiryform(){
		if($_POST == ''){
			echo "Error";
		}
		else{
			$ip = $this->input->ip_address();
			$name = $_POST['name'];
			$email =  $_POST['emailid'];
			$contact =  $_POST['mobileno'];
			$message =  $_POST['message'];
			$subject =  isset($_POST['subject']) ? $_POST['subject'] : 0 ;
			// Create a Array For save data enquiryform table
			$data = array(
					"ename" => $name,
					"emailid" => $email,
					"mobileno" => $contact,
					"subject" => $subject,
					"message" => $message,
				);
			// Save Data in enquiry form table and return enquiry id
			$enquiryid = $this->enmodel->add("enquiryform",$data);
			if(empty($enquiryid))
			{
				$data = array(
							"val" => 0
						);
				$this->load->view("Contactus",$data);
			}
			else{
				$data = array(
					"id" => $enquiryid,
					"name" => $name,
					"email" => $email,
				);

				$message    =  $this->load->view("email/replyenquiry.php",$data, TRUE);
				$to      = $email;
		        $subject = 'Do not reply email';
		        if($this->simpleMail($to,$subject, $message)){
			        	$data = array(
								"val" => 1
							);
						$this->load->view("Contactus",$data);
			        }
			        else{
			        	$data = array(
								"val" => 1
							);
						$this->load->view("Contactus",$data);
			        }
		    	}
			}

		}
	//}
	// FOR SUSCRIBE US
	public function suscribe(){
		$email = $_POST['email'];

		//$avail = $this->enmodel->liketable("suscribe",$email);
		$avail = $this->enmodel->getWhere("newsuscribe","emailid",$email);
		//print_r($avail);
		//print_r($avail[0]['emailid']);
		if(!empty($avail))
		{
			$data = array(
						"val" => 1
					);
			
			$message    =  $this->load->view("email/suscribe.php",$data, TRUE);
			$to      = $email;
	        $subject = 'Do not reply email';
	        $this->suscribeMail($to,$subject, $message);
	        $this->load->view("Home/page1",$data);
		}
		else
		{
			$data = array(
				"emailid" => $email,
			);
			$test = $this->enmodel->add("newsuscribe",$data);
			//echo $test;exit;
			$data = array(
						"val" => 0
					);
			$this->load->view("Home/page1",$data);
		}


		// PHP Mailer Required
		//require_once(APPPATH.'third_party/phpmailer/class.phpmailer.php');
		// Create a Array For save data enquiryform table
		/*$data = array(
				"email" => $email
			);
		// Save Data in enquiry form table and return enquiry id
		$this->enmodel->add("suscribe",$data);
*/
		// SMTP MAIL SYSTM FOR CUSTOMER
			/*$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";
			$mail->Port     = 465;
			$mail->Host     = "smtp.gmail.com";
			$mail->Username = "xxxxxx@gmail.com";
			$mail->Password = "xxxxxx";
			$mail->Mailer   = "smtp";
			//Send EMAIL
			$mail->SetFrom($email);
			//$mail->SetFrom("shailesh.tripme@gmail.com", $_POST["name"]);
			$mail->AddReplyTo($email);
			$mail->AddAddress($email);
			$mail->Subject = "Suscribe";
			$mail->WordWrap  = 80;
			$message = "Thankyou for suscribe";
			//$mail->MsgHTML($_POST["content"]);
			$mail->MsgHTML($message);
			$mail->Body    =  $this->load->view("email/suscribe.php",$data, TRUE);
			//$mail->IsHTML(true);
			$mail->IsHTML(true);
			if(!$mail->Send()) {
				$this->load->view("Home/page1");
			} else {

				$this->load->view("Home/page1");
			}*/
	}
	public function QuickContact(){
		echo "HI";
	}
	public function emailview()	{
		$this->load->view("email/replyenquiry");
	}
	function simpleMail($to,$subject,$msg){
        require_once(APPPATH.'third_party/phpmailer/class.phpmailer.php');
        //require('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer;
        //$mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'freehosting2.managedns.org';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Username = 'xxxxxxx@nutantech.online';          // SMTP username
        $mail->Password = 'xxxxxx@123'; // SMTP password
        $mail->Port       = 587;                         // TCP port to connect to

        $mail->setFrom('admin@nutantech.online', 'Nutantech');
        $mail->addReplyTo('admin@nutantech.online', 'Nutantech');
        $mail->addAddress($to);   // Add a recipient
        $mail->addBCC('contact.nutantech@gmail.com');   // Add CC
        $mail->isHTML(true);  // Set email format to HTML
		$mail->WordWrap  = 80;
		$mail->Subject = $subject;
		$mail->Body = $msg;
		$mail->send();
		
    }
    function suscribeMail($to,$subject,$msg){
        require_once(APPPATH.'third_party/phpmailer/class.phpmailer.php');
        //require('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer;
        //$mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'freehosting2.managedns.org';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Username = 'xxxxx@nutantech.online';          // SMTP username
        $mail->Password = 'xxxxxx@123'; // SMTP password
        $mail->Port       = 587;                         // TCP port to connect to

        $mail->setFrom('contact@nutantech.online', 'Nutantech');
        $mail->addReplyTo('contact@nutantech.online', 'Nutantech');
        $mail->addAddress($to);   // Add a recipient
        $mail->addBCC('contact.nutantech@gmail.com');   // Add CC
        $mail->isHTML(true);  // Set email format to HTML
		$mail->WordWrap  = 80;
		$mail->Subject = $subject;
		$mail->Body = $msg;
		$mail->send();
		
    }

}
