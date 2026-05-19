<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM order_items WHERE id = :id";
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
    <title>Order Itemsni tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Order itemsni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $teachers['id'] ?>">
        <label>Book id (Book id)</label>
        <input type="text" name="book_id" required value="<?= $teachers['book_id'] ?>">

        <label>Order id (Order id)</label>
        <input type="text" name="order_id" required  value="<?= $teachers['order_id'] ?>">

        <label>From date  (From date)</label>
        <input type="date" name="from_date" required  value="<?= $teachers['from_date'] ?>">

        <label>To date (To date)</label>
        <input type="date" name="to_date" required  value="<?= $teachers['to_date'] ?>">
<!-- 
        <label>Status</label>
        <input type="text" name="status" required  value="<?= $teachers['status'] ?>">

        <label>Intake date (Intake date)</label>
        <textarea name="intake_date" required> <?= $teachers['intake_date'] ?></textarea> -->

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>