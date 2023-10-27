
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
                                    <li><a href="click_dl.php"><span data-hover="DL renew">Driving Licence Renew</span></a></li>
                                    <li><a href="complaint.php"><span data-hover="Complaint">Complaint</span></a></li>
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
					<h3 class="tittle" style="color:black ;">Learner's License Registration</h3>
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
         
         <form action="insert.php" method="post">
             
             <p>
               <label for="name">Name:</label>
               <input type="text" name="name" id="name">
            </p>
 
             
            <p>
               <label for="guardian">Guardian:</label>
               <input type="text" name="guardian" id="guardian">
            </p>
			<p>
               <label for="guardian_phone_no">Guardian Phone Number</label>
               <input type="text" name="guardian_phone_no" id="guardian_phone_no">
            </p>
			<p>
               <label for="aadhar">Aadhar</label>
               <input type="text" name="aadhar" id="aadhar">
            </p>
            <p>
               <label for="phone_no">Phone Number</label>
               <input type="text" name="phone_no" id="phone_no">
            </p>

			
             
            <p>
               <label for="gender">Gender:</label>
               <input type="text" name="gender" id="gender">
            </p>
 
             
            <p>
               <label for="door_no">door_no:</label>
               <input type="text" name="door_no" id="door_no">
            </p>
			<p>
               <label for="city">city:</label>
               <input type="text" name="city" id="city">
            </p>
			<p>
               <label for="district">district:</label>
               <input type="text" name="district" id="district">
            </p>
			<p>
               <label for="pincode">pincode:</label>
               <input type="text" name="pincode" id="pincode">
            </p>
			<p>
               <label for="dob">dob:</label>
               <input type="date" name="dob" id="dob">
            </p>
			<p>
               <label for="type">type:</label>
               <input type="text" name="type" id="type">
            </p>
            <p>
                <label>Confirm with password</label>
                <input type="password" name="password">
		    </p>
            <input type="submit" value="Submit">
			
         </form>
      </center>
					
					
				

                    
		</div> 
		<!--content-->
		<!--footer-->
		
			
		
			

			
		
</body>
</html>
