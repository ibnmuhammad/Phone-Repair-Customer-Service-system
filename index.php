<!DOCTYPE html>
<html>
<head>
	<title>CarlCare</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		body
  		{
  			margin: 0 auto;
  		}
  		h2
  		{
  			font-style: comic sans-serif;
  			font-weight: bold;
  			text-align: center;
  		}
  		.navbar
  		{
  			background-color: #131339;
  		}
  		.copyright {
		    color: white;
		    line-height: 30px;
		    min-height: 30px;
		    padding: 7px 0;
		    text-align: center;
		}
		.footer-bottom {
		    background-color: #131339;
		    min-height: 30px;
		    width: 100%;
		}
		.center
		{
			display: block;
		    margin-left: auto;
		    margin-right: auto;
		    width: 50%;
		}
  	</style>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php" style="color: white;">CarlCare</a>
			</div>
			<div class="collapse navbar-collapse navbar-right nav-login" id="myNavbar">

				<!-- Login -->
				<form class="navbar-form navbar-right form-inline" action="index.php" method="post">
					<div class="col-md-4 col-sm-4">
						<input type="tel" class="form-control" name="phonenumber" placeholder="Phone Number(+255719233813">
					</div>
					<div class="col-md-4 col-sm-4">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="col-md-2 col-sm-2">
						<button type="submit" class="btn btn-success fa fa-lock" name="submit">Login</button>
					</div>

					<!-- Signup-->
					<div class="col-md-2 col-sm-2">
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Signup</button>
					</div>
				</form>
			</div>
		</div>
	</nav>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '1234', 'carlcare');

if (isset($_POST['submit'])) {

	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE administrator = '$phonenumber' AND password='$password'";
	$sqlquery = mysqli_query($db, $sql) or die(mysqli_error($db));
	$count = mysqli_num_rows($sqlquery);

	if ($count == 1) {	
		$_SESSION['phonenumber'] = $phonenumber;
		header('location: Admin/maintenance_report.php');
	}else{
			$sql = "SELECT * FROM customers WHERE phonenumber='$phonenumber' AND password='$password'";
			$sqlquery = mysqli_query($db, $sql) or die(mysqli_error($db));
			$count = mysqli_num_rows($sqlquery);

			if ($count == 1) {
			$_SESSION['phonenumber'] = $phonenumber;
			header('location: customers/index.php');
			}else{

			$sql = "SELECT * FROM employees WHERE employeeID='$phonenumber' AND password='$password' AND employeerole = 'Helpdesk'";
			$sqlquery = mysqli_query($db, $sql) or die(mysqli_error($db));
			$count = mysqli_num_rows($sqlquery);

			if ($count == 1) {
			$_SESSION['phonenumber'] = $phonenumber;
			header('location: Helpdesk/new_reservation.php');
			}else{
			
			$sql = "SELECT * FROM employees WHERE employeeID='$phonenumber' AND password='$password' AND employeerole = 'Technician'";
			$sqlquery = mysqli_query($db, $sql) or die(mysqli_error($db));
			$count = mysqli_num_rows($sqlquery);

			if ($count == 1) {
			$_SESSION['phonenumber'] = $phonenumber;
			header('location: Technician/collected_phones.php');
			}else{
				echo "<div class='col-md-4 col-sm-4 col-xs-4 btn btn-danger'>";
		        echo "Incorrect login credentials!";
		        echo "</div>";
		}
		}
	}
}
}
	
?>

	<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="assets/images/signup.png" alt="CarlCare" style="width:100%; height: 450px;">
        <div class="carousel-caption">
          <h3>We are CarlCare</h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="assets/images/vision4.jpeg" alt="CarlCare" style="width:100%; height: 450px;">
        <div class="carousel-caption">
          <h3>pic2</h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/images/vision3.jpg" alt="CarlCare" style="width:100%; height: 450px;">
        <div class="carousel-caption">
          <h3>pic3</h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register now</h4>
        </div>
        <div class="modal-body">
          <!-- Registration form -->
          <form class="form-horizontal" action="signup.php" method="post">
          	<div class="form-group">
          		<label class="control-label col-sm-3">First Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="firstname" placeholder="Enter your first name" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Last Name:</label>
          		<div class="col-sm-9">
          			<input type="text" class="form-control" name="lastname" placeholder="Enter your last name" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Phone Number:</label>
          		<div class="col-sm-9">
          			<input type="tel" class="form-control" name="phonenumber" placeholder="Enter your phone number(+255719233813)" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Email:</label>
          		<div class="col-sm-9">
          			<input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Password:</label>
          		<div class="col-sm-9">
          			<input type="password" minlength="8" class="form-control" name="password" placeholder="Enter your password" required>
          		</div>
          	</div>
          	<div class="form-group">
          		<label class="control-label col-sm-3">Re-enter password:</label>
          		<div class="col-sm-9">
          			<input type="password" class="form-control" name="password2" placeholder="Re-enter your password" required>
          		</div>
          	</div>
          	<div class="modal-footer">
	        	<input type="submit" class="btn btn-success" name="submit" value="Register">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	</div>
          </form>
        </div>
      </div>


    </div>
  	</div>

