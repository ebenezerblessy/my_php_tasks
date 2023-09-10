<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Insert</title>
</head>
<body>
<?php
    /*Attempt MYSQL server connection Assuming you are running MYSQL
     server with default setting(user 'root' with no password)*/
     $link = mysqli_connect("localhost","root","","fileboot");
     //Check connection
     if($link===false){
     die("ERROR: Could not connect.".mysqli_connect_error());
}
    //Attempt insert query execution
    $sql = "INSERT INTO demoform(name,father,country,state,mobilenumber,email,educationalqualification) VALUES
    ('rasmika','ashwin','india','tamilnadu','786543','ras@gmail.com','BE')";
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