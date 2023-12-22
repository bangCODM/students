<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

if (empty($id)) {
    die("Error: Missing student id");
}

$sql = "DELETE FROM student WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "студент удален успешно";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>