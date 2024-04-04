<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
</head>
<body>
<form action="insert-user.php" method="post">
    ชื่อผู้ใช้: <input type="text" name="username"><br>
    ชื่อสมาชิก: <input type="text" name="name"><br>
    รหัสผ่าน: <input type="password" name="password"><br>
    ที่อยู่:<input type="text" name="address"><br>
    เบอร์มือถือ: <input type="text" name="mobile"><br>
    อีเมล์: <input type="email" name="email"><br>
    <input type="submit" value="เพิ่มสมาชิก">
</form>
</body>
</html>