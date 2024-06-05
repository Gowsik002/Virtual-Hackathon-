<!DOCTYPE html>
<head>
<?php
include("db_conection.php");
 ?>
<title>HACKATHON 2023</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<style>
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
  background-color:rgb(255,255,255);opacity:0.6; 
}
.about{
height:px;
  padding:20px;
}
 .col-sm-4 {
  border: 1px solid navy;
  padding: 10px;
 border-radius: 20px 20px;
 width:32.5% !important;
 margin-right:1px;
 }
  .col-sm-3 {
  border: 2px solid #C70039;
  
  padding: 10px;
  border-radius: 50px 20px;}

body {
 background: linear-gradient(45deg, navy, #009688);

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
 
hr.new {
  border: 2px solid #e91e63;
  border-radius: 5px;
}
#a {
  border-radius: 100px 100px;
  background-color: palegoldenrod;
  padding: 0px 30px;
}


.ml2 {
  font-weight: 900;
  font-size: 3.5em;
  color:#ffeb3b !important;
}

.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
.ml5 {
  position: relative;
  font-weight: 300;
  font-size: 1.8em;
  color: red;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml5 .ampersand {
  font-family: Baskerville, serif;
  font-style: italic;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml5 .letters {
  display: inline-block;
  opacity: 0;
}
</style>
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: red;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 30%;
}

.button:hover {
  background-color: grey;
}
#b {
   border-radius: 30px 30px;
  background-color: #F2F3F4 ;
  padding: 20px 30px;
}

</style>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="assets/font-awesome/css/fontawesome.css">
	
		<!-- Owl Carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
<link rel="stylesheet" href="css/style.css">


</head>
<body>

<div class="w3-top">
<div class="w3-bar" style="background-color: black;">
<ul>
  <li><a href="mainpage.php"><i class="fa fa-edit" class="w3-bar-item w3-button w3-padding-large"></i>HOME</a></li>
  <li><a href="ss.php"><i class="fa fa-fw fa-send"></i>REGISTRATION</a></li>
  <li><a href="login.php"><i class="fa fa-fw fa-user"></i>COORDINATOR LOGIN</a></li>
  <li><a href="results_data.php"><i class="fa fa-fw fa-search"></i>RESULTS</a></li>
  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>CONTACT US</a></li>
  <li style="float:right"><a href="about.html">ABOUT</a></li></ul></div></div>
  <br>
  <br>
  <div class="content">
<div class="container">
<center><h1 class="ml2">HACKATHON 2023</h1></center>
<div class="row">
<div class="col-sm-12">
<img src="img/a.jpg" alt="HACKATHON" style="width:100%;height:300px;"/>
</div>
</div>
<hr class="new">
<div id="a">
<br><center>
<body>

<h1 class="ml5">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters letters-left"><b>-: Problem </b></span>
    
    <span class="letters letters-right"><b>Statements :-</b></span>
    <span class="line line2"></span>
  </span>
</h1>

<center><b><?php
   
  $check_user="select * from prob ";
  $run=mysqli_query($link,$check_user);
  
  
  if(mysqli_num_rows($run)>0){ 
$query2="select ps from prob where id='0'";
		  $result2=mysqli_query($link,$query2);
		  $data2=mysqli_fetch_assoc($result2);
		  $code=$data2['ps'];		
		$part_id=$code;
		$msg2=" $part_id ";
		echo "$msg2"; echo'<br>';
		while($row=mysqli_fetch_array($result2))//while look to fetch the result and store in a array $row.
        {
			$part_id=$row[0];
			echo $part_id; ?><html><br><?php
  }}
	else{
		echo "Problem Statements will be revealed on 31st May-2023"; 
		print ' at 06:30PM';
  
	}
  ?></b></center><br></div><hr class="new">
                 

<div class="about">
<h2 style="color:aliceblue;"><b>BE READY TO EXPLORE YOURSELF TO REACH HIGH</b></h2>
<br>
<div id="b">
<div class="row">
  <div class="col-sm-4">
  
      <img src="img/i.jpg" alt="Jane" style="width:100%"/>
      <div class="">
        <h2><B>HACKORANK 1.0</B></h2>
        <b><p class="title">GM INSTITUTE OF TECHNOLOGY</p>
        <p>Problem Statement will be released on the <br>day  of Hackathon
		and team  has to choose <br>one and work on  it for 48 hours.</p></b>
		<input type="hidden" name="pwd" value="hackathon1">
          <center> <input type="button" class="btn btn-sm btn-success" name="hackathon" value="REGISTER" onclick="javascript:location.href='ss.php';"></center>
 
    </div>
  </div>

  <div class="col-sm-4">

      <img src="img/i.jpg" alt="Mike" style="width:100%">
      <div class="">
        <h2><B>HACKATHON 2.0</B></h2>
        <b><p class="title">JAIN INSTITUTE OF TECHNOLOGY</p>
        <p>Problem Statement will be released on the <br>day  of Hackathon
		and team  has to choose <br>one and work on  it for 36 hours.</p></b>
		<input type="hidden" name="pwd" value="hackathon2">
          <center> <input type="button" class="btn btn-sm btn-success" name="hackathon" value="REGISTER" onclick="javascript:location.href='ss.php';"></center>
      </div>

  </div>
  
  <div class="col-sm-4">
   
      <img src="img/i.jpg" alt="John" style="width:100%">
      <div class="">
        <h2><B>HACKERTEAM 3.O</B></h2>
       <b> <p class="title">HACKATHON ACADEMY</p>
       <p>Problem Statement will be released on the <br>day  of Hackathon
		and team  has to choose <br>one and work on  it for 20 hours.</p>
       
		<input type="hidden" name="pwd" value="hackathon">
      <center> <input type="button" class="btn btn-sm btn-success" name="hackathon" value="REGISTER" onclick="javascript:location.href='ss.php';"></center>
    
    </div>
  </div>
  
</div>
</div>
<hr class="new">				

<div class='about'>	
<h3 style="color:white;"><b>NOTE:</b></h3>
<h4 style="color:#f38989;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:#fff;">*</i>&nbsp;&nbsp;&nbsp;&nbsp;Maximum 5 members in each team of the same college.</h4>
<h4 style="color:#f38989;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:#fff;">*</i>&nbsp;&nbsp;&nbsp;&nbsp;Teams can build Web, Mobile or Desktop applications.</h4>

<h4 style="color:#f38989;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:#fff;">*</i>&nbsp;&nbsp;&nbsp;&nbsp;Entry Fees:  250rs per Team </h4>
</div>
<hr class="new">
<br><br>
		</body>			
					
       	<!-- jQuery -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
  <script src="cdnjs/anime.min.js"></script>
<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script>// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  
  </script>
  
		<script> anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });</script>		
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</html>
