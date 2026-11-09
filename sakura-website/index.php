/** подкл через ларагорн http://localhost/sakura-website/index.php# */
<?php include "header.php"; ?>
<?php include "data.php"; ?>

        <div class="hero">
            <video class="hero-video" autoplay muted loop>
                <source src="videos/sakura.mp4" type="video/mp4">
            </video>
            <div class="hero-content">
                <h1>САКУРА. ДОМ САМУРАЯ</h1>
                <p>Гастрономический кластер<br> в центре Москвы</p>
                <div class="buttons-container">
                    <button class="book-btn">забронировать стол</button>
                    <button class="cancel-btn">Отмена брони</button>
                </div>
            </div>
        </div>

        <div class="menu-section" id="menu">
            <h2>Популярное в Сакуре</h2>
            <div class="interactive-menu">
                <div class="menu-list">
            <?php foreach($menu as $phpmenu): ?>
                <div class="menu-row" data-img = "<?= $phpmenu["data-img"] ?>">
                <div class="ru-name"><?= $phpmenu["ru-name"] ?></div>
                <div class="jp-name"><?= $phpmenu["jp-name"] ?></div>
                </div>
            <?php endforeach; ?>               
                </div>
                <div class="menu-preview">
                    <img src="" alt="Превью" class="preview-img">
                </div>
            </div>
        </div>
        <div class="events-section" id="events">
            <h2>Мероприятия</h2>
            <div class="events-grid">
                <?php 
                $MainEvents = array_slice($events, 0, 3);

                foreach ($MainEvents as $event):    
                ?>
                <div class="events-card">
                    <div class="events-img-wrapper">
                    <img src="<?= $event["img"] ?>" alt="<?= $event["alt"] ?>">
                </div>
                    <h3><?= $event["title"] ?></h3>
                    <p><?= $event["desc"] ?></p>
                    <span class="events-date"><?= $event["date"] ?></span>
                    <button class="events-btn">Подробнее</button>
                </div>
            <?php endforeach; ?>
            </div>
                <div style="text-align: center; margin-top: 40px;">
        <a href="events.php" class="events-btn" style="text-decoration: none; display: inline-block;">
            Все мероприятия →
        </a>
    </div>
        </div>

    <div class="news-section" id="news">
        <h2>Последние новости<br> и события</h2>
        <div class="news-list">
         <?php foreach($news as $phpnews): ?>
             <div class="news-item">
                    <div class="news-img-wrapper">
                    <img src="<?= $phpnews["img"] ?>" alt="<?= $phpnews["alt"] ?>">
                </div>
                
                    <div class="news-content"> 
                        <h3><?= $phpnews["title"] ?></h3>
                        <span class="news-date"><?= $phpnews["date"] ?></span>
                        <p><?= $phpnews["desc"] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

        <div class="about-section" id="about">
            <h2>🌸Гастрономический кластер<br>в центре Москвы</h2>
            <div class="about-container">
                <div class="about-text">
                    <p>В нашем ресторане мы создаем уютную атмосферу настоящей Японии, чтобы вы могли отдохнуть от городской суеты. Мы готовим по традиционным рецептам и используем только свежие продукты, которые привозим каждую неделю.</p>
                    <p>Наш шеф-повар прошел стажировку в Токио и привез оттуда секреты приготовления настоящего рамена и суши. Мы верим, что еда — это не просто насыщение, а целое искусство, которое должно радовать все чувства.</p>
                    <p>Приходите к нам на обед или ужин, и вы почувствуете себя так, будто перенеслись в маленький уютный ресторанчик в Киото. Мы ждем вас!</p>
                </div>
                <div class="about-image">
                    <img src="pictures/zal.png" alt="Главный зал с низкими столиками, подушками и бумажными фонарями.">
                    <img src="pictures/bar.png" alt="Барная стойка с полками саке и теплым светом.">
                    <img src="pictures/ugol.png" alt="Уютный уголок со свечой и веточкой сакуры на столике.">
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

        <script src="script.js?v=2"></script>
    </body>
</html>