<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
    /*Attempt MYSQL server connection Assuming you are running MYSQL
     server with default setting(user 'root' with no password)*/
     $link = mysqli_connect("localhost","root","","login");
     //Check connection
     if($link===false){
     die("ERROR: Could not connect.".mysqli_connect_error());
 }
    //Attempt insert query execution
    $sql= "INSERT INTO mydb(username,password)VALUES('$username','$password')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>