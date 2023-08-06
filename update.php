<?php
$servername = "db";
$username = "admin";
$password = "65130543";
$dbname = "hobbies_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // Fetch the record using $id and pre-fill the update form
    $sql = "SELECT * FROM reading_hobbies WHERE id = $id, firstname = $firstname, lastname = $lastname, email = $email, gender = $gender, message = $message, resume_path = $uploadedFilePath";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

// ... (Update form handling) ...

$conn->close();
?>
