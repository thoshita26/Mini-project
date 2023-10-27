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
		
		$challan= $_REQUEST['challan_number'];
        $dl_no=$_REQUEST['dl_no'];
        $vehicle_no=$_REQUEST['vehicle_no'];
        $fee =$_REQUEST['fee'];
        $offenses=$_REQUEST['offenses'];
        $pay=$_REQUEST['pay'];
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		
		
		$sql = "INSERT INTO challan (challan_number,dl_no,vehicle_no,fee,offenses,pay)
        values('$challan','$dl_no','$vehicle_no','$fee','$offenses','$pay')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
