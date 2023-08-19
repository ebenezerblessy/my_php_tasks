<!DOCTYPE html>
<?php
echo "<center> <h1>Global variable</h1> </center> <br>";
$x=75;
$y=25;
function multiplication()
{
$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
mulitiplication();
echo $z;

?>
</body>
</html>
 