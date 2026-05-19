 <?php
include "../config/db.php";

$id = $_GET['id'];
$sql = "SELECT c.class_name,t.first_name,t.last_name from classes c
  left join teachers  t 
  ON c.teachers_id = t.id
  where c.id =  ?  ";

$data = $conn->prepare($sql);
$data->execute([$id]);
$class= $data->fetch();

$sql= "SELECT * from students WHERE class_id = ?" ;

$data =$conn->prepare($sql);
$data->execute([$id]);
$students = $data->fetchAll();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Class Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e5e7e9 ;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #eaebee;
      width: 510px;
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
      background: #2159f3;
      color: white;
    }

    .edit {
      background: #FFC107;
    }
    table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  font-size: 14px;
  background: #fff;
  border-radius: 8px;
  overflow: hidden;
}

/* header */
table thead {
  background: #2159f3;
  color: white;
}

table th {
  padding: 12px;
  text-align: center;
  font-weight: bold;
}

/* body */
table td {
  padding: 10px;
  text-align: center;
  border-bottom: 1px solid #eee;
}

/* zebra effect */
table tr:nth-child(even) {
  background: #f9f9f9;
}

/* hover */
table tr:hover {
  background: #e3f2fd;
  transition: 0.3s;
}

/* responsive scroll */
table {
  display: block;
  overflow-x: auto;
}
    
  </style>
</head>
<body>

  <div class="container">
    <h2>Class ma'lumotlari</h2>
    <div class="student-table">
  <h3>Studentlar ro‘yxati</h3>

</div>

    <div class="item"><span class="label">ID:</span><span class="value">1</span></div>
    <div class="item"><span class="label"> Class Name:</span><?= $class['class_name'] ?><span class="value"></span></div>
    <div class="item"><span class="label">Teachers Id:</span><?= $class['first_name'] . " ". $class['last_name'] ?><span class="value"></span></div>
    

    <table class= "table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <!-- <th>Created At</th> -->
        <th>Phone</th>
        <th>Address</th>
        <th>Class ID</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student): ?>
        <tr>
          <td><?= $student['first_name'] ?></td>
          <td><?= $student['last_name'] ?></td>
          <td><?= $student['age'] ?></td>
          <!-- <td><?= $student['created_at'] ?></td> -->
          <td><?= $student['phone'] ?></td>
          <td><?= $student['adress'] ?></td>
          <td><?= $student['class_id'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
    <div class="buttons">
    <a href="index.php" class="back">  <- Ortga</a>
      
    </div>
  </div>

</body>
</html> 
