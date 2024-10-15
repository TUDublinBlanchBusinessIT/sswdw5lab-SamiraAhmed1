<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tennisclub";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<select name='memberID'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<option value='$id'>$fn $sn</option>";
}
echo "</select>";

mysqli_close($conn); 
?>