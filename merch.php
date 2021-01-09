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
 <title>Головна</title>
 <link rel="stylesheet" href="./css/merch.css">
</head>
<body>
<div class="menu">
    <h1 id = "h">INTEX</h1>
    <div class="links">
    <a id = "link1" href ="index.php">Про нас</a>
    <a id = "link2" href ="service.php">Послуги</a>
    <a id = "link3" href ="shop.php">Товари</a>
</div>
<div class="catalog">
<?php
$id = $_GET["id"];
$sql = ("SELECT `id`, `name`, `price`, `description`, `url`, `availlability` FROM `merchandise` WHERE id = $id");
$result = $mysql->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row["name"]; $price = $row["price"]; 
    $desc = $row["description"]; $url = $row["url"];
    $avail = $row["availlability"];
}else{
    ?>
    <div class="no">
        <img src="./images/loupe.svg" alt="лупа" width = 250px class="loupe">
        <h1 class="hh">Страница не найдена...</h1>    
    </div>
    <?php
    return;
};
?>
<img src=<?=$url?> id="image" width = 380px>
<div class="name"><big><?=$name?></big></div>
<div class="desc"><?=$desc?></div>
<div class="price"><?=$price?>грн</div>
<div class="avail"><?=$avail?></div>
<div class="buttons"><button>Заказать</button></div>
</div>