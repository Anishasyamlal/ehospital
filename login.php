<?php
session_start();
include 'connection.php';
if(isset($_POST['log']))
{
$type=$_POST['type'];
$user=$_POST['user'];
$pswd=$_POST['pswd'];
$query=mysqli_query($conn,"SELECT * FROM login_tb WHERE type='$type' and username='$user' and password='$pswd' ");
if(mysqli_num_rows($query)>0){
	$result=mysqli_fetch_assoc($query);

	$_SESSION['login_id']=$result['login_id'];
	$id=$_SESSION['login_id'];
	$_SESSION['type']=$result['type'];
	$t = $_SESSION['type'];
	
	if($t=='admin'){
	
		header("location:admin_index.php");
	}
	else if($t=='doctor'){
		$qry=mysqli_query($conn,"select approve from doctor_reg where login_id='$id'");
		if(mysqli_num_rows($qry)>0){
			$result=mysqli_fetch_assoc($qry);
			$approve=$result['approve'];
			if($approve==1){
		header("location:doctor_index.php");}
		else{
			echo '<script> alert("Not approved") </script>';
		}
	}
	}
	else {
		
		header("location:patient_index.php");
	}
}

}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Sanjivani- Health & Care Medical </title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
<script>
	function validate(){
		var name=document.getElementById('name').value;
		var pswd=document.getElementById('pswd').value;
		if(name==""){
			document.getElementById('sp1').innerHTML="Enter value";
		}
		if(pswd==""){
			document.getElementById('sp2').innerHTML="Enter value";
		}
	}
	function clrmsg(sp){
		document.getElementById('sp').innerHTML="";

	}
</script>
</head>
<body>
<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@Sanjivani.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4">823-4565-13456</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="images/logo1.png" alt="" class="img-fluid" style="width:100px;height:100px;">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			  </li>

			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>

<!--
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li> -->
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
<!-- section start -->
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
        <section class="appoinment section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color" style="color:white">Please Login Now</h2>
               <form id="#" class="appoinment-form" method="post" >
                    <div class="row">
					<div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="type" id="exampleFormControlSelect1">
                                  <option>User type</option>
                                  <option>Admin</option>
                                  <option>Doctor</option>
                                  <option>Patient</option>
                              

                                </select>
                            </div>
                        </div>
                         <div class="col-sm-12">
                            <div class="form-group">
                                <input name="user" id="name" type="text" class="form-control" placeholder="Username" onkeyup="clrmsg('sp1')" >  
                            <span id="sp1" style="color:red;"></span>
							</div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="pswd" id="pswd" type="password" class="form-control" placeholder="Password" onkeyup="clrmsg('sp2')" >
								<span id="sp2" style="color:red;"></span>
							</div>
                        </div>
                    </div>
                    

                    <button class="btn btn-main btn-round-full btn-success" onclick="return validate()" name="log" >Login<i class="icofont-simple-right ml-2"></i></button><br>
               
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
		</div>
      </div>
    </div>
  </div>
</section>
<!--section end -->

<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo1.png" alt="" class="img-fluid" style="width:150px;height:150px;">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">General Medicine </a></li>
						<li><a href="#">Gynaecology</a></li>
						<li><a href="#">Obstetrics</a></li>
						<li><a href="#">Paediatrics</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Sanjivani</span> by <a href="https://themefisher.com/" target="_blank">anisha</a>
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>