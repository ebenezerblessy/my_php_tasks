<!DOCTYPE html>
<html>
<body>
<center><h1>FORM DATA IN DATABASE</h1>
<form action="sign.php" method="post">
  <br> username: <input type="text" name="username"></br>
  <br> password: <input type="text" name="password"></br>
  <br> <input type="submit"></br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['username'];
    if (empty($username)) {
        echo "username is empty";
    } else {
        echo $username;
    }
}
?>

</body>
</html>