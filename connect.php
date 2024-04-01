<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// Connection
$conn = new mysqli($servername, $username, $password, $database,4307);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
    exit(1);
}

?>
<?php
// Include the connect.php file
include "connect.php";

$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$color = isset($_POST['color']) ? $_POST['color'] : '';
$license = isset($_POST['license']) ? $_POST['license'] : '';
$engine = isset($_POST['engine']) ? $_POST['engine'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$mechanic = isset($_POST['mechanic']) ? $_POST['mechanic'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';

$sql = "INSERT INTO form (fullname, phone, color, license, engine, date, mechanic, gender) VALUES ('$fullname', '$phone', '$color', '$license', '$engine', '$date', '$mechanic', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>