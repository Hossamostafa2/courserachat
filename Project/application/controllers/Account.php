<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__DIR__)."/helpers/utility_helper.php";

class Account extends CI_Controller {
	function __construct() {
      parent::__construct();
  }

	public function Register() {
    if (isset($_POST['submit'])) {
      $name = $_REQUEST['Name'];
      $password = $_REQUEST['Password'];
      $phone = $_REQUEST['Phone'];
      $email = $_REQUEST['Email'];
      $securityQuestion = $_REQUEST['SecurityQuestion'];
      $securityAnswer = $_REQUEST['SecurityAnswer'];
      $hash = password_hash($password, PASSWORD_DEFAULT);
      date_default_timezone_set('Africa/Cairo');
      $currentDateTime = date('Y-m-d H:i:s');
      $data = array(
            'UserName' => $name,
            'PhoneNumber' => $phone,
            'Email' => $email,
            'SecurityQuestionFk' => $securityQuestion,
            'SecurityQuestionAnswer' => $securityAnswer,
            'Password' => $hash,
            'CreationDate' => $currentDateTime
          );
      $this->load->model('users');
      if($this->users->add($data)) {
        redirect('Account/Login');
      }
      else {
        redirect('Account/Register');
      }
    }
    else {
      $data['websiteName'] = "Project";
  		$userLogin = check_user_login();
  		if(isset($userLogin) && !empty($userLogin)) {
        redirect('Home/Inbox');
      }
  		else {
        $data['pageName'] = "Register";
        $this->load->view('register_page', $data);
      }
    }
	}

  public function Login() {
    if (isset($_POST['submit'])) {
      $email = $_REQUEST['Email'];
      $password = $_REQUEST['Password'];
      $checkboxSuccess = isset($_REQUEST['CheckboxSuccess']);
      $this->load->model('users');
      $existUser = $this->users->checkUser($email);
      if($existUser) {
        $savedPassword = $existUser[0]['Password'];
        $userId = $existUser[0]['UserPk'];
        $userName = $existUser[0]['UserName'];
        if (password_verify($password, $savedPassword)) {
          if($checkboxSuccess) {
            $userLogin = add_user_login($userId."-".$userName."-".$email);
          }
          else {
            $userLogin = add_temp_user_login($userId."-".$userName."-".$email);
          }
          redirect('Home/Inbox');
        }
        else {
          $data['websiteName'] = "Project";
          $data['pageName'] = "Login";
          $data['err'] = "Username or password are wrong";
    			$this->load->view('login_page', $data);
        }
      }
      else {
        $data['websiteName'] = "Project";
        $data['pageName'] = "Login";
        $data['err'] = "Username or password are wrong";
  			$this->load->view('login_page', $data);
      }
    }
    else {
      $data['websiteName'] = "Project";
      $data['pageName'] = "Login";
      $data['err'] = "";
  		$userLogin = check_user_login();
      if(isset($userLogin) && !empty($userLogin)) {
        redirect('Home/Inbox');
      }
  		else {
        $data['pageName'] = "Login";
        $this->load->view('login_page', $data);
      }
    }
	}

	public function ForgotPassword() {
		if (isset($_POST['submit'])) {
		}
		else {
			$data['websiteName'] = "Project";
      $data['pageName'] = "Forgot Password";
			$this->load->view('forgot_password_page', $data);
		}
	}

  public function Logout() {
    delete_user_login($userId."-".$userName);
    redirect('Account/Login');
	}
}

?>
