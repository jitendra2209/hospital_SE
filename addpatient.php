<?php

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$occupation=$_POST['occupation'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$reason=$_POST['reason'];

$conn=mysqli_connect("localhost","root","","hms") or die(mysql_error());

$sql="INSERT INTO patients (id,name,age,gender,occupation,mobile,address,reason) VALUES ('$id','$name','$age','$gender','$occupation','$mobile','$address','$reason')";

if(mysqli_query($conn,$sql))
    {
        echo "Records added successfully";
    }else
    {
        echo "ERROR:could not able to execute $sql".mysqli_error($conn);
    }

    //close connection
    mysqli_close($conn);
?>
<html>
    <br>
    <a href="home.html"><b>Click here to return to the main page</b></a>
</html>