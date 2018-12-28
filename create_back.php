<?php
session_start();

include 'dbconect.php';

$title			=$_POST["title"];
$contentz		=$_POST["content"];

$sql = "INSERT INTO test(title,content) VALUES ('$title','$contentz')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: Form.php');
?>
