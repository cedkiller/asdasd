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


$sql = "SELECT * FROM record";
$result = mysqli_query($conn, $sql);
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
    </div>
    </center>
    <br><br>
    <center>
        <table class="table">
            <tr>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;">ID</th>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;">Name</th>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;">Student No.</th>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;">Course</th>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;"></th>
                <th style="background: black; color: white; height: 50px; font-family: 'Poppins', sans-serif; text-align: center;"></th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><?php echo $row['id']; ?></td>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><?php echo $row['name']; ?></td>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><?php echo $row['student_number']; ?></td>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><?php echo $row['course']; ?></td>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit">Edit</button></a></td>
                <td style="background: white; color: black; height: 30px; font-family: 'Poppins', sans-serif; text-align: center;"><a href="delete.php"><button class="del">Delete</button></a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>
</html>