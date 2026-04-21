<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Teacher Form</title>
  <style>
    body{
      font-family: Arial, sans-serif;
      background:#f4f6f9;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
      margin:0;
    }

    .form-container{
      background:white;
      padding:25px;
      border-radius:12px;
      box-shadow:0 6px 18px rgba(0,0,0,0.1);
      width:420px;
    }

    h2{
      text-align:center;
      margin-bottom:15px;
      color:#333;
    }

    .grid{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:10px;
    }

    input{
      padding:10px;
      border:1px solid #ddd;
      border-radius:6px;
      outline:none;
    }

    input:focus{
      border-color:#2f80ed;
    }

    .full{
      grid-column:1 / -1;
    }

    .buttons{
      display:flex;
      gap:10px;
      margin-top:15px;
    }

    button{
      flex:1;
      padding:10px;
      border:none;
      border-radius:6px;
      cursor:pointer;
      font-size:14px;
    }

    .save{
      background:#2f80ed;
      color:white;
    }

    .reset{
      background:#f44336;
      color:white;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Teacher Form</h2>

    <form action="store.php" method="POST">
      <div class="grid">
        <input type="text" name="id" placeholder="ID">
        <input type="text"name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="number" name="age" placeholder="Age">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text"name="subject" placeholder="Subject">
        <input type="number" name="experiense" class="full" placeholder="Experiense">
      </div>

      <div class="buttons">
        <button type="submit" class="save">Saqlash</button>
        <button type="reset" class="reset">Tozalash</button>
      </div>
    </form>
  </div>

</body>
</html>
