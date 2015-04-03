<?php
//session_start();
include_once("dblayer.php");
include_once("functions.php");
$db=new sql_db();

extract($_POST);
extract($_GET);
$join = $_POST['Jday2'].'-'.$_POST['Jday1'].'-'.$_POST['Jday'];
$leav = $_POST['Lday2'].'-'.$_POST['Lday1'].'-'.$_POST['Lday'];
$phone= $_POST['Mphone'].'_'.$_POST['Mphone2']; 
$query="update patient set patient_id = '$_POST[pat]',age = '$_POST[age]',phone = '$phone',name='$_POST[name]',sex='$_POST[gender]',address='$_POST[add]',date_admitted='$join',treatment_period='$leav',info='$_POST[inf]' where patient_id='$_POST[pat]'";
$result=$db->sql_query($query);
echo "<h1> Successfully Updated</h1>";
print "<meta http-equiv=\"REFRESH\" content=\"2;url=index.php\">";
?>
