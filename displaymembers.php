<?php
include 'db_connection.php';


$query = $mysqli->query("SELECT * FROM transaction WHERE ps = '1'");
$wew = $mysqli->query("SELECT * FROM transaction");
$count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE ps = 1");
$ro = $count->fetch_assoc();
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Barangay Information System</title>
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

  <style type="text/css">
  	@page { size: auto;  margin: 0mm; } 
@media print{
   .noprint{
       display:none;
   }

  .form-control-borderless {
    border: none;
  }

  .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: 1px solid gray;
    outline: none;
    box-shadow: none;
  }
  </style>
</head>
<body>
	<a href="searching.php" class="noprint">back</a>
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
 
					 			<select  class="form-control col-md-3 noprint" required="" name="option" id="option" style="width: 150px;" onclick="display();">
					                                    <option value="1" onclick="display();" id="4ps">4'ps</option>
					                                    <option value="2" onclick="display();" id="senior">Senior Citezen</option>
                                              <option value="Male" onclick="display();" id="gender">Male</option>
					                                    <option value="0" selected >select option</option>
					            </select>   
  
					           <button class="btn btn-primary col-md-1 noprint" style="width: 150px;margin-right: 750px" onClick="window.print()" id="print">Print this page</button>
         <div id="4p" style="display: none;">
          	<th class="col-m-3">Total = <?php echo $ro['Numberof'];?></th>
            <table class ="table table-bordered table-hover">
              <tr role="row">
                <th class="col-m-1">Purok</th>
                <th class="col-m-2">First name</th>
                <th class="col-m-2">Middle name</th>
                <th class="col-m-2">Last name</th>
                <th class="col-m-1">Gender</th>
                <th class="col-m-2">Birthdate</th>
                <th class="col-m-1">Status</th>
                <th class="col-m-2">Barangay Status</th>
                <th class="col-m-2">Age</th>
              </tr>
              <tr>
              </tr>
              <?php $today = date("Y-m-d"); 
               while($rows = $query->fetch_assoc()){?>
              <tr role="row" id="trans">
                <th class="col-m-1"> <?php echo $rows['purok']; ?></th>
                <th class="col-m-1"> <?php echo $rows['first']; ?></th>
                <th class="col-m-1"> <?php echo $rows['middle']; ?></th>
                <th class="col-m-1"> <?php echo $rows['last']; ?></th>
                <th class="col-m-1"> <?php echo $rows['gender']; ?></th>
                <th class="col-m-1"> <?php echo $rows['age']; ?></th>
                <th class="col-m-1"> <?php echo $rows['status']; ?></th>
                <th class="col-m-1"> <?php
                                  if($rows['bstatus']=="1"){
                                   echo "Voters and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="2"){
                                   echo "Voter and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="3"){
                                   echo "Voter and not Lived in the Barangay</option>" ;
                                  }
                                  if($rows['bstatus']=="4"){
                                   echo "Out of Town" ;
                                  }

                                    ?></th>
                <th class="col-m-1"> <?php $diff = $today -  $rows['age']; echo $diff;?></th>

               
         

              </tr>       

              <?php } ?>
   			 </table> 
          </div> 
          <div id="sens" style="display: none">

            <table class ="table table-bordered table-hover">
              <tr role="row">
                <th class="col-m-1">Purok</th>
                <th class="col-m-2">First name</th>
                <th class="col-m-2">Middle name</th>
                <th class="col-m-2">Last name</th>
                <th class="col-m-1">Gender</th>
                <th class="col-m-2">Birthdate</th>
                <th class="col-m-1">Status</th>
                <th class="col-m-2">Barangay Status</th>
                <th class="col-m-2">Age</th>
              </tr>
              <tr>
              </tr>
              <?php $today = date("Y-m-d"); 
               while($rows = $wew->fetch_assoc()){ ?>
               	<?php $diff = $today -  $rows['age'];
               	if($diff>=60){?>
              <tr role="row" id="trans">
                <th class="col-m-1"> <?php echo $rows['purok']; ?></th>
                <th class="col-m-1"> <?php echo $rows['first']; ?></th>
                <th class="col-m-1"> <?php echo $rows['middle']; ?></th>
                <th class="col-m-1"> <?php echo $rows['last']; ?></th>
                <th class="col-m-1"> <?php echo $rows['gender']; ?></th>
                <th class="col-m-1"> <?php echo $rows['age']; ?></th>
                <th class="col-m-1"> <?php echo $rows['status']; ?></th>
                <th class="col-m-1"> <?php
                                  if($rows['bstatus']=="1"){
                                   echo "Voters and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="2"){
                                   echo "Voter and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="3"){
                                   echo "Voter and not Lived in the Barangay</option>" ;
                                  }
                                  if($rows['bstatus']=="4"){
                                   echo "Out of Town" ;
                                  }

                                    ?></th>
                <th class="col-m-1"> <?php  echo $diff;?></th>

               
         

              </tr>       

              <?php }} ?>
   			 </table> 
          </div>



          <div id="gender" style="display: none;">
            <th class="col-m-1">Total = <?php echo $ro['Numberof'];?></th>
            <table class ="table table-bordered table-hover">
              <tr role="row">
                <th class="col-m-1">Purok</th>
                <th class="col-m-2">First name</th>
                <th class="col-m-2">Middle name</th>
                <th class="col-m-2">Last name</th>
                <th class="col-m-1">Gender</th>
                <th class="col-m-2">Birthdate</th>
                <th class="col-m-1">Status</th>
                <th class="col-m-2">Barangay Status</th>
                <th class="col-m-2">Age</th>
              </tr>
              <tr>
              </tr>
              <?php $today = date("Y-m-d"); 
               while($rows = $query->fetch_assoc()){?>
              <tr role="row" id="trans">
                <th class="col-m-1"> <?php echo $rows['purok']; ?></th>
                <th class="col-m-1"> <?php echo $rows['first']; ?></th>
                <th class="col-m-1"> <?php echo $rows['middle']; ?></th>
                <th class="col-m-1"> <?php echo $rows['last']; ?></th>
                <th class="col-m-1"> <?php echo $rows['gender']; ?></th>
                <th class="col-m-1"> <?php echo $rows['age']; ?></th>
                <th class="col-m-1"> <?php echo $rows['status']; ?></th>
                <th class="col-m-1"> <?php
                                  if($rows['bstatus']=="1"){
                                   echo "Voters and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="2"){
                                   echo "Voter and Lived in the Barangay" ;
                                  }
                                  if($rows['bstatus']=="3"){
                                   echo "Voter and not Lived in the Barangay</option>" ;
                                  }
                                  if($rows['bstatus']=="4"){
                                   echo "Out of Town" ;
                                  }

                                    ?></th>
                <th class="col-m-1"> <?php $diff = $today -  $rows['age']; echo $diff;?></th>

               
         

              </tr>       

              <?php } ?>
         </table> 
          </div> 




     	</div>
       </div>
     </div>
   </div>

  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
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
  <script type="text/javascript">
$(document).ready(function(){
    $('#option').on('change', function() {
      if (this.value == '1')
      {
        $("div#4p").show();
        $("div#sens").hide();
        $("div#gender").hide();
      }
      if (this.value == '2')
      {
        $("div#sens").show();
        $("div#4p").hide();
        $("div#gender").hide();
      }
      if (this.value == "Male")
      {
        $("div#gender").show();
        $("div#sens").hide();
        $("div#4p").hide();
      }
      if (this.value == '0')
      {
        $("div#sens").hide();
        $("div#4p").hide();
        $("div#gender").hide();
      }
    });
});
  </script>
</body>

</html>