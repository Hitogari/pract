<?php

require "DB.php";
require "Photo.php";

$db = new Photos\DB();
$data = $db->get_all_photos();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="popup">
        <a href="#">Главная</a>
        <a id="show_add_photo" href="#">Фото</a>
        <a href="#">Посты</a>
        <a href="#">Личный кабинет</a>
    </div>
    <div class="mobile_icon">
        <img src="menu.png" alt="mobile_icon">
    </div>
</header>

<h1>Галерея</h1>

<div id="grid">
    <?php foreach ($data as $photo): ?>
        <?= (new Photos\Photo($photo["Id"], $photo["Image"], $photo["Text"]))->get_html() ?>
    <?php endforeach; ?>
</div>

<div id="add_new_photo">
    <div>
        <input id="new_photo_src" type="text" placeholder="Ссылка на изображение">
        <input id="new_photo_text" type="text" placeholder="Подпись">
        <button id="add_photo">Добавить</button>
        <button id="cancel">Отмена</button>
    </div>
</div>

<div id="popup_photo">
    <img src="" alt="">
</div>

<script src="script.js"></script>
<script src="image.js"></script>

</body>
</html>
