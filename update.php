<?php
// update.php
include 'db_conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile', message='$message' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>

<h2>Update User</h2>
<form action="update.php?id=<?= $row['id']; ?>" method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $row['name']; ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= $row['email']; ?>" required><br><br>

    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?= $row['mobile']; ?>" required><br><br>

    <label>Message:</label>
    <textarea name="message" required><?= $row['message']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