<div class="container">
	<h2>About Us</h2>
	<p style="font-size: 16px; font-family: times new roman;"><b>CARLCARE Service Limited</b> is one of the leading mobilephone and electronics services centres for <i><b>TECNO</b></i> and <i><b>ITEL</b></i> in DAR ES SALAAM, Tanzania. <b>CARLCARE</b> was eestablished on 2009, aims at providing high quality services assurance to all customers, <b>CARLCARE</b> provides every clients with timely, Reliable and satisfying service with quality assurance system and experienced quality team and doing its best to provide every client the best service. <b>CARLCARE</b> is providing full support for <i><b>TECNO</b></i> and <i><b>ITEL</b></i>, two famous mobile brands. Meanwhile we welcomes the feedback from customers, which can help us to improve our service from every aspect.</p>
</div>

<div class="container">
	<div class="row">
		<h2>Our Vision</h2>
		<div class="col-md-4">
			<img class="img-rounded" src="assets/images/vision1.jpg" alt="" width="100%">
			<div class="carousel-caption">
				<h2>Aims at emerging market</h2>
			</div>
		</div>
		<div class="col-md-4">
			<img class="img-rounded" src="assets/images/vision2.jpg" alt="" width="100%">
			<div class="carousel-caption">
				<h2>Provides leading-level service</h2>
			</div>
		</div>
		<div class="col-md-4">
			<img class="img-rounded" src="assets/images/vision3.jpg" alt="" width="100%">
			<div class="carousel-caption">
				<h2>Serves to comprehensive electronics products</h2>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h2>Our Mission</h2>
		<div class="col-md-3">
			<img class="center" src="assets/images/swift.png" style="height: 100px; width: 100px;">
			<h3 style="font-weight: bold; font-family: sans-serif; text-align: center;">Swift</h3>
			<p style="font-size: 16px; text-align: center;">Quick repair</p>
			<p style="font-size: 16px; text-align: center;">Timely support</p>
			<p style="font-size: 16px; text-align: center;">Immediate response</p>
		</div>
		<div class="col-md-3">
			<img class="center" src="assets/images/like.png" style="height: 100px; width: 100px;">
			<h3 style="font-weight: bold; font-family: sans-serif; text-align: center;">Professional</h3>
			<p style="font-size: 16px; text-align: center;">Service</p>
			<p style="font-size: 16px; text-align: center;">Management</p>
			<p style="font-size: 16px; text-align: center;">Techniques</p>
		</div>
		<div class="col-md-3">
			<img class="center" src="assets/images/reliable.png" style="height: 100px; width: 100px;">
			<h3 style="font-weight: bold; font-family: sans-serif; text-align: center;">Reliable</h3>
			<p style="font-size: 16px; text-align: center;">Original parts</p>
			<p style="font-size: 16px; text-align: center;">High quality</p>
			<p style="font-size: 16px; text-align: center;">Fair price</p>
		</div>
		<div class="col-md-3">
			<img class="center" src="assets/images/valuable.png" style="height: 100px; width: 100px;">
			<h3 style="font-weight: bold; font-family: sans-serif; text-align: center;">Valuable</h3>
			<p style="font-size: 16px; text-align: center;">Satisfying</p>
			<p style="font-size: 16px; text-align: center;">Humanistics</p>
			<p style="font-size: 16px; text-align: center;">Value-added</p>
		</div>
	</div>
</div>

<!-- footer -->
<div class="footer-bottom">
<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm12 col-md-12 col-lg-12">
				<div class="copyright">
					<small>Copyright &copy; Carlcare <?php echo date('Y'); ?></small>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>