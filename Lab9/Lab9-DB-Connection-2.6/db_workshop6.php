<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
    function confirmDelete(username){
        var ans = confirm("ต้องการลบรายชื่อสมาชิก"+username);
        if(ans==true)
            document.location="delete.php?username="+username;
    }
</script>
</head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()){
?>
    ชื่อสมาชิก: <?=$row ["name"]?><br>
    ที่อยู่: <?=$row ["address"]?><br>
    อีเมล์: <?=$row ["email"]?><br>
    โทรศัพท์: <?=$row["mobile"]?><br>
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br><br>
<?php 
    echo"<a href='#' onclick=confirmDelete('".$row["username"]."')>ลบ</a><hr>";
}?>
</body>
</html>