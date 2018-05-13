<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="{{ base_url() . 'css/bootstrap.min.css' }}">
	<link rel="stylesheet" href="{{ base_url() . 'css/bootstrap-theme.min.css' }}">
</head>
<body>

<div id="container">
	@yield('content')
</div>

<script src="{{  base_url() . 'js/bootstrap.min.js' }}"></script>
</body>
</html>