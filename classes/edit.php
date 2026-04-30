<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT *FROM classes WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
// $data = $conn->prepare(SELECT * FROM classes WHERE id = :id)
//     ->execute([':id' =>$id]);
$classes = $data->fetch(PDO::FETCH_ASSOC);



$sql = "SELECT * FROM teachers";

$teachers = $conn->prepare($sql);
$teachers->execute();
$teachers_list = $teachers->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classni tahrirlash</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Classni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $classes['id'] ?>">
        <label>Class Name (Class Name)</label>
        <input type="text" name="class_name" required value="<?= $classes['class_name'] ?>">

        <label>Teacher id (Teacher id)</label>
         <!-- <input type="text" name="teachers_id" required  value="<?= $classes['teachers_id'] ?>"> -->

           <select name="teachers_id" id="">
          <?php  foreach($teachers_list as $teachers)  : ?>
        <option value="<?= $teachers['id'] ?>"> <?= ($classes['teachers_id'] == $teachers['id']) ? "selected" : ""  ?> <?= $teachers['first_name'] ?> <?= $teachers['last_name'] ?> </option>
        <?php endforeach ?>

        </select>
       

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>