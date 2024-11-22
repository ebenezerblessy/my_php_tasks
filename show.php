<?php
// show.php
include 'db_conn.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Message</th><th>Resume</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['mobile'] . "</td>
                <td>" . $row['message'] . "</td>
                <td><a href='uploads/" . $row['resume'] . "' target='_blank'>Download Resume</a></td>
                <td>
                    <a href='update.php?id=" . $row['id'] . "'>Update</a> |
                    <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No records found!";
}
?>
