<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM students WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
// $data = $conn->prepare(SELECT * FROM students WHERE id = :id)
//     ->execute([':id' =>$id]);
$students = $data->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentni tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Studentni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $students['id'] ?>">
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" required value="<?= $students['first_name'] ?>">

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" required  value="<?= $students['last_name'] ?>">

        <label>Yosh (Age)</label>
        <input type="number" name="age" required  value="<?= $students['age'] ?>">

        <label>Sinf (Class Name)</label>
        <input type="text" name="class_id" required  value="<?= $students['class_id'] ?>">

        <label>Telefon</label>
        <input type="text" name="phone" required  value="<?= $students['phone'] ?>">

        <label>Manzil (Address)</label>
        <textarea name="address" required> <?= $students['adress'] ?></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>