<?php
    //server connection
  $link=mysqli_connect("localhost","root","","hms");

  //check connection
    if($link===false)
    {
        die("ERROR:could not connect.".mysqli_connect_error());
    }

    $username=$_POST['username'];
    $password=$_POST['password'];

    //inserting query
    $sql="INSERT INTO users (username,password) VALUES ('$username','$password')";

    if(mysqli_query($link,$sql))
    {
        echo "Records added successfully";
    }else
    {
        echo "ERROR:could not able to execute $sql".mysqli_error($link);
    }

    //close connection
    mysqli_close($link);
?>
<html>
    <br>
    <a href="login.html"><b>Click here to return to the main page</b></a>
</html>