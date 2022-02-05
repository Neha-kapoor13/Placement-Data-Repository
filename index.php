<?php
    session_start();
    include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>PLACEMENT DATA REPOSITORY</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
<link type="text/css" rel="stylesheet" href="css/style2.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<style>

body {
    background:url(images/b2.jpg) ;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					
					
				</div>
			</div>
		</header>
		<!-- //header -->
 <?php
include('nav.php');
?>
		<!--slider-->
  <section>
    <div id="caro" class="carousel slide" data-ride="carousel">
      <img src="images/bg.jpg" class="d-block w-100">
        </div>
        
  </section>
  <!--concept of grid-->
  <section>
	
	<!-- //main banner -->

	<!-- about-->
	<section class="single_grid_w3_main align-w3 py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<div class="wthree_pvt_title text-center">
				<h4 class="w3pvt-title"><u>About Us</u></h4>
				<p class="sub-title">The ‘Placement Data Repository’ is a web application which is developed to store the data of various companies which interacts with the placement cell of BCIIT, Kalkaji and initiates the recruitment process via on-campus/off-campus placement drive. With the help of this application we are trying to overcome all the issues faced during manual collection of placement data by automating this process and improve the experience for future students. 
<center><img src="images/top.png" height="250" width="500"><img src="images/top.png" height="250" width="500"></center>			
</div>
<div class="row pt-lg-4 ">
<div class="col-lg-6">					
<div class="single_grid_w3 single_grid_w3">
<img src="images/i.jpg" alt="" class="img-fluid" />
</div>
				</div>					
				<div class="col-lg-6">
					<div class="single_grid_text">
						<h5>ABOUT BCIIT</h5>
						<p>Banarsidas Chandiwala Institute of Information Technology (BCIIT)
established in 1999 is the first Institute of GGSIPU approved to run
Master of Computer Application (MCA) programme. The institute is
affiliated to Guru Gobind Singh Indraprastha University, New Delhi
for awarding the MCA degree and is approved by All India Council of
Technical Education (AICTE), Ministry of HRD, Government of India.
 </p>
					</div>
				</div>
			</div>

			<div class="row flex-row-reverse sec-space">
				<div class="col-lg-6 pr-lg-0 clo-res">
					<div class="single_grid_w3 single_grid_w31">
						<img src="images/tree.jpg" alt="" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-6 pl-lg-0 clo-res">
					<div class="single_grid_text">
						<h5>PLACEMENT CELL 2021-22</h5>
						
						<p>The aim of the placement cell is
to provide the students a platform for
interaction with the corporate world
and to improve the overall personality of
the students. The aims are achieved
through lectures, workshops, seminars,
information about carrier opportunities,personality of the students.The aims are achieved through lectures,
workshops, seminars, information about carrier opportunities, mock
tests, group discussions, interviews, pre-placement talk etc.</p>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="single_grid_w3 single_grid_w32">
						<img src="images/rec.jpg" alt="" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single_grid_text">
						<h5>OUR RECRUITERS</h5>
						
						<p>With the efforts of placement cell, more and more
companies are visiting our college for campus selection. The prominent
organisations like IVP, Yamaha Motors, NCR, Grapecity, LeewayHertz,
Opera Solution Knoldus, visited the college for placement
and most of the students of previous batches have been placed in these
companies. placement cell, more and more companies are visiting our
college for campus selection.</p>
					</div>
				</div>
			</div>
		</div>

	</section>
	
	<!-- testimonials -->
	<section class="testimonials text-center py-5" id="testi">
		<div class="container py-xl-5 py-lg-3">
			<div class="py-xl-4 py-lg-2">
				<img src="images/logo.jpg" alt="" class="img-fluid test-img" />
				<h3 class="mt-4 mb-2">BCIIT Placement Data Repository</h3>
				<ul class="list-unstyled w3ls-icons clients">
					<li>
						<a href="#">
							<span class="fa fa-star"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-star"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-star"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-star"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-star"></span>
						</a>
					</li>
				</ul>
				<p class="testi-info text-wh mt-4 pt-3"><span class="fa fa-quote-left mr-2"></span>
					
The Placement Cell organizes campus and pool drives keeping the
requirements of organizations in mind. BCIIT invites various esteemed
organization to conduct campus drive at our campus for recruitment of
MCA students.</span>
				</p>
			</div>
		</div>
	</section>
	      <?php
include('foot.php');
?>

</body>

</html>