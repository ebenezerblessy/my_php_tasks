<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Update data</title>
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
    //Attempt update query execution
    $sql= "UPDATE demoform SET name='pallavi',father='jhon',country='india',state='tamilnadu',mobilenumber='786543',email='pallavi@gmail.com',educationalqualification='BE' WHERE sno=6";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>
</body>
</html> 