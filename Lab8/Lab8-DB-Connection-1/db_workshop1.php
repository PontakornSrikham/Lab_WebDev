<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
</head>
<style>
    table{
        border-style:solid;
        border-width:1px;
        border-color:black;
    }
</style>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    echo "<table border='1'>
    <tr>
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th>
    <th>รายละเอียดสินค้า</th>
    <th>ราคา</th>
    </tr>";
    while ($row = $stmt->fetch()){?>
    <tr>
    <td><?=$row ["pid"]?></td>
    <td><?=$row ["pname"]?></td>
    <td><?=$row ["pdetail"]?></td>
    <td><?=$row["price"]?> บาท</td>
<?php }?></table>
</body>
</html>