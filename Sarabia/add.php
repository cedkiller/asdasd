<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simple";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['enter']))
{
  $name = $_POST['name'];
  $studNo = $_POST['studNo'];
  $course = $_POST['course'];

  $sql = "INSERT INTO record (name, student_number, course) VALUES ('$name', '$studNo', '$course')";

  if (mysqli_query($conn, $sql))
  {
    header("Location:index.php");
  }
}

if (isset($_POST['clear']))
{
  header("Location:index.php");
}
?>