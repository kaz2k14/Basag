<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barangay";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit'])){
	$ids = $_POST['edit1'];
	$purok  = $_POST['purok'];
    $first = $_POST['first'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $status = $_POST['status'];
    $bstatus = $_POST['bstatus'];
    $ps = $_POST['4ps'];

	 $sql="UPDATE transaction SET purok = $purok, first = '$first', middle = '$middle', last = '$last', gender = '$gender' , age = '$age', status = '$status', bstatus = $bstatus, ps = $ps  WHERE id = $ids";

	 if (mysqli_query($conn, $sql)) {
         echo "<script>alert('data succesfully updated');window.location= 'searching.php';</script>";

    }
    else {
        echo "<script>alert('Error: Try Again!!');window.location= 'searching.php';</script>";
        
    }




}

?>