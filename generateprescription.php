<?php
session_start();
?>


<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname="hms";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$id=$_POST['id'];
$medicine=$_POST['medicine'];
$diagnosis=$_POST['diagnosis'];
$instructions=$_POST['instructions'];
$doc_name=$_POST['doc_name'];


$str="INSERT INTO prescription VALUES ('$id','$medicine','$diagnosis','$instructions','$doc_name')";

if(mysqli_query($conn,$str))
{
	echo "Records added successfully";
}else
{
	echo "ERROR:could not able to execute $sql".mysqli_error($conn);
}
//$res=mysql->query($str)or die(mysql_error());

/*$id = $_POST['id']; 
$sql="SELECT * FROM patients WHERE id='$id'";


$retval = mysqli_query( $conn,$sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = $retnal->fetch_assoc())
{
	echo "<center>"."<big><b>PRESCRIPTION : </b></big><br><br><br>"."</center>";
	echo "DOCTOR NAME : $doc_name<br>"; 
	echo "<b>Patient Details : </b><br>";
    echo "PATIENT ID : {$row['id']}  <br><br> ".
         "NAME 		 : {$row['name']} <br><br> ".
         "AGE		 : {$row['age']} <br><br> ".
         "GENDER	 : {$row['gender']} <br><br> ".
         "MOBILE	 : {$row['mobile']} <br><br> ".
        
         "--------------------------------<br>";
} 
echo "MEDICINE : $medicine <br><br>".
	 "DIAGNOSIS : $diagnosis <br><br>".	
	 "ADDITIONAL INSTRUCTIONS : $instructions <br><br>".
	     "--------------------------------<br>";	*/
ob_end_flush();
?>
<html>
<!--<input type="button" onClick="window.print();" value="Print Prescription"/><br><br>-->
<a href="dochome.html"><b>Return to HOME</b></a>
</html>
