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
		
         $extensions_arr= array("jpg","jpeg","png");
         //checking the extension of our uploaded file
         if(in_array($fileType,$extensions_arr)){
            // Insert record
            $query = " INSERT into llr (`edu`) values('$name')";
            mysqli_query($conn,$query);
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$name);
         } else echo " wrong file type ";
		
		$name =  $_REQUEST['name'];
		$guardian= $_REQUEST['guardian'];
		$guardian_phone_no= $_REQUEST['guardian_phone_no'];
		$aadhar= $_REQUEST['aadhar'];
		$phone_no=$_REQUEST['phone_no'];
		$gender=  $_REQUEST['gender'];
		$door_no=  $_REQUEST['door_no'];
		$city= $_REQUEST['city'];
		$district=  $_REQUEST['district'];
		$pincode=  $_REQUEST['pincode'];
		$dob=  $_REQUEST['dob'];
		$type= $_REQUEST['type'];
		$passw=  $_REQUEST['password'];
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $statuss="Not Allocated";
		$ll_no="-";
		
		$email_check = "SELECT * FROM ll WHERE aadhar = '$aadhar'";
        $res = mysqli_query($conn, $email_check);
        if(mysqli_num_rows($res) > 0){
            $errors['email'] = "You have already applied";
          }
		else{
		$sql = "INSERT INTO ll (name,guardian,guardian_phone_no,aadhar,phone_no, gender,door_no,city,district,pincode,dob,type,statuss,ll_no,password1)
        values('$name','$guardian','$guardian_phone_no','$aadhar','$phone_no','$gender','$door_no','$city','$district','$pincode','$dob','$type','$statuss','$ll_no','$passw')";
		
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
