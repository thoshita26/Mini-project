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
        $phone_no=$_REQUEST['phone_no'];
		$guardian= $_REQUEST['guardian'];
		$aadhar= $_REQUEST['aadhar'];
		$address=  $_REQUEST['address'];
		$dob=  $_REQUEST['dob'];
		$ll_no= $_REQUEST['ll_no'];
		$passw=  $_REQUEST['password'];
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		$statuss="not allocated";
        $dl_no="-";
		$email_check = "SELECT * FROM dl WHERE aadhar = '$aadhar'";
        $res = mysqli_query($conn, $email_check);
        if(mysqli_num_rows($res) > 0){
            $errors['email'] = "You have already applied";
          }
		else{
		$sql = "INSERT INTO dl (name,phone_no,guardian,aadhar,address,dob,ll_no,password3,statuss,dl_no)
        values('$name','$phone_no','$guardian','$aadhar','$address','$dob','$ll_no','$passw','$statuss','$dl_no')";
		
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
