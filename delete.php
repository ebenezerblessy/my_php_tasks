<?php
// delete.php
include 'db_conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user record from the database
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Redirect to show page
    header('Location: show.php');
    exit();  // Ensure script execution stops after the redirect
} else {
    echo "No ID specified.";
}
?>
