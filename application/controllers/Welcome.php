<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	public function index() {
		$subjects = $this->db->query('select * from subjects')->result();

		echo $this->blade->view()->make('welcome_message', ['subjects' => $subjects]);
	}
}
