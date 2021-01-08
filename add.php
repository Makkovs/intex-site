<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysql = new mysqli('localhost', 'root', 'root', 'shop');
if ($mysql->connect_error) {
    die('Ошибка в подключении (' . $mysql->connect_errno . ') ' . $mysql->connect_error);
}
$name = $_POST["name"];
$desc = $_POST["desc"];
$price = $_POST["price"];
$avail = $_POST["avail"];
$urlz = $_POST["urlz"];
$errors = array();
$mysql->query("INSERT INTO `merchandise` (`name`, `description`, `price`, `availlability`, `url`) VALUES ('$name', '$desc', '$price', '$avail', '$urlz')");
$mysql->close();
include("admin.php");
?>