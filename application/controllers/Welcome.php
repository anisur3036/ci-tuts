<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	public function index() {
		$subjects = $this->db->query('select * from subjects')->result();

		$this->form_validation->set_rules(
			'email', 'Email',
			'trim|required|valid_email',
			[
				"required" => "{field} is required Anisur.",
				"valid_email" => "Your provide {field} not valid",
			]
		);

		$this->form_validation->set_rules(
			'password', 'Password',
			'trim|required',
			[
				//'required' => "%s is required.",
			]
		);

		$this->form_validation->set_rules(
			'confpassword', 'Confrim Password',
			'trim|required|matches[password]',
			[
				//'required' => "%s is required.",
			]
		);

		if ($this->form_validation->run() == FALSE) {
			echo $this->blade->view()->make('welcome_message', ['subjects' => $subjects]);
		} else {
			echo "success";
		}

	}
}
