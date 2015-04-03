<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "Successfully logged in";
//        echo $_SESSION['user'];
	?>

<html>
<style>
div {
padding: 40px 10px 0px;
height: 200px;
width : 350px;
	margin-left: 5%;
	margin-top: 3%;
	margin-right: 5%;
background: none repeat scroll 0% 0% #FFF;
	    box-shadow: 0px 4px 4px 3px #D3D3D3;
}
</style>
<script>
document.getElementById("foo").onchange = function() {
	if (this.selectedIndex!==0) {
		window.location.href = this.value;
	}        
};
</script>
<center>
<h2>Continental Hospitals</h2>
<br>
<br>
<h1> New User! </h1>
<div class="btn-group">
<h4> Select Type of User </h4>
<button class="btn" onclick="window.location.href='addpatient2.php'">Patient</button>&nbsp&nbsp&nbsp
<button class="btn" onclick="window.location.href='addemployee2.php'">Employee</button>
</li>
<br>
<br>
<br>
<li>
<a href="logout.php">Logout</a>
</li>
</div>
</center>
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


