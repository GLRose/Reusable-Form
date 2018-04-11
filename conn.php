<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webforms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST["submit"])){

$stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,message) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$firstname,$lastname,$email,$message);

//setting parameters
$firstname = $_POST['name'];
$lastname = $_POST['lname'];
$email = $_POST['mail'];
$message = $_POST['note'];
$stmt->execute();

echo "New records created";

$stmt->close();
$conn->close();
}
?>