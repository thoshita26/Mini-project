<?php require_once "server.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>RTO ANDHRA PRADESH </title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
		<div class="header">
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
							<h1 style="color:white;">RTO Andhra Pradesh</h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
								<li><a href="click_llr.php"><span data-hover="LL Registration">LL Registration</span></a></li>
									<li><a href="click_registration.php"><span data-hover="Registration">Vehicle Registration</span></a></li>
									<li><a href="click_dl.php"><span data-hover="DL">Driving Licence</span></a></li>
                                    <li><a href="challan.php"><span data-hover="Challan">challan</span></a></li>
                                    <li><a href="compliantpage.php"><span data-hover="Complaint">Complaint</span></a></li>
								</ul>
							</nav>
						</div>
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
		<div class="content">
			<!--banner-bottom-->

			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="tittle" style="color:black ;">Compliant</h3>
					<div class="student-grids">
						<div class="col-md-6 student-grid">
							<!--<h4  style="color:black ;">Enter your Aadhar Number</h4>
								<p><form action="llr.php" method="get">
          				<br><br><br>
          				Aadhar number: <input type="text" name="aad" >
						<br><br>
						New Password: <input type="password" name="passwd">
						<br><br>
          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
          			</form>	</p>
								<p></p>


						</div>
						<div class="col-md-3 student-grid">
							<img src="images/llr1.jpg" class="img-responsive">
						</div>
						<div class="col-md-3 student-grid">
							<img src="images/llr2.jpg" class="img-responsive">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--student-->
    
			<center>
            <form  action="complaint_entry.php" method="post">
				<br><br><br>
				<p>
               <label for="aadhar">Aadhar</label>
               <input type="text" name="aadhar" id="aadhar">
            </p>
            <br><br>
            <textarea id="d" name="d" rows="10" cols="50">
            </textarea>
            <input type="submit" value="Submit">
			</form>
            
      </center>
					
					
				

                    
		</div> 
		<!--content-->
		<!--footer-->
		
			
		
			

			
		
</body>
</html>
