<?php
include './password.php';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM produits WHERE id=";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Supprimé";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

$q = intval($_GET['q']);

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM produits WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {

mysqli_close($con);
?>