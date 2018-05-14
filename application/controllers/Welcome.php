<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	public function index() {

		$subjects = $this->db->query('select * from subjects')->result();

		$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_email_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confpassword', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run('signup') == FALSE) {
			echo $this->blade->view()->make('welcome_message', ['subjects' => $subjects]);
		} else {
			echo "success";
		}

	}

	public function email_check($str) {
		if ($str == 'test@test.com' || $str == 'example@example.com') {
			$this->form_validation->set_message('email_check', 'The {field} field can not be the word "test/example"');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
