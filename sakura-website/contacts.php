<?php
include 'data.php';

$success_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["user_name"];
    $phone = $_POST["user_phone"];
    
    $host = '127.0.0.1';
    $db   = 'sakura_db';
    $user = 'root';
    $pass = ''; 
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO bookings (name, phone) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $phone]);
        
        $success_message = "Приветствую вас, " . htmlspecialchars($name) . "! Мы перезвоним на " . htmlspecialchars($phone) . ".";
        
    } catch (PDOException $e) {
        echo "<pre style='background: pink; padding: 15px; border: 2px solid red;'>";
        echo "❌ ОШИБКА БАЗЫ ДАННЫХ: " . $e->getMessage();
        echo "</pre>";
    }
}

include 'header.php';
?>

<div class="contacts-section">
    <h1>Наши контакты</h1>
    <p>Телефон: +7 (999) 000-00-00</p>
    
    <?php if ($success_message): ?>
        <p style="color: green; font-weight: bold; font-size: 1.2em;"><?= $success_message ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="user_name" placeholder="Введите ваше имя..." required>
        <input type="tel" name="user_phone" placeholder="Введите ваш номер телефона..." required>
        <button type="submit">Отправить</button>
    </form>
</div>

<?php include 'footer.php'; ?>
 <script src="script.js?v=2"></script>