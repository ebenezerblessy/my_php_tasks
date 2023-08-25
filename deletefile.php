<!DOCTYPE html>
<html>
<head>
    <title>Delete data</title>
</head>
<body>
<?php
    /*Attempt MYSQL server connection Assuming you are running MYSQL
     server with default setting(user 'root' with no password)*/
     $link = mysqli_connect("localhost","root","","login");
     //Check connection
     if($link===false){
     die("ERROR: Could not connect.".mysqli_connect_error());
 }
    //Attempt delete query execution
    $sql= "DELETE FROM mydb WHERE sno=2";
if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>
</body>
</html>