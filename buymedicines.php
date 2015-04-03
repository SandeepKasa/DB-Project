<?php
$con=mysqli_connect("127.0.0.1","root","sandy777","hospital");
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();
?>
<style>
table{
border:1px solid black;
margin:0px auto;
       text-align:center;
width:200px;
}
div {
	background-color: white;
position: absolute;
left: 13%;
margin-left: -100px;
width: 900px;
padding: 25px;
border: 5px solid black;
margin: 25px;
}

</style>
<html>
<h1><center><u>Continental Hospitals</u></center></h1>
<?php
// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM medicines");
$ar=array();
?>
<div style="text:align:center;">
<h2><center>Select medicines to buy</center></h2>
<?php
echo "<table border='1' class='table table-striped table-bordered table-hover' name='teble'>
<thead>
<tr>
<th >Medicine_Id</th>
<th >Price</th>
<th >Description</th>   
<th >Quantity</th>
</tr>
</thead>";
$x=0;
while($row = mysqli_fetch_array($result)) 
{
//	if(((int)$row['quantity']>=0))
//	{
	echo "<tbody data-link='row' class='rowlink'>";
	echo "<tr>";
	echo '<td align="center">' . $row['med_id'] . "</td>";
	echo '<td align="center">' . $row['price'] . "</td>";
	echo '<td align="center">' . $row['description'] . "</td>";
	echo '<td align="center">' . $row['quantity'] . "</td>";
	$ar[$x]=(int)$row['med_id'];
	$x=$x+1;
	?>
	<?php
	echo "</tr>";
	echo "</tbody>"; 
//	}
}
echo "</table>";
$len=count($ar);
?>
<br>
<center>
<form action=" " method="post">
Med_id:<input type="text" name="med_id"><br>
Quantity<input type="number" name="quantity"><br>
<br>
<input type="submit" value="add">

</form>
<form action=" buy.php" method="post">
<input type="submit">
</form>
</center>
<?php
$flag=0;
if( isset($_POST["med_id"]) && isset( $_POST["quantity"]) )
{
	for($i=0;$i<$len;$i=$i+1)
	{
		if((int)$_POST["med_id"]==$ar[$i])
		{
			$flag=1;
			break;
		}
	}
	if($flag==1)
	{
	try
	{
		$aa= mysqli_query($con,"update prescription set medicine_id='' where patient_id='$_SESSION[user_id]'");

	}
	catch(Exception $e)
	{
	}
	$query6="select quantity from medicines where med_id='$_POST[med_id]'";
	 $result6=$db->sql_query($query6);
	 $m5=$db->sql_fetch_array();
         if($m5[0]>=$_POST['quantity'])
	 {
//	print_r($_SESSION['mine']);
	array_push($_SESSION['mine'],$_POST['med_id'],$_POST['quantity']);
//$_SESSION['med_id']= $arr;
	$newone=(int)$m5[0]-(int)$_POST['quantity'];
	if($newone<0)
	{
		$newone=0;
	}
        $result7 = mysqli_query($con,"update medicines set quantity='$newone' where med_id='$_POST[med_id]'");
        //print_r ($_SESSION['mine']);
	header("Refresh:0");
	session_write_close();
	 }
	 else
	 {
		 echo "Quantity selected is exceeding..!";
	 }
	}
	else
	{
		echo "Med_Id not found in stock...Select another id";
	}
}
?>
<?php
//$_SESSION['mine']=$array;
?>
<br>
<li>
<center><a href="index.php">Back to home</a></center>
</div>
</html>
<?php
mysqli_close($con);
//session_destroy();
?>
