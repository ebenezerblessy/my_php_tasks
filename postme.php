<!DOCTYPE html>
<html>
<head>
    <title>POST METHOD</title>
</head>
<body>
<?php
 $name=$_POST['name'];
 $father=$_POST['father'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $mobilenumber=$_POST['mobilenumber'];
 $email=$_POST['email'];
 $educatinalqualification=$_POST['educationalqualification'];
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