

<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rto";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ab=$_SESSION['aadhar']
$sql = "SELECT statuss,ll_no FROM ll WHERE aadhar='$ab'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo  " Status: " . $row["statuss"]. " " . "<br>";
      echo  " ll_no: " . $row["ll_no"]. " " . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>

</body>

