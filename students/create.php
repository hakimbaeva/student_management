<?php
include '../config/db.php';
$sql = "SELECT * FROM classes";

///$classess = $conn->prepare($sql);
//$classes->execute();
//$classes_list = $teachers->fetchAll(PDO::FETCH_ASSOC);
$class = $conn->prepare($sql);
$class->execute();
$classes_list = $class->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student qo'shish</title>
   <link rel = "stylesheet" href = "../assets/style.css">
</head>
<body>

<div class="container">
    <h2>Student qo'shish</h2>

    
      
    <form action="store.php" method="POST">
        <label>Ism (First Name)</label>
        <input type="text" name="first_name" required>

        <label>Familiya (Last Name)</label>
        <input type="text" name="last_name" required>

        <label>Yosh (Age)</label>
        <input type="number" name="age" required>

       
        <label>Telefon</label>
        <input type="text" name="phone" required>

        <label>Manzil (Address)</label>
        <textarea name="address" required></textarea>

          <!-- <label>Sinf (Class id)</label>
        <input type="text" name="class_id" required>  -->

     <label>class name</label>   
        <select name="class_id" id="">
          <?php  foreach($classes_list as $clases)  : ?>
        <option value="<?= $clases['id'] ?>"><?= $clases['class_id'] ?> </option>
        <?php endforeach ?> 


        <button type="submit">Saqlash</button>  
    </form>
</div>

</body>
</html>