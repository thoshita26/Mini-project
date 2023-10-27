<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
        $server = 'localhost';
          $user = "root";
         $password = "";
         $dbname = "rto";
        $conn = mysqli_connect($server, $user, $password, $dbname) or die("could not connect to the database");
		if(isset($_POST['submit'])){
            $name = $_FILES['file']['name'];
            //the directory to upload to
            $targetDir = "uploads/";
            //the file being upload
            $targetFile = $targetDir.basename($_FILES['file']['name']);
            //select the file type - file extension
            $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
         }
		
		$temporary_number=$_REQUEST['temporary_number'];
		$name =  $_REQUEST['name'];
        $phoneno=$_REQUEST['phoneno'];
		$guardian= $_REQUEST['guardian'];
		$guardianphoneno= $_REQUEST['guardianphoneno'];
		$aadhar= $_REQUEST['aadhar'];
		$chassis_no=$_REQUEST['chassis_no'];
		$engine_no=  $_REQUEST['engine_no'];
		$vehicle_class= $_REQUEST['vehicle_class'];
		$color=  $_REQUEST['color'];
		$fuel_type=  $_REQUEST['fuel_type'];
		$seating= $_REQUEST['seating'];
		$passw=  $_REQUEST['password'];
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $statuss="Not Allocated";
		$permanent="-";
		
		$email_check = "SELECT * FROM vr WHERE aadhar = '$aadhar'";
        $res = mysqli_query($conn, $email_check);
        if(mysqli_num_rows($res) > 0){
            $errors['email'] = "You have already applied";
          }
		else{
		$sql = "INSERT INTO vr (temporary_number,name,phoneno,guardian,guardianphoneno,aadhar,chassis_no, engine_no,vehicle_class,color,fuel_type,seating,password2,statuss,permanent)
        values('$temporary_number','$name','$phoneno','$guardian','$guardianphoneno','$aadhar','$chassis_no','$engine_no','$vehicle_class','$color','$fuel_type','$seating','$passw','$statuss','$permanent')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	}
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
