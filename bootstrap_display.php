<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Display data</title>
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
    //Attempt select query exection
    $sql= "SELECT * FROM demoform";
    if($result= mysqli_query($link, $sql)) {
    	if(mysqli_num_rows($result)>0){
    		echo "<table>";
    		echo "<tr>";
    		echo "<th>sno</th>";
    		echo "<th>name</th>";
    		echo "<th>father</th>";
            echo "<th>country</th>";
            echo "<th>state</th>";
            echo "<th>mobilenumber</th>";
            echo "<th>email</th>";
            echo "<th>educationalqualification</th>";
            echo "<th>action</th>";
    		echo "</tr>";
    	while($row= mysqli_fetch_array($result)){
    		echo"<tr>";
    		echo "<td>".$row['sno']."</td>";
    		echo "<td>".$row['name']."</td>";
            echo "<td>".$row['father']."</td>";
            echo "<td>".$row['country']."</td>";
            echo "<td>".$row['state']."</td>";
            echo "<td>".$row['mobilenumber']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['educationalqualification']."</td>"; 
            
            echo '<td><a>Edit</a></td>';
            echo '<td><a>Delete</a></td>';
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