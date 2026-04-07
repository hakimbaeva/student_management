<?php
include '../config/db.php';
//query-so'rov
$sql = "SELECT * FROM students";

//tayyorlash
$data = $conn->prepare($sql);

//ishga tushirish
$data->execute();

//ma'lumotni olish
$students = $data->fetchAll(PDO::FETCH_ASSOC);

//$data = $conn->prepare("SELECT*FROM students")->execute()->fetchAll(PDO::FETCH_ASSOC)
?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Studentlar jadvali</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      margin: 20px;
    }

    h2 {
      margin-bottom: 10px;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }

    .add-btn {
      background: #4CAF50;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 6px;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    th, td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }

    th {
      background: #f0f2f5;
    }

    tr:hover {
      background: #fafafa;
    }

    .btn {
      padding: 5px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 13px;
    }

    .view { background: #2196F3; color: white; }
    .edit { background: #FFC107; color: black; }
    .delete { background: #F44336; color: white; }
  </style>
</head>
<body>

  <h2>Studentlar ro'yxati</h2>

  <div class="top-bar">
    <div></div>
    <a href ="create.php" class="add-btn">+ Student qo'shish</button>
  </div>

  <table>
    <thead>
      <tr>
        <th>Ism</th>
        <th>Familiya</th>
        <th>Yosh</th>
        <th>Sinf</th>
        <th>Telefon</th>
        <th>Manzil</th>
        <th>Amallar</th>
      </tr>
    </thead>
    <tbody>
<!-- BU YERGA DATABESDAN MA'LUMOT KELDI -->
<?php foreach($students as $item): ?>
<tr>
        <td><?= $item['first_name'] ?></td>
        <td><?= $item['last_name'] ?></td>
        <td><?= $item['age'] ?></td>
        <td><?= $item['class_name'] ?></td>
        <td><?= $item['phone'] ?></td>
        <td><?= $item['address'] ?></td>
        <td>
          <button class="btn view">Ko'rish</button>
          <button  class="btn edit">Tahrirlash</button>
          <a href="delete.php?id=<?=$item ['id'] ;?>" class=" delete" onclick="return confirm('O\'chirasizmi')">  O'chirish</a>
        </td>
      </tr>

<?php endforeach ;?>
      
    </tbody>
  </table>

</body>
</html>
