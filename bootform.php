<!DOCTYPE html>
<html>
<body>
<center><h1>FORM DATA IN DATABASE</h1>
<form action="postme.php" method="post">
  <br> name: <input type="text" name="name"></br>
  <br> father: <input type="text" name="father"></br>
  <br> country: <input type="text" name="country"></br>
  <br> state: <input type="text" name="state"></br>
  <br> mobilenumber: <input type="text" name="mobilenumber"></br>
  <br> email: <input type="text" name="email"></br>
  <br> educationalqualification: <input type="text" name="educationalqualification"></br>
  <br> <input type="submit"></br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    if (empty($name)) {
        echo "name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>