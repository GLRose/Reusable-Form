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

if(isset($_POST["fname"])){

$stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,message) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$firstname,$lastname,$email,$message);

//setting parameters
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['mail'];
$message = $_POST['note'];
$stmt->execute();



echo "<p>New records created</p>";
// header('Location: redirect.php');

$stmt->close();
$conn->close();
}
?>