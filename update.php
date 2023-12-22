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
$fio = $_POST['fio'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$parents = $_POST['parents'];
$phone_parents = $_POST['phone_parents'];
$course = $_POST['course'];
$group = $_POST['group'];
$specialty = $_POST['specialty'];
$departament = $_POST['departament'];
$funding = $_POST['funding'];
$admission_year = $_POST['admission_year'];
$graduation_year = $_POST['graduation_year'];
$student_id = $_POST['student_id'];


$sql = "UPDATE student SET fio='$fio', gender='$gender', birthdate='$birthdate', address='$address', phone='$phone', parents='$parents', phone_parents='$phone_parents', course='$course', `group`='$group', specialty='$specialty', departament='$departament', funding='$funding', admission_year='$admission_year', graduation_year='$graduation_year', student_id='$student_id'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "студент успешно редактирован";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>