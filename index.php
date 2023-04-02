<?php
require_once 'classes/classes.php';
$cat = new Cat;
?>
<html>
<head>
    <title>Кот</title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<body>
<div class="container">
    <div class="panel">
        <div>
            <button class="action-btn">Погладить кота</button><br>
            <button class="action-btn">Покормить кота</button><br>
            <button class="action-btn">Поиграть с котом</button><br>
        </div>
        <div>
            <img src="https://damion.club/uploads/posts/2022-09/1663110097_26-damion-club-p-kot-risunok-raskraska-risunki-31.jpg"
                 width="100%">
        </div>
        <div>
            <?php
            echo 'Состояние кота: ' . $cat->getStatus();
            echo '<br>';
            echo 'Настроение кота: ' . $cat->getMood();
            ?>
        </div>
    </div>
</div>
</body>
</html>
