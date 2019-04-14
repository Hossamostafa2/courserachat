<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__DIR__)."/helpers/utility_helper.php";

class Home extends CI_Controller {
	function __construct() {
      parent::__construct();
  }

	public function index() {
		$data['websiteName'] = "Project";
    $data['pageName'] = "Index";
		$userLogin = check_user_login();
		if(isset($userLogin) && !empty($userLogin))
			redirect('Home/Inbox');
		else
			$this->load->view('home_page', $data);
	}

	public function inbox() {
		$data['websiteName'] = "Project";
    $data['pageName'] = "Inbox";
		$userLogin = check_user_login();
		$userDataArr = explode ("-", check_user_login());
		$data['userName'] = $userDataArr[1];
		$data['userEmail'] = $userDataArr[2];
		if(isset($userLogin) && !empty($userLogin)) {
				$this->load->model('messages');
        $data['allMessages'] = $this->messages->getMessages($data['userEmail']);
        $this->load->view('inbox_page', $data);
		}
		else
			$this->load->view('home_page', $data);
	}

	public function sendMsg() {
		if (isset($_POST['submit'])) {
			$email = $_REQUEST['Email'];
			$title = $_REQUEST['Title'];
			$message = $_REQUEST['Message'];
			$currentDateTime = date('Y-m-d H:i:s');
			$userLogin = check_user_login();
			$userDataArr = explode ("-", check_user_login());
			$userId = $userDataArr[0];
			$data = array(
						'ToUser' => $email,
						'MessageTitle' => $title,
						'MessageContent' => $message,
						'FromUserFk' => $userId,
						'MessageTime' => $currentDateTime
					);
			$this->load->model('messages');
			$this->messages->add($data);
			redirect('Home/Inbox');
		}
	}
}
?>
