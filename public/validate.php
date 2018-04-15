<?php
$stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,message) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$firstname,$lastname,$email,$message);

if(isset($_POST['submit'])){
//setting POST variables to use
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['mail'];
$message = $_POST['note'];

//checks for empty name fields in form
if (empty($firstname) || empty($lastname) || empty($email) || empty($message)) {
    header("refresh:3;url=index.php");
    echo "<h1>Fields Empty</h1>";
    exit();
}else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("refresh:3;url=index.php");
        echo "<h1>Fields Empty</h1>";
        exit();
    }else {
        //Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("refresh:3;url=index.php");
            echo "<h1>Fields Empty</h1>";
            exit();
        }
    }
}

$stmt->execute();

header("Location: index.php");
$stmt->close();
$conn->close();
}