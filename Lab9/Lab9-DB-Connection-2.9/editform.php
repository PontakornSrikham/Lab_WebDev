<?php include "connect.php" ?>
<?php
$stmt=$pdo->prepare("SELECT * FROM member WHERE username=?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row=$stmt->fetch();
?>
<html>
<head><meta charset="utf-8">
</head>
<body>
<form action="edit-member.php" method="post">
    ชื่อผู้ใช้: <input type="text" name="username" value="<?=$row["username"]?>"><br>
    ชื่อสมาชิก: <input type="text" name="name" value="<?=$row["name"]?>"><br>
    รหัสผ่าน: <input type="password" name="password" value="<?=$row["password"]?>"><br>
    ที่อยู่:<input type="text" name="address" value="<?=$row["address"]?>"><br>
    เบอร์มือถือ: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    อีเมล์: <input type="email" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขสมาชิก">
</form>
</body>
</html>