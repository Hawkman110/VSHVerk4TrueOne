<?php
    include "connection.php";
    include "query1.php";

?>

<?php
$servername = "10.200.10.24";
$username = "1801993229";
$password = "Thehawk110";
$dbname = "1801993229_mutant";
$name = $_POST['name'];
$mutantName = $_POST['mutantName'];
$email = $_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO signup (name, mutantName, email)
VALUES (\"$name\", \"$mutantName\", \"$email\" )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<a href=\"http://tsuts.tskoli.is/2t/1801993229/vshSkilaverk4/dis%20folder%20hars%20the%20real%20git%204/index.html\">Fara til baka hérna</a>";

  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>