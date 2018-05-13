<?php
$config = array(

	'signup' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email',
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|min_length[6]',
		),
		array(
			'field' => 'confpassword',
			'label' => 'Password Confirmation',
			'rules' => 'trim|required|matches[password]',
		),
	),

	'signin' => array(
		array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required',
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required',
		),
	),

);