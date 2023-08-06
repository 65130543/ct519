<?php
$servername = "db";
$username = "admin";
$password = "65130543";
$dbname = "hobbies_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $message = $_POST["message"];

    // Upload File
    $uploadDir = 'uploads/';
    $uploadedFileName = $_FILES['upload']['name'];
    $uploadedFileTemp = $_FILES['upload']['tmp_name'];
    $uploadedFilePath = $uploadDir . $uploadedFileName;

    if (move_uploaded_file($uploadedFileTemp, $uploadedFilePath)) {
        $sql = "INSERT INTO reading_hobbies (firstname, lastname, email, gender, message, resume_path) 
                VALUES ('$firstname', '$lastname', '$email', '$gender', '$message', '$uploadedFilePath')";
        if ($conn->query($sql) === TRUE) {
            echo "Application submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "File upload failed.";
    }
}

$conn->close();
?>



