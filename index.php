<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <style>
    body{
      margin:0;
      font-family: Arial, sans-serif;
      background:#0f172a;
    }

    .navbar{
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:14px 40px;
      background:#020617;
      color:white;
      box-shadow:0 4px 12px rgba(0,0,0,0.6);
    }

    .logo{
      font-size:22px;
      font-weight:bold;
      color:#e2e8f0;
    }

    .menu{
      list-style:none;
      display:flex;
      gap:30px;
      margin:0;
      padding:0;
    }

    .menu li a{
      text-decoration:none;
      color:#94a3b8;
      font-size:15px;
      position:relative;
      transition:0.3s;
    }

    .menu li a::after{
      content:"";
      position:absolute;
      left:0;
      bottom:-4px;
      width:0%;
      height:2px;
      background:#22c55e;
      transition:0.3s;
    }

    .menu li a:hover{
      color:#ffffff;
    }

    .menu li a:hover::after{
      width:100%;
    }

    .right{
      display:flex;
      gap:12px;
    }

    .btn{
      border:none;
      padding:7px 16px;
      border-radius:8px;
      cursor:pointer;
      font-size:14px;
      transition:0.3s;
    }

    .login{
      background:#111827;
      color:#e5e7eb;
    }

    .login:hover{
      background:#1f2937;
    }

    .signup{
      background:#22c55e;
      color:white;
    }

    .signup:hover{
      background:#16a34a;
    }

    .content{
      padding:60px;
      text-align:center;
      color:#e2e8f0;
    }

    .content h2{
      color:#ffffff;
    }

    .content p{
      color:#94a3b8;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">🎓 Edu Panel</div>

    <ul class="menu">
      <li><a href="teachers/index.php">👨‍🏫 Teachers</a></li>
      <li><a href="students/index.php">👨‍🎓 Students</a></li>
      <li><a href="classes/index.php"> Classes</a></li>
    </ul>

    <div class="right">
      <button class="btn login">🔑 Login</button>
      <button class="btn signup">✨ Sign Up</button>
    </div>
  </div>

  <div class="content">
    <h2>👋 Xush kelibsiz</h2>
    <p>Teachers, Students va Classes sahifalariga menyu orqali o‘ting 🚀</p>
  </div>

</body>
</html>