<?php

session_start();

 if(!$_SESSION['user'])
{
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<head>
<title>coordinator menu</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/font-awesome/css/fontawesome.min.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: red;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #33;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: rgb(255,255,255);opacity:0.6; 
}
 #navbar {
  overflow: hidden;
  background-color: #33;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.about{

  padding:20px;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 30px;
}
body {
background: linear-gradient(45deg, #FC466B, #3F5EFB);
}

</style>

	<!--<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">-->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	
<ul>
  <li><a href="user_stable.php">USER MENU</a></li>
  <li><a href="part_stable.php">PARTICIPANTS</a></li> 
  <li><a href="change_pass.php">CHANGE PASSWORD</a></li>
  
  <li><a href="logout.php">LOG OUT</a></li>
  
</ul>
<h1 align="center"><b>HACKATHON 1.0<b></h1>
  <br>
<body>  
    
	                 

            <div><div id="a">
							