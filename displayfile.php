<!DOCTYPE html>
<html>
<head>
    <title>Display data</title>
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
    //Attempt select query exection
    $sql= "SELECT * FROM mydb";
    if($result= mysqli_query($link, $sql)) {
    	if(mysqli_num_rows($result)>0){
    		echo "<table>";
    		echo "<tr>";
    		echo "<th>sno</th>";
    		echo "<th>username</th>";
    		echo "<th>password</th>";
    		echo "</tr>";
    	while($row= mysqli_fetch_array($result)){
    		echo"<tr>";
    		echo "<td>".$row['sno']."</td>";
    		echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
    		echo "</tr>";	
    	}	
    	echo "</table>";
    	//free result set
    	mysqli_free_result($result);
        } else{
    	echo "No records matching your query were found.";
        } 
    } else{
    	echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>