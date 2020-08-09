<?php
require_once 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
	<h2> Robot controller</h2>
<form action="" method="post">
	<button type="submit" name="R" class="button">Right</button>
	<button type="submit" name="L" class="button">Left</button>
	<button type="submit" name="F" class="button">Forward</button>
	<button type="submit" name="B" class="button">Backward</button>
	<button type="submit"  class="button">Stop</button>
</form>
</body>
</html>

<?php
$result = '';
if (isset($_POST["R"])) {
  // code...
  $result = 'R';
  $sql = "INSERT INTO 'button' ('Left', 'Right', 'Backwards', 'Forward', 'Stop') VALUES ('', '$result', '', '','')";
  if (mysqli_query($mysqli, $sql)) {
    // code...
    echo "Records inserted successfully.";
  } else {
    // code...
    echo "ERROR: Could not able to execute $sql." .mysqli_error($mysqli);
  }
  $mysqli_close($mysqli);
}
 ?>
