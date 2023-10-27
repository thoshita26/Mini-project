<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>RTO ANDHRA PRADESH</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="RTO WEB TEMPLATE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css2?family=Anek+Latin&family=Source+Sans+Pro&display=swap' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css2?family=Anek+Latin:wght@300;400&family=Source+Sans+Pro&display=swap' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header" >
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span> 
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1><a href="index.html">RTO <span>Andhra Pradesh</span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="click_llr.php"><span data-hover="LL Registration">LL Registration</span></a></li>
									<li><a href="click_registration.php"><span data-hover="Registration">Vehicle Registration</span></a></li>
									<li><a href="click_dl.php"><span data-hover="DL">Driving Licence</span></a></li>
                                    <li><a href="click_dl.php"><span data-hover="DL renew">Driving Licence Renew</span></a></li>

									<li><a href="complaint.php"><span data-hover="Complaint">Complaint</span></a></li>
									
								</ul>
							</nav>
						</div> -->
					</div>
				</nav>
			</div>
		</div>
		<style>
			.header{
				background-color: #2832c2 ;
			}
		</style>
	<!--header-->
	<!-- banner -->
	
	<!--content-->
		
			<!--banner-bottom-->
			<!--welcome-->
            <div class="header1">
            <h2>Enter password!</h2>
        <br>
        </div>
          
        <form method="post" action="#">
      
            <?php include('error.php'); ?>
            <label>Enter Password</label>
                <input type="password" name="password">
           

        </form>
        <style>
table, th, td {
  border: 3px solid white;
  border-collapse: collapse;
  padding-left: 200px;
  margin-left: auto;  
margin-right: auto;  
}
th, td {
  background-color:#89CFF0;
  padding-left: 200px;
  font-weight: bold;
  font-size: 120%;
}
tr{
height:50px;
}
</style>
        <?php
$ab=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}?>



  <table style="width:70%">
    
    <?php
    $sql = "SELECT temporary_number,name,phoneno,guardian,guardianphoneno,aadhar,chassis_no, engine_no,vehicle_class,color,fuel_type,seating,password2,statuss,permanent FROM vr WHERE password2 = $ab";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
       <td>Temporary_Number </td>
       <td><?php echo $row['temporary_number']; ?></td>
     </tr>
      <tr>
       <td>Name </td>
       <td><?php echo $row['name']; ?></td>
     </tr>
     <tr>
       <td>Phone Number </td>
       <td><?php echo $row['phoneno']; ?></td>
     </tr>
     <tr>
       <td>Guardian </td>
       <td><?php echo $row['guardian']; ?></td>
     </tr>
     <tr>
       <td>Guardian Phone No </td>
       <td><?php echo $row['guardianphoneno']; ?></td>
     </tr>
     <tr>
       <td>Aadhar </td>
       <td><?php echo $row['aadhar']; ?></td>
     </tr>
     <tr>
       <td> Chassis Number</td>
       <td><?php echo $row['chassis_no']; ?></td>
     </tr>
     <tr>
       <td>Engine Number</td>
       <td><?php echo $row['engine_no']; ?></td>
     </tr>
     <tr>
       <td>Vehicle Class </td>
       <td><?php echo $row['vehicle_class']; ?></td>
     </tr>
     <tr>
       <td>color</td>
       <td><?php echo $row['color']; ?></td>
     </tr>
     <tr>
       <td>Fuel type </td>
       <td><?php echo $row['fuel_type']; ?></td>
     </tr>
     <tr>
       <td>status </td>
       <td><?php echo $row['statuss']; ?></td>
     </tr>
     <tr>
       <td>Permanent Number </td>
       <td><?php echo $row['permanent']; ?></td>
     </tr>
</table>
    <?php
  }
  ?>
  $conn->close();



			<!--welcome-->
			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="tittle"> </h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<h4 style="color:blue ;">Declaration by Transport Department, Government of Andhra Pradesh.</h4>
								<p>The Transport Department, Government of Andhra Pradesh hereby declares that the demographic details obtained from the Citizen Applicant through Aadhaar eKYC will be used Only for facilitating the business service sought by the Citizen Applicant from Transport department and they will not be shared.</p>
								<p>The Transport Department hereby declares that the contact information viz; mobile number and email obtained from the Citizen Applicant Will be used Only for the purposes of sending alerts and notifications related to the status of the business service sought by the Citizen Applicant and notifications for violating the business service rules and conditions.</p>
								

						</div>
						<div class="col-md-6 student-grid">
							<img src="images/kmap.png" class="img-responsive" alt="Image-2">
						</div>
						<!--<div class="clearfix"></div>-->
					</div>
				</div>
			</div>
			
			<!--student-->
			<!--testimonials-->

			<!--testimonials-->
			<!--news-->

			
		</div> 
		<!--content-->

       



		<!--footer-->
			<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-8 footer-grid">
							<h4>About Us</h4>
							<p>  Organisation of the Indian government responsible for maintaining a database of drivers and a database of vehicles for Andhra Pradesh.<span>
							    It issues driving licences, organises collection of vehicle excise duty and sells personalised registrations.
                  It also is responsible to inspect vehicle's insurance and clear the pollution test.</span></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Tadepalligudem</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>1234567890</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:andhrapradesh@rto.com"> andhrapradesh@rto.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 10:00 hr to 17:00 hr</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		
			


</body>
</html>
