<?php
include 'connection.php';
session_start();
$id=$_GET['edit_id'];
$query=mysqli_query($conn,"select * from medicine_tb where medicine_id='$id'");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $batch=$_POST['batch'];
    $mfd=$_POST['mfd'];
    $exd=$_POST['exd'];
    $avail=$_POST['avail'];
    $price=$_POST['price'];
    mysqli_query($conn,"update medicine_tb set name='$name',batch_no='$batch',mfdate='$mfd',exdate='$exd',availability='$avail',strip_price='$price' where medicine_id='$id'");
    header("location:admin_index.php");
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
				<a class="nav-link" href="admin_index.php">Home</a>
			  </li>
             
			  
              <li class="nav-item active">
				<a class="nav-link" href="index.php">Logout</a>
			  </li>
		  </div>
		</div>
	</nav>
</header>
<section class="banner">
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
        <section class="appoinment section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
           <h2 class="mb-2 title-color" style="color:white">Feedback/Complaint</h2>
            
               <form id="#" class="appoinment-form" method="post" >
			 <!--  <div class="table-responsive"-->
			 
                    <table class="table-responsive" >
                      <thead>
					  
                        <tr>
                        <?php
				   while($row=mysqli_fetch_assoc($query))
				   {
				   ?>
                       <tr>   <th>Name</th> <td><input type="text" name="name" value="<?php echo $row['name']; ?>" ></td></tr>
                       <tr>   <th>Batch</th> <td><input type="text" name="batch"  value="<?php echo $row['batch_no']; ?>" ></td></tr>
                       <tr>   <th>Manufacture Date</th><td><input type="text" name="mfd"  value="<?php echo $row['mfdate']; ?>" ></td></tr>
                      <tr>  <th>Expiry Date</th> <td><input type="text" name="exd" value="<?php echo $row['exdate']; ?>" ></td></tr>
                      <tr>    <th>Availability</th> <td><input type="text" name="avail" value="<?php echo $row['availability']; ?>" ></td></tr>
                     <tr>  <th>Strip price</th>   <td><input type="text" name="price" value="<?php echo $row['strip_price']; ?>" ></td></tr>
                        <tr>  <th colspan=2><button name="sub" class="btn btn-primary">Edit</th> 
                          </tr>
                      </thead>  
                      
                      
					  <?php
				   }
				   ?>
					</table>
			 
			</form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
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