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

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    if (isset($_POST['enter']))
    {
        $name = $_POST['name'];
        $studNo = $_POST['studNo'];
        $course = $_POST['course'];

        $sql = "UPDATE db_sarabia SET name = '$name', student_number = '$studNo', course = '$course' WHERE id = '$id'";

        if (mysqli_query($conn, $sql))
        {
            header("Location: index.php");
            exit();
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <br><br>
    <h1 style="text-align: center; font-family: 'Poppins', sans-serif; font-size: 25px;">Simple Crud</h1>
    <br><br>
    <center>
        <div class="div">
            <center>
                <form action="add.php" method="POST">
                    <br><br><br><br><br><br>
                    <label for="" class="label">Name <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter your name" name="name" class="input" required><br><br><br>
                    <label for="" class="label2">Student Number <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter your student number" name="studNo" class="input2" required><br><br><br>
                    <label for="" class="label3">Course <span style="color: red;">*</span></label>
                    <select name="course" id="" class="input3">
                        <option value="CCS">CCS</option>
                        <option value="CBAE">CBAE</option>
                        <option value="COE">COE</option>
                        <option value="COA">COA</option>
                    </select><br><br>
                    <input type="submit" value="Enter" name="enter" class="enter">
                    <input type="submit" value="Clear" name="clear" class="clear">
                </form>
            </center>
</body>
</html>