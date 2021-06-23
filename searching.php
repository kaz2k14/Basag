<?php
include 'db_connection.php';


$count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction");
$ro = $count->fetch_assoc();

$query = $mysqli->query("SELECT * FROM transaction LIMIT 0,20");

if(isset($_POST['submit'])){
    $purok  = $_POST['searching'];
    $value = $_POST['purok1'];
    if($value=='1'){
      $query = $mysqli->query("SELECT * FROM transaction WHERE purok = $purok");
      $count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE purok = $purok");
      $ro = $count->fetch_assoc();
    }
    if($value=='2'){
      $query = $mysqli->query("SELECT * FROM transaction WHERE first LIKE '%$purok%'");
      $count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE first LIKE '%$purok%'");
      $ro = $count->fetch_assoc();
    }
    if($value=='3'){
      $query = $mysqli->query("SELECT * FROM transaction WHERE last LIKE '%$purok%'");
      $count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE last LIKE '%$purok%'");
      $ro = $count->fetch_assoc();
    }
    if($value=='4'){
      $query = $mysqli->query("SELECT * FROM transaction WHERE age = $purok");
      $count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE age = $purok");
      $ro = $count->fetch_assoc();
    }
    if($value=='5'){
      $query = $mysqli->query("SELECT * FROM transaction WHERE status = '$purok'");
      $count = $mysqli->query("SELECT COUNT(*) AS Numberof FROM transaction WHERE status LIKE '$purok'");
      $ro = $count->fetch_assoc();
    }
    if(!$query){
      echo "<script>window.location= 'searching.php';</script>";
    }
  
}
?>
<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
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
  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>Barangay</span>Basag</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Registration</a>
                  </li>

                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->


 

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

          <div class="section-headline services-head text-center">
            <h2>Registration/Information&Transaction</h2>
          </div>

              <a href="displaymembers.php" class="btn btn-info col-md-1 noprint" style="width: 130px;background: black" id="display">Display member</a>
              <br><br>

           <button type="button" class="btn btn-success col-md-1 noprint" data-toggle="modal" data-target="#myModal" style="width: 100px;" id="add">ADD</button><br><br>
           <button class="btn btn-primary col-md-1 noprint" style="width: 150px;margin-right: 250px" onClick="window.print()" id="print">Print this page</button>
           <form method="POST" action="searching.php">
           <select  class="form-control col-md-3 noprint" required="" name="purok1" id="purok1" style="width: 150px;">
                                    <option value="1" id="purok2">Purok</option>
                                    <option value="2">First name</option>
                                    <option value="3">Last name</option>
                                    <option value="4">Age</option>
                                    <option value="5">Status</option>
                                    <option value="6">Barangay Status</option>
                                    <option value="7" selected >search option</option>
            </select>       

            <input class="form-control form-control-lg form-control-borderless col-md-3 noprint" type="search" placeholder="Search" style="width: 300px" id="searching" name="searching" required="">
             <input type="submit" name="submit" class="btn btn-info col-md-1 noprint" style="width: 80px;">
            </form>
            <a href="searching.php" class="btn btn-danger noprint" style="width: 110px; margin-left: 90%;">Reset</a>

          <div>
       
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
                <th class="col-m-2">Action</th>
                <th class="col-m-2">Action</th>
                 <th class="col-m-4">Action</th>

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

                <form method="POST" action="update.php">
                    <input type="text" name="edit1" id="edit1" value="<?php echo $rows['id'];?>" style="display: none">
                    <th class="col-m-1"><input name="edit" type="submit" class="btn btn-success noprint" style="width: 50px;" id="edit" value="Edit"></input>
                </form>
                
                <form method="post" action="delete.php" id="form">
                 <input type="text" name="danger" id="danger" value="<?php echo $rows['id'];?>" style="display: none">
                 <th class="col-m-1"><input name="danger1" type="submit" class="btn btn-danger noprint" style="width: 70px;" id="danger1" value="Delete"></input>
                </form>
                 
                <form method="post" action="printing.php">
                 <input type="text" name="print" id="print" value="<?php echo $rows['id'];?>" style="display: none">
                    <th class="col-m-1"><input name="print1" type="submit" class="btn btn-primary noprint" style="width: 70px;" id="print1" value="Print"></input>
                </form>

              </tr>     
              <?php } ?>

             
            <?php while($search1 = $query->fetch_assoc()){?>

              
              <tr role="row" id="search_purok" style="display: none;">
                <th class="col-m-1"> <?php echo $search1['purok'];?></th>
                <th class="col-m-1"> <?php echo $search1['first'];?></th>
                <th class="col-m-1"> <?php echo $search1['middle'];?></th>
                <th class="col-m-1"> <?php echo $search1['last'];?></th>
                <th class="col-m-1"> <?php echo $search1['age'];?></th>
                <th class="col-m-1"> <?php echo $search1['status'];?></th>
                <th class="col-m-1"> <?php
                                  if($search1['bstatus']=="1"){
                                   echo "1 for Voters and Lived in the Barangay" ;
                                  }
                                  if($search1['bstatus']=="2"){
                                   echo "2 for not Voter and Lived in the Barangay" ;
                                  }
                                  if($search1['bstatus']=="3"){
                                   echo "3 for Voter and not Lived in the Barangay</option>" ;
                                  }
                                  if($search1['bstatus']=="4"){
                                   echo "4 for Out of Town" ;
                                  }
                                  ?></th>

                                  
                <form method="POST" action="update.php">
                    <input type="text" name="edit1" id="edit1" value="<?php echo $rows['id'];?>" style="display: none">
                    <th class="col-m-1"><input name="edit" type="submit" class="btn btn-success" style="width: 50px;" id="edit" value="edit"></input>

                </form>
              </tr> 

              
              <?php } ?>




            </table>

            
            <table class ="table table-bordered table-hover" style="background-color: yellow;">
              <th class="col-m-2">Total Number of Residence</th>
                <th class="col-m-2">=<?php echo $ro['Numberof'];?></th> 
                </table>

         </div>

              <!-- add Modal content-->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- add Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Barangay Information</h4>
                </div>
                    <form action="js/insert_trans.php" method="POST">
                         <div class="form-group">
                              <div class="col-sm-5">
                                <select  class="form-control" required="" name="purok" id="purok">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="select" selected>select purok</option>
                                </select>
                              </div>
                              <div class="col-sm-6">          
                              <select class="form-control" id="ps" name="ps">
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
                              <div class="col-sm-10">          
                                <input type="name" class="form-control" id="first" placeholder="Enter First name" name="first" id="first" required="" onfocus="this.value=''">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <input type="name" class="form-control" id="middle" placeholder="Enter Middle name" name="middle" id="middle" required="" onfocus="this.value=''">
                              </div>
                         </div> 
                         <br> 
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <input type="name" class="form-control" id="last" placeholder="Enter Last name" name="last" id="last" required="" onfocus="this.value=''">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <select class="form-control" id="gender" name="gender">
                                  <option value="Female">Female</option>
                                  <option value="Male">Male</option>

                                 </select>
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <input type="date" class="form-control" id="age"  name="age" id="age" required="" onfocus="this.value=''">
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                                <select class="form-control" id="status" name="status">
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Widow">Widow</option>
                                 </select>
                              </div>
                         </div>
                         <br>
                         <br>
                         <div class="form-group">
                              <div class="col-sm-10">          
                              <select class="form-control" id="bstatus" name="bstatus">
                                <option value="1">1 for Voters and Lived in the Barangay</option>
                                <option value="2">2 for not Voter and Lived in the Barangay </option>
                                <option value="3">3 for Voter and not Lived in the Barangay</option>
                                <option value="4">4 for Out of Town</option>
                              </select>
                              </div>
                         </div>
                         <br>
                         <br>
                        <div class="form-group">        
                              <div class="col-sm-10">
                                <input type="submit" class="btn btn-success" name="submit"></input>
                              </div>
                        </div>
                    </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
                </div>

      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->

      </div>
    </div>
  
 
         
         

  <!-- Start Footer bottom Area -->
  <footer>
 
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Barangay Basag</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
   // function confirmation()
   // { 
    //  var r = confirm("Are you sure you want to delete this information???");
    //  if( r == true){
      //  document.getElementById("form").submit("form");
      //alert("deleted");
     // alert(r);
     //  window.location = 'searching.php';
     // }
    //  else{
     //   window.location = 'searching.php';
        //alert("not deleted");
       //   alert(r);
   //   }
   // }


  </script>
</body>

</html>
