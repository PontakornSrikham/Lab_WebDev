<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
</head>
<body>
<form>
    <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
</form>
<div style="display:flex">
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
    if(!empty($_GET))
        $value='%'.$_GET["keyword"].'%';
    $stmt->bindParam(1,$value);
    $stmt->execute();
    while ($row = $stmt->fetch()){?>
    <div style="padding:15px; text-align:center">
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br><br>
    <?=$row ["name"]?><br>
    </div>
<?php }?>
</div>
</body>
</html>