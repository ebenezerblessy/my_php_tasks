<!DOCTYPE html>
<html>
<head>
    <title>My shop</title>
</head>
<body>
<?php
    /*Attempt MYSQL server connection Assuming you are running MYSQL
     server with default setting(user 'root' with no password)*/
     $link = mysqli_connect("localhost","root","","myshop");
     //Check connection
     if($link===false){
     die("ERROR: Could not connect.".mysqli_connect_error());
 }
    //Attempt insert query execution
    $sql= "INSERT INTO clients(id,name,email,phone,address,created_at) VALUES
    ('456','malini','malini@gmail.com','6345243890','thoothukudi,tamil nadu','2023-08-14 13:01:15'),
    ('321','hemalatha','hemalatha@gmail.com','9876578489','tenkasi,tamil nadu','2023-08-19 13:01:15'),
    ('44','swathi','swathi@gmail.com','7643256778','chennai,tamilnadu','2023-08-13 13:01:15'),
    ('53','haritha','haritha@gmail.com','7658954328','tirunelveli,tamilnadu','2023-08-17 13:01:15'),
    ('128','rubini','rubini@gmail.com','6384082345','madurai,tamil nadu','2023-08-23 13:09:24')";
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