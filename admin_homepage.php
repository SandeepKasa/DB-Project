<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "Successfully logged in";

	?>
<style>
li{ display:inline;padding:15px}
/*div {
	background-color: lightgrey;
width: 500px;
padding: 25px;
border: 25px ;
margin: 25px;
}*/
div {
padding: 40px 10px 0px;
height: 450px;
width : 350px;
	        margin-left: 3%;
		        margin-top: 3%;
			        margin-right: 5%;
background: none repeat scroll 0% 0% #FFF;
	                box-shadow: 0px 10px 10px 3px #D3D3D3;
}

a:link 
{
	  text-decoration: none;
}
</style>
<html>
<title>Continental Hospitals</title>
<h1><center><u>Continental Hospitals</u></center></h1>
<center>
<div>
<h1>&nbsp&nbsp&nbsp&nbspWelcome admin!</h1>
<li>
<a href="user.php">&nbsp&nbsp&nbspUsers</a>
<h4></h4>
<a href="employee.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee</a>
<h4></h4>
<li>
<a href="patient.php">&nbspPatient</a>
<h4></h4>
<li>
<a href="wards.php">Wards</a>
<h4></h4>
<a href="medicine.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMedicine</a>
<h4></h4>
<a href="record.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRecord</a>
<h4></h4>
<a href="equipment.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEquipment</a>
<h4></h4>
<a href="prescription.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrescription</a>
<h4></h4>
<a href="logout.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLogout</a>
<h4></h4>
</div>
<center>
</html>
<?php
}
else
{
	?>
		<h2> You are not logged in </h2>
		<?php
		print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
}
?>

