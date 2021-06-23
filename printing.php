<?php
include 'db_connection.php';
if(isset($_POST['print1'])){
	$ids = $_POST['print'];
	$query = $mysqli->query("SELECT * FROM transaction WHERE id = $ids");
	$rows = $query->fetch_assoc();
	$mi = $rows['middle'];
	$mi = $mi[0];
	}
	if($rows['gender']=='Male'){
		$gender = 'he';
		$gender1 = 'him';
	}
	if($rows['gender']=='Female'){
		$gender = 'she';
		$gender1 = 'her';
	}
	if(date("m")==1){
		$data = 'January';
	}
	if(date("m")==2){
		$data = 'February';
	}
	if(date("m")==3){
		$data = 'March';
	}
	if(date("m")==4){
		$data = 'April';
	}
	if(date("m")==5){
		$data = 'May';
	}
	if(date("m")==6){
		$data = 'June';
	}
	if(date("m")==7){
		$data = 'July';
	}
	if(date("m")==8){
		$data = 'August';
	}
	if(date("m")==9){
		$data = 'September';
	}
	if(date("m")==10){
		$data = 'October';
	}
	if(date("m")==11){
		$data = 'November';
	}
	if(date("m")==12){
		$data = 'December';
	}

	if(date("d")==1 || date("d")==21 || date("d")==31){
		$sup = 'st';
	}
	if(date("d")==2 || date("d")==22 || date("d")==32){
		$sup = 'nd';
	}
	if(date("d")==3 || date("d")==23 || date("d")==33){
		$sup = 'rd';
	}
	else{
		$sup = 'th';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Printing Page</title>
</head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">






  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script  src="js/display.js"></script>


<style type="text/css">
	#print_clearance { display: none; }
	#print_certificate{ display: none; }
	   
	    @media print
    {
        #print_clearance { display: block; }
        #print { display:none;  }
        #print_certificate { display: block; }
    }
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
</style>
<body>
	<center><br><br><br><br><br><br><br><br><br><br>
<button class="btn btn-primary col-md-1" style="width: 200px;" onClick="printContent('print_clearance')" id="print">Print Barangay Clearance</button>
<button class="btn btn-success col-md-1" style="width: 200px;" onClick="printContent('print_certificate')" id="print">Print Barangay Certificate</button>
<a class="btn btn-warning col-md-1" style="width: 100px;"  id="print" href="searching.php" >Back</a>
	</center>


<div id="print_clearance">
	<img src="logo/" height="100" width="200" style="position: fixed;" hspace="50">
	<center>

		<h4>Republic of the Philppines<br> Province of Agusan del Norte<br>Municipality of Butuan <br> Barangay Basag</h4>
		<br>
		<br>
		<h3>OFFICE &nbsp OF  &nbspTHE  &nbspPUNONG &nbsp BARANGAY</h3>
		<br>
		<h3>B A R A N G A Y &nbsp  C L E A R A N C E</h3>
		<br>
		<br>
	</center>
	<h4>TO WHOM IT MAY CONCERN:</h4>
		<br>
	
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp This is to certify that <font style="text-transform: uppercase;font-weight: bold"><?php echo $rows['first']?> <?php echo $mi; ?>. <?php echo $rows['last']; ?> </font> of legal age, <?php echo $rows['status'];?> and a Filipino Citizen is a bonafide resident of Purok <?php echo $rows['purok']?>, Barangay Basag, Butuan City.  </h4>
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp THIS FURTHER CERTIFIES that <?php echo $gender ?> has no record of interaction of laws or any criminal/civil case pending investagiton against <?php echo $gender1 ?> as per available records on file in this Barangay as this date.</h4>
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp This CLEARANCE is hereby issued upon verbal request of the above named person for whatever legal intent it may serve.</h4>
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Issued this <?php echo "" . date("d") ."<sup>".$sup."</sup>  &nbsp" .$data.  " &nbsp" .date("Y"). ""?> at the Office of the Punong Barangay of Basag, Butuan City, Philippines.</h4>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h4 style="position:absolute; right: 0px;">ALBRTO S. FLORES <br> &nbsp &nbsp &nbsp &nbspPunong Barangay</h4>


</div>
<div id="print_certificate">
	<img src="logo/" height="100" width="200" style="position: fixed;" hspace="50">
	<center>

		<h4>Republic of the Philppines<br> Province of Agusan del Norte<br>Municipality of Butuan <br> Barangay Basag</h4>
		<br>
		<br>
		<h3>OFFICE &nbsp OF  &nbspTHE  &nbspPUNONG &nbsp BARANGAY</h3>
		<br>
		<h3>C E R T I F I C A T E &nbsp O F &nbsp I N D I G E N C Y</h3>
		<br>
		<br>
	</center>
	<h4>TO WHOM IT MAY CONCERN:</h4>
		<br>

		<h4 style="font-family:Times New Roman, Times, serif;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp This is to certify that <font style="text-transform: uppercase;font-weight: bold"><?php echo $rows['first']?> <?php echo $mi; ?>. <?php echo $rows['last']; ?> </font> of legal age,<font style="text-transform: lowercase;"><?php echo $rows['status'];?>, <?php echo $rows['gender']?>, Filipino, </font> is a bonafide resident of purok <?php echo $rows['purok']?> Barangay Basag, Butuan City and one of the indedigent in our barangay. </h4>
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp This certification is being issued upon the request of the above-named person for whatsoever legal purposes it may serve <?php echo $gender1 ?> best.</h4>
		<h4> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Issued this <?php echo "" . date("d") ."<sup>".$sup."</sup>  &nbsp" .$data.  " &nbsp" .date("Y"). ""?> at the Office of the Punong Barangay of Basag, Butuan City, Philippines.</h4>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h4 style="position:absolute; right: 0px;">ALBERTO S. FLORES <br> &nbsp &nbsp &nbsp &nbspPunong Barangay</h4>


</div>

</body>
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
  	function printContent(el){
		var restorepage = $('body').html();
		var printcontent = $('#' + el).clone();
		$('body').empty().html(printcontent);
		window.print();
		$('body').html(restorepage);
	}

  </script>
</html>