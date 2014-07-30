<?php
echo "udara.php"
$host=getenv(MYSQL_HOST),
$pass=getenv(MYSQL_PASSWORD),
echo "MySQL host : $host"
echo "MySQL pass : $pass"

$con=mysqli_connect("54.254.93.255","root","dekfzjtx","sugarcrm");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users");

while($row = mysqli_fetch_array($result)) {
  echo $row['Id'] . " " . $row['Name'];
  echo "<br>";
}

mysqli_close($con);
?>
