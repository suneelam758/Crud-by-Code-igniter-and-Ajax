<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		body {
			padding: 100px;
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.bod{
	padding: 100px;
	border-style: groove;
	border-color: black;
	border-width: 2px;
}


	</style>
</head>
<body>
	<center><h1><tt>Welcome</tt></h1></center>

<div class="bod">
<center><button class='btn btn-success'><a href="<?php echo base_url().'index.php/user/index';?>" style="text-decoration: none; color: white;">Click To Enter</a></button></center>
</div>

</body>
</html>
