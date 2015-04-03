<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "Successfully logged in"
		//        echo $_SESSION['user'];
		?>
		<style>
		li{ display:inline;padding:15px}
	div {
padding: 40px 10px 0px;
height: 320px;
width : 350px;
	margin-left: 3%;
	margin-top: 3%;
	margin-right: 5%;
background: none repeat scroll 0% 0% #FFF;
	    box-shadow: 0px 10px 10px 3px #D3D3D3;
	}

a:link {
	  text-decoration: none;
  }

  </style>
	  <html>
	  <h1><center><u>Continental Hospitals</u></center></h1>
	  <center>
	  <div>
	  <h1>Welcome <?php echo $_SESSION['user_id'] ?> !</h1>
	  <li>
	  <a href="updateemployee2.php">&nbsp&nbspView/Edit Profile</a>
	  <h4></h4>
	  <a href="changepassword.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspChange Password</a>
	  <h4></h4>

	  <li>
	  <a href="removeemployee2.php">Delete Account</a>
	  <h4></h4>
	  <li>
	  <a href="treatedpatients.php">View treated patients</a>
	  <h4></h4>
	  <a href="giveprescription.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGive prescription</a>
	  <h4></h4>
	  <li>
	  <a href="logout.php">Logout</a>
	  <h4></h4>
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


