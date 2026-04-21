<?php
include "../config/db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);

$teacher= $data->fetch() 

?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Teacher Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f7;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      width: 400px;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .item {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
    }

    .label {
      font-weight: bold;
      color: #555;
    }

    .value {
      color: #222;
    }

    .buttons {
      margin-top: 20px;
      display: flex;
      gap: 10px;
    }

    button {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    .back {
      background: #2196F3;
      color: white;
    }

    .edit {
      background: #FFC107;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Teacher ma'lumotlari</h2>

    <div class="item"><span class="label">ID:</span><span class="value">1</span></div>
    <div class="item"><span class="label">First Name:</span><?= $teacher['first_name'] ?><span class="value">Ali</span></div>
    <div class="item"><span class="label">Last Name:</span><?= $teacher['last_name'] ?><span class="value">Valiyev</span></div>
    <div class="item"><span class="label">Age:</span><?= $teacher['age'] ?><span class="value">25</span></div>
    <div class="item"><span class="label">Phone:</span><?= $teacher['phone'] ?><span class="value">+998901234567</span></div>
    <div class="item"><span class="label">Subject:</span><?= $teacher['subject'] ?><span class="value">Matematika</span></div>
    <div class="item"><span class="label">Experience:</span><?= $teacher['experience'] ?><span class="value">3 yil</span></div>

    <div class="buttons">
      <a href="index.php" class="back">Ortga</a>
      
    </div>
  </div>

</body>
</html>