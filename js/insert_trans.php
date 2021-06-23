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
    $purok  = $_POST['purok'];
    $first = $_POST['first'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $status = $_POST['status'];
    $bstatus = $_POST['bstatus'];
    $ps = $_POST['ps'];


    $sql="INSERT INTO transaction(purok,first,middle,last,gender,age,status,bstatus, ps) VALUES ($purok,'$first','$middle','$last','$gender','$age','$status',$bstatus , $ps)";
    
    if (mysqli_query($conn, $sql)) {
         echo "<script>alert('data succesfully inserted');window.location= '../searching.php';</script>";

    }
    else {
        echo "<script>alert('Error: Please Try Again!');window.location= '../searching.php';</script>";
        
    }
}

?>