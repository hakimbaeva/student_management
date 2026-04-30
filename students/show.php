<?php
include "../config/db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);

$student = $data->fetch() 

?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Student ma'lumotlari</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #eef2f7, #dfe9f3);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: white;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 380px;
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .info {
      display: flex;
      justify-content: space-between;
      margin: 12px 0;
      padding-bottom: 8px;
      border-bottom: 1px solid #eee;
      font-size: 15px;
    }

    .label {
      font-weight: bold;
      color: #666;
    }

    .value {
      color: #222;
    }

    .back-btn {
      display: block;
      margin-top: 25px;
      text-align: center;
      background: #2196F3;
      color: white;
      padding: 10px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #1976D2;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>📘 Student ma'lumotlari</h2>

    <div class="info">
        <span class="label">Ism</span>
      <?=  $student['first_name'] ?>
    </div>

    <div class="info">
        <span class="label">Familiya</span>
      <?=  $student['last_name'] ?>
    </div>

    <div class="info">
        <span class="label">Yosh</span>
      <?=  $student['age'] ?>
    </div>

    <div class="info">
        <span class="label">Sinf</span>
      <?=  $student['class_id'] ?>
    </div>

    <div class="info">
        <span class="label">Telefon</span>
      <?=  $student['phone'] ?>
    </div>

    <div class="info">
        <span class="label">Manzil</span>
     <?=  $student['adress'] ?>
    </div>

    <a href="index.php" class="back-btn">⬅ Ortga</a>
     
  </div>

</body>
</html>
    


