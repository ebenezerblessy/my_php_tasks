<!DOCTYPE html>
<html>
<head>
    <title>REQUEST METHOD</title>
</head>
<body>
<?php
 $name=$_REQUEST['name'];
 $father=$_REQUEST['father'];
 $country=$_REQUEST['country'];
 $state=$_REQUEST['state'];
 $mobilenumber=$_REQUEST['mobilenumber'];
 $father=$_REQUEST['father'];
 $email=$_REQUEST['email'];
 $educationalqualification=$_REQUEST['educationalqualification'];
    /*Attempt MYSQL server connection Assuming you are running MYSQL
     server with default setting(user 'root' with no password)*/
     $link = mysqli_connect("localhost","root","","fileboot");
     //Check connection
     if($link===false){
     die("ERROR: Could not connect.".mysqli_connect_error());
 }
    //Attempt insert query execution
    $sql= "INSERT INTO demoform(name,father,country,state,mobilenumber,email,educationalqualification)VALUES('$name','$father','$country','$state','$mobilenumber','$email','$educationalqualification')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>
</body>
</html>