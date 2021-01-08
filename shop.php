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
    function tovar($name, $price, $descr) {
        ?>
        <div class="tovar">
        <img src="https://img.yakaboo.ua/media/catalog/product/cache/1/image/398x565/234c7c011ba026e66d29567e1be1d1f7/g/t/gt_12_560.jpg" height = 200px>
        <div class="namet"><?php
        echo $name; ?><br><?php
        echo "Ціна: $price грн";?><br><?php
        echo $descr;
        ?></div></div><br>
    <?php
    };
    ?>
     <div class="menu">
      <div class="container">
        <h1 id = "h">INTEX</h1>
        <div class="links">
        <a id = "link1" href ="index.php">Про нас</a>
        <a id = "link2" href ="service.php">Послуги</a>
        <a id = "link3" href ="shop.php">Товари</a>
     </div>
    </div>
    </div>
    <div class="catalog">
    <?php
    for($ind = 1; ; $ind++){
        $sql = ("SELECT `name`, `price`, `description` FROM `merchandise` WHERE id = $ind");
        $result = $mysql->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            tovar($row["name"], $row["price"], $row["description"]);
        }else break;
    };
    ?>
    </div>
</body>