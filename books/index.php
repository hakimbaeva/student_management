<?php
include '../config/db.php';

$sql = "SELECT * FROM books";

$data = $conn->prepare($sql);

$data->execute();


$books = $data->fetchAll(PDO::FETCH_ASSOC);

$cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Jadval</title>
  <style>
    body{
      font-family: Arial, sans-serif;
      background:#f4f6f9;
      margin:20px;
    }

    h2{
      text-align:center;
      margin-bottom:10px;
      color:#333;
    }

    .top-bar{
      display:flex;
      justify-content:flex-end;
      margin-bottom:15px;
    }

    .add-btn{
      background:#4CAF50;
      color:white;
      border:none;
      padding:8px 14px;
      border-radius:6px;
      cursor:pointer;
      font-size:14px;
    }

    .table-container{
      overflow-x:auto;
    }

    table{
      width:100%;
      border-collapse:collapse;
      background:white;
      border-radius:10px;
      overflow:hidden;
      box-shadow:0 4px 12px rgba(0,0,0,0.08);
      min-width:900px;
    }

    th, td{
      padding:12px;
      text-align:center;
      border-bottom:1px solid #eee;
      font-size:14px;
    }

    th{
      background:#2f80ed;
      color:white;
      text-transform:uppercase;
      letter-spacing:1px;
    }

    tr:hover{
      background:#f1f7ff;
    }

    .btn{
      padding:6px 10px;
      border:none;
      border-radius:6px;
      cursor:pointer;
      font-size:12px;
      margin:2px;
    }

    .view{ background:#2196F3; color:white; }
    .edit{ background:#FFC107; color:black; }
    .delete{ background:#F44336; color:white; }
     .menu {background: #e680e7; color: #1a1717;}
  </style>
</head>
<body>

  <h2>Books jadvali</h2>

  <div class="top-bar">
    
    <a href="create.php" class="add-btn">+ Kitob qo‘shish</a>
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Note</th>
          <th>Pages</th>
          <th>date_of_publication	</th>
          <th>Row_numb</th>
           <th>Book_number</th>
          <th>Amallar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($books as $item) : ?>
        <tr>
        
          <td><?= $cnt++; ?></td>
          <td><?= $item['book_name'] ?></td>
          <td><?= $item['author'] ?></td>
          <td><?= $item['note'] ?></td>
          <td><?= $item['pages'] ?></td>
          <td><?= $item['date_of_publication'] ?></td>
          <td><?= $item['row_numb'] ?></td>
          <td><?= $item['book_number'] ?></td>
          <td>
            <a href= "show.php?id=<?= $item['id'] ?>" class="btn view">Ko‘rish</a>
            <a href="edit.php?id=<?= $item['id'] ?>" class="btn edit">Tahrirlash</a>
            <a href="delete.php?id=<?= $item['id'] ?>" class="btn delete" onclick="return confirm('O\'chirasizmi')">O‘chirish</a>
            <a href="../index.php" menu>Menu</a>
          </td>
        </tr>
              <?php endforeach  ?>
<!--         
        <tr>
          <td>2</td>
          <td>Aziza</td>
          <td>Karimova</td>
          <td>28</td>
          <td>+998931112233</td>
          <td>Ingliz tili</td>
          <td>5 yil</td>
          <td>
            <button class="btn view">Ko‘rish</button>
            <button class="btn edit">Tahrirlash</button>
            <button class="btn delete">O‘chirish</button>
          </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Javlon</td>
          <td>Qodirov</td>
          <td>30</td>
          <td>+998901998877</td>
          <td>Fizika</td>
          <td>7 yil</td>
          <td>
            <button class="btn view">Ko‘rish</button>
            <button class="btn edit">Tahrirlash</button>
            <button class="btn delete">O‘chirish</button>
          </td>
         </tr>  -->
      </tbody>
    </table> 
  </div>

</body>
</html>
