<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Panel INTEX</title>
 <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="info">
        <div class="add">
        <form action="add.php" method="post">
            <p>
                <h1>Добавити товар</h1>
                <input id="name" placeholder="Назва товара" maxlength=30 name="name" type="text"><br>
                <textarea id="desc" placeholder="Опис для товару" maxlength=200 name="desc" type="text"></textarea><br>
                <input placeholder="Ціна товару" maxlength=15 name = "price" type="text"><br>
                <input placeholder="Чи є у наявності" maxlength=30 name = "avail" type="text"><br>
                <button class="btn1"
                type="submit">Готово</button>
            </p>
        </form>
    </div>
</div>
</body>
</html>
    </div>
</body>