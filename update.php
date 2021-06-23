<?php
include 'db_connection.php';
if(isset($_POST['edit'])){
	$ids = $_POST['edit1'];
	$query = $mysqli->query("SELECT * FROM transaction WHERE id = $ids");
	$rows = $query->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script  src="js/display.js"></script>
</head>
<body>

            
              <!-- edit Modal content-->
              <div class="modal-content">
                <div class="modal-header">
             
                  <center><h3 class="modal-title">Barangay Information</h3></center>
                </div>
                    <form method="POST" action="update_trans.php" >
                         <div class="form-group">
                              <div class="col-sm-5";>
                                <select  class="form-control" required="" name="purok" id="purok" style="padding: 5px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5" selected>5</option>
                                    <option value="6" selected>6</option>
                                    <option value="7" selected>7</option>
                                    <option value="<?php echo $rows['purok'];?>" selected><?php echo $rows['purok']?></option>
                                </select>
                              </div>
                              <div class="col-sm-5">          
                              <select class="form-control" id="4ps" name="4ps">
                                <option value="1">Member of 4'ps</option>
                                <option value="2">Not Member of 4'ps</option>
                                <option value="2" selected>Optional: select if member of 4ps</option>
                              </select>
                              </div>
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10" >          
                                <input type="name" class="form-control" id="first" placeholder="Enter First name" name="first" id="first" required="" onfocus="this.value=''" value="<?php echo $rows['first']?>">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <input type="name" class="form-control" id="middle" placeholder="Enter Middle name" name="middle" id="middle" required="" onfocus="this.value=''" value="<?php echo $rows['middle']?>">
                              </div>
                         </div> 
                         <br> 
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <input type="name" class="form-control" id="last" placeholder="Enter Last name" name="last" id="last" required="" onfocus="this.value=''" value="<?php echo $rows['last']?>">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <select class="form-control" id="gender" name="gender" >
                                 <?php
                                 if($rows['gender']=="Female"){
                                  echo "<option value='Female'>Female</option>";
                                  echo "<option selected value='Female'>Married</option>";
                              	 }
                              	 if($rows['gender']=="Male"){
                                  echo "<option  selected value='Male'>Male</option>";
                                  echo "<option  value='Female'>Female</option>";
                              	 }
                                 ?>
                                 </select>
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-3">          
                                <input type="date" class="form-control" id="last" placeholder="Age" name="age" id="age" required="" onfocus="this.value=''" value="<?php echo $rows['age']?>">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <select class="form-control" id="status" name="status" >
                                 <?php
                                 if($rows['status']=="Married"){
                                  echo "<option value='Single'>Single</option>";
                                  echo "<option selected value='Married'>Married</option>";
                                  echo "<option value='Widow'>Widow</option>";
                              	 }
                              	 if($rows['status']=="Single"){
                                  echo "<option  selected value='Single'>Single</option>";
                                  echo "<option  value='Married'>Married</option>";
                                  echo "<option value='Widow'>Widow</option>";
                              	 }
                              	 if($rows['status']=="Widow"){
                                  echo "<option value='Single'>Single</option>";
                                  echo "<option  value='Married'>Married</option>";
                                  echo "<option selected value='Widow'>Widow</option>";
                              	 }
                                 ?>
                                 </select>
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                              <select class="form-control" id="bstatus" name="bstatus">
                              <?php
                              if($rows['bstatus']=="1"){
	                               echo "<option selected value='1'>1 for Voters and Lived in the Barangay</option>";
	                               echo "<option value='2'>2 for not Voter and Lived in the Barangay </option>";
	                               echo "<option value='3'>3 for Voter and not Lived in the Barangay</option>";
	                               echo "<option value='4'>4 for Out of Town</option>";
                              }
                              if($rows['bstatus']=="2"){
	                               echo "<option value='1'>1 for Voters and Lived in the Barangay</option>";
	                               echo "<option selected value='2'>2 for not Voter and Lived in the Barangay </option>";
	                               echo "<option value='3'>3 for Voter and not Lived in the Barangay</option>";
	                               echo "<option value='4'>4 for Out of Town</option>";
                              }
                              if($rows['bstatus']=="3"){
	                               echo "<option value='1'>1 for Voters and Lived in the Barangay</option>";
	                               echo "<option value='2'>2 for not Voter and Lived in the Barangay </option>";
	                               echo "<option selected value='3'>3 for Voter and not Lived in the Barangay</option>";
	                               echo "<option value='4'>4 for Out of Town</option>";
           					  }
                              if($rows['bstatus']=="4"){
	                               echo "<option value='1'>1 for Voters and Lived in the Barangay</option>";
	                               echo "<option value='2'>2 for not Voter and Lived in the Barangay </option>";
	                               echo "<option value='3'>3 for Voter and not Lived in the Barangay</option>";
	                               echo "<option selected value='4'>4 for Out of Town</option>";
                              }
                              ?>
                              </select>
                              </div>
                         </div>

                         <br>
                         <br>
                        <div class="form-group">        
                              <div class="col-sm-10">
                              	 <input type="text" name="edit1" id="edit1" value="<?php echo $rows['id'];?>" style="display: none">
                                <input type="submit" class="btn btn-success" name="submit"></input>
                              </div>
                        </div>
                    </form>
                <div class="modal-footer">
                 	 <a href="searching.php" class="btn btn-default" data-dismiss="modal">Close</a>
                </div>
              </div>
              
            </div>

</body>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</html>