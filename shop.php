<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = new mysqli('localhost', 'root', 'root', 'shop');
if ($mysql->connect_error) {
    die('Ошибка в подключении (' . $mysql->connect_errno . ') ' . $mysql->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Магазин</title>
 <link rel="stylesheet" href="./css/shop.css">
</head>
<body>
    <?php
    function tovar($id, $name, $price, $descr, $urlz) {
        ?>
        <div class="tovar">
        <a href="merch.php?id=<?=$id;?>" id="ta">
        <?php
        echo "<img src='$urlz' width = 200px>"?>       
        <div class="namet"><?php
        echo $name; ?><br></div><div class="desct"><?php
        echo $descr; ?><br><div class="pricet"><?php
        echo "Ціна: $price грн";?><br></div><?php
        ?></div><br></div></a>
    <?php
    };
    ?>
     <div class="menu">
      <div class="container">
        <h1 id = "h">INTEX</h1>
        <div class="links"><a id = "link1" href ="index.php">Про нас</a></div>
        <div class="links"><a id = "link2" href ="service.php">Послуги</a></div>
        <div class="links"><a id = "link3" href ="shop.php">Товари</a></div>
    </div>
    </div>
    <div class="catalog">
    <?php
    for($ind = 1; ; $ind++){
        $sql = ("SELECT `id`, `name`, `price`, `description`, `url` FROM `merchandise` WHERE id = $ind");
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            tovar($row["id"], $row["name"], $row["price"], $row["description"], $row["url"]);
        }else break;
    };
    ?>
    </div>
</body>