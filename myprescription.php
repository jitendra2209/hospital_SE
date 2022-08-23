<!--<html>
  <head>
    <style>
      body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background :linear-gradient(120deg,#b52020,#fea305); 
    height: 100vh;
    overflow: hidden;
    }
    </style>
  </head>
</html>-->

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
$sql = 'SELECT * from prescription';

//mysqli_select_db('hms');
$retval = mysqli_query( $conn,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row =$retval->fetch_assoc())
{
    echo 
       " <center>"."<h2>".
       
         "PATIENT ID  : {$row['id']}  <br> ".
         "MEDICINE   : {$row['medicine']} <br> ".
         "DIAGNOSIS	      : {$row['diagnosis']} <br> ".
         "INSTRUCTIONS   : {$row['instructions']} <br> ".
         "DOCTOR NAME  : {$row['doc_name']} <br> ".
       
         "--------------------------------<br>".
         "</h2>"."</center>";
} 
//$retnal->free();
ob_end_flush();
?>
