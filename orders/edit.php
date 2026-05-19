<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM orders WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
// $data = $conn->prepare(SELECT * FROM orders WHERE id = :id)
//     ->execute([':id' =>$id]);
$orders = $data->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ordersni tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Teacherni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $orders['id'] ?>">
        <label>Students_id (Students_id)</label>
        <input type="text" name="students_id" required value="<?= $orders['students_id'] ?>">

        <label>Note (Note)</label>
        <input type="text" name="note" required  value="<?= $orders['note'] ?>">

      
        
        <button type="submit">Saqlash</button>
    </form>
</div>


</body>
</html>