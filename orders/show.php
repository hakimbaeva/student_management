<?php
include "../config/db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM orders WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);

$orders= $data->fetch() ;

//vs
$sql = "SELECT ot.from_date, ot.to_date, b.book_name,ot.id FROM order_items ot
LEFT JOIN books b
ON ot.book_id = b.id
WHERE ot.order_id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$order_items= $data->fetchAll() ;

?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Orders Profile</title>
  <style>
     .order-table{
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }

    .order-table th,
    .order-table td{
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    .order-table thead{
        background-color: #007bff;
        color: white;
    }

    .order-table tbody tr:nth-child(even){
        background-color: #f9f9f9;
    }

    .order-table tbody tr:hover{
        background-color: #eef5ff;
    }
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
      width:3500 px;
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
        .view{ background:#2196F3; color:white; }
    .edit{ background:#FFC107; color:black; }
    .delete{ background:#F44336; color:white; }
  </style>
</head>
<body>

  <div class="container">
    <h2>Orders ma'lumotlari</h2>

    <div class="items"><span class="label">id:</span><?= $orders['id'] ?></div>
    <div class="items"><span class="label">Students_id:</span><?= $orders['students_id'] ?></div>
    <div class="items"><span class="label">Note:</span><?= $orders['note'] ?></div>
    

<table class="order-table">
    <thead>
        <tr>
          <th>id</th>
            <th>Book Name</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <!-- <?php foreach($order_items as $item) : ?>
        <tr>
            <td><?= $item['book_name'] ?></td>
            <td><?= $item['from_date'] ?></td>
            <td><?= $item['to_date'] ?></td>
            <td>
         
        <a href= "show.php?id=<?= $item['id'] ?>" class="btn view">Ko‘rish</a>

            <a href="edit.php?id=<?= $item['id'] ?>" class="btn edit">Tahrirlash</a>

            <a href="delete.php?id=<?= $item['id'] ?>" class="btn delete" onclick="return confirm('O\'chirasizmi')">O‘chirish</a>
            </td>
        </tr>
      
          <?php endforeach; ?> -->
          <?php foreach ($order_items as $items): ?>
<tr>
    <td><?= $items['id'] ?></td>
    <td><?= $items['book_name'] ?></td>
    <td><?= $items['from_date'] ?></td>
    <td><?= $items['to_date'] ?></td>

    <td>
        <a href="../order_items/show.php?id=<?= $items['id'] ?> " class="view">Ko'rish</a>
        <a href="../order-items/edit.php?id=<?= $items['id'] ?>" class="btn edit">Tahrirlash</a>
        <a href="../order_items/delete.php?id=<? $items['id'] ?>" class="btn delete"
           onclick="return confirm('O\'chirasizmi')">
           O‘chirish
        </a>
    </td>
</tr>
<?php endforeach; ?>
    </tbody>
</table>

    

    <div class="buttons">

      <a href="../order_items/create.php?order_id=<?= $orders['id'] ?>" class="back">+</a>
      <a href="index.php" class="back">Ortga</a>
      
    </div>
  </div>

</body>
</html>