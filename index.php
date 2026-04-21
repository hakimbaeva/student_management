<?php include 'config/db.php' ?>


v<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <style>
    body{
      margin:0;
      font-family: Arial, sans-serif;
      background:#f4f6f9;
    }

    .navbar{
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:12px 30px;
      background: linear-gradient(90deg,#2f80ed,#56ccf2);
      color:white;
      box-shadow:0 4px 10px rgba(0,0,0,0.1);
    }

    .logo{
      font-size:20px;
      font-weight:bold;
      letter-spacing:1px;
    }

    .menu{
      list-style:none;
      display:flex;
      gap:25px;
      margin:0;
      padding:0;
    }

    .menu li a{
      text-decoration:none;
      color:white;
      font-size:15px;
      position:relative;
      padding:5px 0;
      transition:0.3s;
    }

    .menu li a::after{
      content:"";
      position:absolute;
      left:0;
      bottom:-3px;
      width:0%;
      height:2px;
      background:#ffd54f;
      transition:0.3s;
    }

    .menu li a:hover::after{
      width:100%;
    }

    .menu li a:hover{
      color:#ffd54f;
    }

    .right{
      display:flex;
      gap:10px;
    }

    .btn{
      border:none;
      padding:6px 14px;
      border-radius:6px;
      cursor:pointer;
      font-size:14px;
    }

    .login{
      background:#4CAF50;
      color:white;
    }

    .signup{
      background:white;
      color:#2f80ed;
    }

    /* demo section */
    .content{
      padding:40px;
      text-align:center;
      color:#333;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">Edu Panel</div>

    <ul class="menu">
      <li><a href="index.php">Bosh sahifa</a></li>
      <li><a href="teachers/index.php">Teachers</a></li>
      <li><a href="students/index.php">Students</a></li>
    </ul>

    <div class="right">
      <button class="btn login">Login</button>
      <button class="btn signup">Sign Up</button>
    </div>
  </div>

  <div class="content">
    <h2>Xush kelibsiz 👋</h2>
    <p>Teachers va Students sahifalariga yuqoridagi menyu orqali o‘ting</p>
  </div>

</body>
</html>
