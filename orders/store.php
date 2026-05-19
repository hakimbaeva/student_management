<?php
include '../config/db.php';
$students_id = $_POST['students_id'];
$note = $_POST['note'];




$sql = "INSERT INTO orders (students_id,note)
     VALUES(:students_id, :note)";

$data = $conn->prepare($sql);

$data->execute([
   ':students_id' => $students_id,
    ':note' => $note    
]);

header("Location: index.php");


?>