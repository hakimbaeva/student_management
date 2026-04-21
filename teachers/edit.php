<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM teachers WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
// $data = $conn->prepare(SELECT * FROM teachers WHERE id = :id)
//     ->execute([':id' =>$id]);
$teachers = $data->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teacherni tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Teacherni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $teachers['id'] ?>">
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" required value="<?= $teachers['first_name'] ?>">

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" required  value="<?= $teachers['last_name'] ?>">

        <label>Yosh (Age)</label>
        <input type="number" name="age" required  value="<?= $teachers['age'] ?>">

        <label>Sinf (Class Name)</label>
        <input type="text" name="phone" required  value="<?= $teachers['phone'] ?>">

        <label>Telefon</label>
        <input type="text" name="subject" required  value="<?= $teachers['subject'] ?>">

        <label>Manzil (Address)</label>
        <textarea name="experience" required> <?= $teachers['experience'] ?></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>