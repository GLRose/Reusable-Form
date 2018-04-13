<?php
$stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,message) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$firstname,$lastname,$email,$message);

if(isset($_POST['submit'])){
//setting parameters
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['mail'];
$message = $_POST['note'];

if (empty($firstname) || empty($lastname)) {
    header("refresh:3;url=index.php");
    echo "<h1>Enter a first or last name</h1>";
    exit();
}

$stmt->execute();

header("Location: index.php");
$stmt->close();
$conn->close();
}