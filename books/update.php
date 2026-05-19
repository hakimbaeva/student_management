<?php
include '../config/db.php';
$id = $_POST['id'];
$book_name = $_POST['book_name'];
$author = $_POST['author'];
$note = $_POST['note'];
$pages = $_POST['pages'];
$row_numb = $_POST['row_numb'];
$book_number = $_POST['book_number'];


$sql = "UPDATE teachers
      SET first_name =?,
      last_name =?,
      age =?,
      phone =?,
      subject =?,
      experience =?
    WHERE id = ?" ;

     $data = $conn->prepare($sql);
    $data->execute([
        $book_name,
        $author,
        $note,
        $pages,
        $row_numb,
        $book_number,
        $id
    ]);
header("Location: index.php");
    exit();
?>