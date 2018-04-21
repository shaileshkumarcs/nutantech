<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct() {
        parent::__construct();
        // Enquiry model class
        $this->load->model('Enquirymodel', 'enmodel');
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
        $this->load->helper('support_helper');
        $this->load->helper('cookie');
        $this->load->helper('url');
    }
	public function index()
	{
		// email stuff (change data below)
		$to = "shailesh94kumar@gmail.com";
		$from = "shailesh.kumarcs@gmail.com";//"contact@nutantech.online";
		$subject = "send email with pdf attachment";
		$message = "<h1 style='color:red;'>Please see the attachment.</h1>";

		// a random hash will be necessary to send mixed content
		$separator = md5(time());

		// carriage return type (we use a PHP end of line constant)
		$eol = PHP_EOL;

		// attachment name
		//$filename = "test.pdf";

		// encode data (puts attachment in proper format)

		//$attachment = chunk_split(base64_encode($pdfdoc));

		// main header
		$headers  = "From: ".$from.$eol;
		$headers .= "MIME-Version: 1.0".$eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

		// no more headers after this, we start the body! //

		$body = "--".$separator.$eol;
		$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
		$body .= "This is a MIME encoded message.".$eol;

		// message
		$body .= "--".$separator.$eol;
		$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
		$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
		$body .= $message.$eol;

		// attachment
		//$body .= "--".$separator.$eol;
		//$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol;
		//$body .= "Content-Transfer-Encoding: base64".$eol;
		//$body .= "Content-Disposition: attachment".$eol.$eol;
		//$body .= $attachment.$eol;
		$body .= "--".$separator."--";

		// send message
		mail($to, $subject, $body, $headers);
	}
	public function test(){
		$this->load->library('email');
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);
		$this->email->from('shailesh.kumarcs@gmail.com', 'Trip Me');
		$this->email->to('shailesh94kumar@gmail.com');
		$i = 1;
		/*foreach($vochers as $voucher){
				$this->email->attach($voucher, 'application/pdf', "TripMe_HotelVoucher_". $i .'-'. date("m-d H-i-s") . ".pdf", false);
				$i++;
		}*/
		//$this->email->attach($invoice, 'application/pdf', "TripMe_Invoice_" . date("m-d H-i-s") . ".pdf", false);
		$this->email->subject('Trip Me : Booking Details');
		$msg="<br/> Name :Shailesh <br/> Email : shailesh<br/>Trip Description";
		//$msg = "HI Test email";
		$this->email->message($msg);
		if($this->email->send()){
			echo "HI";
		}
	}
	public function getUserIp(){
		$ip = $this->input->ip_address();
		echo $ip;
		echo "<br/>";
		echo getuserip();
		echo "<br/>";
		echo getBrowserAgent();
	}
	public function phpMailer(){
		$to = 'shailesh.kumarcs@gmail.com';
		$msg = "<h1>Hi testing with SMTP</h1>";
		$subject = "TESTTT";
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
		$mail->WordWrap  = 80;
		$mail->Subject = $subject;
		$mail->Body    = $msg;
		$mail->send();
	}
}
