<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodule extends CI_Controller {

	function __construct() {
        parent::__construct();
        
       // $this->load->library('email');
        $this->load->model('Loginmodel', 'lmodel');
        /*$this->load->model('Flight_Booking_model', 'flight_booking');
        $this->load->model('Flights_model', 'flights');
        $this->load->model('Booking_model', 'bookingdata');
        $this->load->model('Seo_model','seo');
        $this->load->model('BookingPassenger_model', 'passenger');*/
        $this->load->helper('support_helper');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->helper('url');
    }
    public function index(){
        //print_r($_SESSION);
        if(!isset($_SESSION['nutanuser']))
        {
            $this->load->view("errors/error");
        }
        else
        {
            if (isset($_GET['fbid'])) {
                $fuid = $_GET['fbid'];
                $result = $this->lmodel->getWhere('users','fuid', $fuid);
                $_SESSION['nutanuser'] = $result[0];
            }
            $userdate = $this->lmodel->getWhere('users','id', $_SESSION['nutanuser']['id']);
            //print_r($userdate);
            $data['user'] = $userdate[0];
            //print_r($data['user']);
            $this->load->view('dashboard/profile',$data);
        }
    }
	public function formsignup(){
        if(!empty($_POST['name']) == "" && !empty($_POST['emailid']) == "" && !empty($_POST['password'])=="")
        {

            $this->load->view("errors/error");

        }else{
            $name = $_POST['name'];
            $email = $_POST['emailid'];
            $password = md5($_POST['password']);
            // CHECK IF Given email id exists
            
            $result = $this->lmodel->getWhere('users', 'emailid', $email);
            if(!empty($result))
            {
                $data = array(
                            "value" => 0
                        );
                $this->load->view("Home/page1",$data);
            }
            else{
                // SAVE DATA IN USER TABLE
                $userdata = array(
                        "fullname" => $name,
                        "emailid" => $email,
                        "password" => $password,
                    );
                $this->lmodel->add('users', $userdata);
                // this data send to another page
                $data = array(
                    "value" => 1
                );
                $this->load->view("Home/page1",$data);
            }
        }
    }
    public function loginform(){
        if (isset($_POST['username'])) {
            $email = $_POST['username'];
        } else {
            $email = "";
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $password = "";
        }
        if (isset($_POST['rememberme'])) {
            $cookie = array(
                'name' => 'user',
                'value' => $email,
                'expire' => time() + 86500,
            );
            $this->input->set_cookie($cookie);
        }
        $result = $this->lmodel->getLoginWhere('users', 'emailid', $email, 'password' ,md5($password));
        if(empty($result))
        {
            $data = array(
                        "val" => 2
                    );
            $this->load->view("Home/page1",$data);
        }
        else{
            
            $email = $result[0]['emailid'];
            $_SESSION['nutanuser'] = $result[0];
            //print_r($_SESSION); 
            redirect('Loginmodule');
        }

    }
    public function updateUserProfile() {
        //check if the given email exists for some other user
        $id = $_GET['id'];
        $email = $_POST['emailid'];
        $result = $this->lmodel->getProfileWhere('emailid', $email);
        if (!empty($result)) {
            $userid = $result[0]['id'];
            if ($userid != $id) {
                $userdata = array(
                    'errormsg' => $email . ' already exists.',
                    'user' => '',
                );
            } else {
                $data = $_POST;
                $this->lmodel->updateWhere($data, 'id', $id);
                redirect('Loginmodule');
            }
        } else {
            $data = $_POST;
            $this->lmodel->updateWhere($data, 'id', $id);
            redirect('Loginmodule');
        }

        $this->load->view('dashboard/profile', $userdata);
    }
    public function updateProfilePicture(){
       if(!isset($_SESSION['nutanuser'])){
            redirect('Welcome/login');
        }
        $user_id = $_POST['userid'];
        $usersalt = createsalt();
        /* defined settings - start */
        ini_set("memory_limit", "99M");
        ini_set('post_max_size', '20M');
        ini_set('max_execution_time', 600);
        define('IMAGE_SMALL_DIR', 'images/uploads/users/small/');
        define('IMAGE_SMALL_SIZE', 50);
        define('IMAGE_MEDIUM_DIR', 'images/uploads/users/medium/');
        define('IMAGE_MEDIUM_SIZE', 250);
        /* defined settings - end */
        if (isset($_FILES['image_upload_file'])) {
            $output['status'] = FALSE;
            set_time_limit(0);
            $allowedImageType = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png");
            $error_types = array(
                1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
                'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
                'The uploaded file was only partially uploaded.',
                'No file was uploaded.',
                6 => 'Missing a temporary folder.',
                'Failed to write file to disk.',
                'A PHP extension stopped the file upload.'
            );
            if ($_FILES['image_upload_file']["error"] > 0) {
                $output['error'] = $error_types[$_FILES['image_upload_file']['error']];
            } elseif (!in_array($_FILES['image_upload_file']["type"], $allowedImageType)) {
                $output['error'] = "You can only upload JPG, PNG and GIF file";
            } elseif (round($_FILES['image_upload_file']["size"] / 1024) > 4096) {
                $output['error'] = "You can upload file size up to 4 MB";
            } else {
                /* create directory with 777 permission if not exist - start */
                createDir(IMAGE_SMALL_DIR);
                createDir(IMAGE_MEDIUM_DIR);
                /* create directory with 777 permission if not exist - end */
                $path[0] = $_FILES['image_upload_file']['tmp_name'];
                $file = pathinfo($_FILES['image_upload_file']['name']);
                $fileType = $file["extension"];
                $desiredExt = 'jpg';
                $fileNameNew = $usersalt . ".$desiredExt";
                $data = array(
                    'picture' => base_url() . 'images/uploads/users/medium/' . $fileNameNew
                );
                $this->lmodel->updateWhere($data, 'id', $user_id);
                $path[1] = IMAGE_MEDIUM_DIR . $fileNameNew;
                $path[2] = IMAGE_SMALL_DIR . $fileNameNew;
                if (createThumb($path[0], $path[1], $fileType, IMAGE_MEDIUM_SIZE, IMAGE_MEDIUM_SIZE, IMAGE_MEDIUM_SIZE)) {

                    if (createThumb($path[1], $path[2], "$desiredExt", IMAGE_SMALL_SIZE, IMAGE_SMALL_SIZE, IMAGE_SMALL_SIZE)) {
                        $output['status'] = TRUE;
                        $output['image_medium'] = $path[1];
                        $output['image_small'] = $path[2];
                    }
                }
            }
            //print_r($output['status']);
            //echo "<br/>";
            //print_r($path[2]);
            //exit;

            redirect('Loginmodule');
        } 
    }


    public function logout(){
        //$this->session->sess_destroy();
        //$this->googleplus->revokeToken();
        if (isset($_SESSION['nutanuser'])) {
            unset($_SESSION['nutanuser']);
        }
        if (isset($_SESSION['user_nutan'])) {
            unset($_SESSION['user_nutan']);
        }
        if (isset($_SESSION['loginnutan'])) {
            unset($_SESSION['loginnutan']);
        }
        if (isset($_COOKIE['nuser'])) {
            delete_cookie('nuser');
        }
        redirect(site_url());
    }
}
