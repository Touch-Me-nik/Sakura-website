<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Сакура — японский ресторан и гастрономический кластер в центре Москвы.">
        <title>САКУРА. ДОМ САМУРАЯ</title>
        <link rel="stylesheet" href="style.css?v=3">
    </head>
    <body>
        <?php /** @var array $preloader */  ?>

        <div class="preloader">
            <h1>
             <?php foreach ($preloader as $letter): ?>
                <span><?= $letter ?></span>
            <?php endforeach; ?>
        </h1>
</div>
        <header>
            <a href="index.html" class="logo-link">
                <div class="logo">Сакура</div>
            </a>
            <nav>
                <a href="index.html" class="nav-logo-link">
                <div class="nav-logo">Сакура</div>
            </a>
                <ul>
                    <li><a href="#menu">МЕНЮ</a></li>
                    <li><a href="#">МЕРОПРИЯТИЯ</a></li>
                    <li><a href="#news">НОВОСТИ</a></li>
                    <li><a href="#about">О НАС</a></li>
                    <li><a href="#">КОНТАКТЫ</a></li>
                </ul>
                <div class="nav-images">
                    <img src="pictures/bar.png" alt="бар">
                    <img src="pictures/nav.sushi.png" alt="ночная подача">
                    <img src="pictures/sacura.png" alt="Задний двор ресторана">
                    <img src="pictures/ugol.png" alt="Третий зал">
                    <img src="pictures/zal.png" alt="Первый зал">
                    <img src="pictures/zal.tem.png" alt="Второй зал">
                </div>
            </nav>
            <button class="burger-btn">☰</button>
        </header>
