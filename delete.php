<?php
include 'db_connection.php';

if(isset($_POST['danger1'])){
	$ids = $_POST['danger'];
	$query = $mysqli->query("DELETE FROM transaction WHERE id = $ids");
	if($query){
		  echo "<script>alert('data succesfully deleted');window.location= 'searching.php';</script>";
	} 
	else{
        echo "<script>alert('Error: Try Again!!');window.location= 'searching.php';</script>";
        
    }


}
?>