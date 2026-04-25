<?php
include '../config/db.php';
$class_name = $_POST['class_name'];
$teachers_id = $_POST['teachers_id'];



$sql = "INSERT INTO classes (class_name,teachers_id)
     VALUES(?, ? )";

$data = $conn->prepare($sql);

$data->execute([
     $class_name,
     $teachers_id
    
]);

header("Location: index.php");


?>