<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM books WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
// $data = $conn->prepare(SELECT * FROM books WHERE id = :id)
//     ->execute([':id' =>$id]);
$books = $data->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kitonii tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Kitobni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $books['id'] ?>">
        <label>Ism (Book Name)</label>
        <input type="text" name="book_name" required value="<?= $books['book_name'] ?>">

        <label>Yozuvchi (Author)</label>
        <input type="text" name="author" required  value="<?= $books['author'] ?>">

        <label>Note  (Note)</label>
        <input type="number" name="note" required  value="<?= $books['note'] ?>">

        <label>Varaq (pages)</label>
        <input type="text" name="pages" required  value="<?= $books['pages'] ?>">

        <label>Sana</label>
        <input type="text" name="date_of_publication" required  value="<?= $books['date_of_publication'] ?>">

        <label> Qator (Row numb)</label>
        <textarea name="row_numb" required> <?= $books['row_numb'] ?></textarea>

        <label> Kitob soni (Book number)</label>
        <textarea name="book_number" required> <?= $books['book_number'] ?></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>