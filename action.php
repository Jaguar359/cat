<?php
require_once 'classes/classes.php';
$cat = new Cat;

if ($_GET['r'] == 'stroke') {
    // гладим кота
    $cat->stroke();

} elseif ($_GET['r'] == 'scare'){
    // пугаем кота
    $cat->scare();
} elseif ($_GET['r'] == 'feed') {
    // кормим кота

} elseif ($_GET['r'] == 'play') {
    // играем с котом

} else {
    echo 'Непонятный метод';
    exit;
}

header("Location: index.php");