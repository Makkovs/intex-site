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
                <h1>Додати товар</h1>
                <input id="name" placeholder="Назва товара" maxlength=30 name="name" type="text"><br>
                <textarea id="desc" placeholder="Опис для товару" maxlength=200 name="desc" type="text"></textarea><br>
                <input placeholder="Ціна товару" maxlength=15 name = "price" type="text"><br>
                <input placeholder="Url ссилка на зображення" name = "urlz" type="text"><br>
                <select name = "avail" type="text">
                <option>Є в наявності</option>
                <option>Немає в наявності</option>
                </select><br>
                <button class="btn1"
                type="submit">Додати</button>
            </p>
        </form>
    </div>
</div>
</body>
</html>
    </div>
</body>