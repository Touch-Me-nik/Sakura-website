<?php
include 'data.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $rawname = isset($_POST["user_name"]) ? $_POST["user_name"] : '';
    $rawemail = isset($_POST["user_email"]) ? $_POST["user_email"] : '';
    $rawphone = isset($_POST["user_phone"]) ? $_POST["user_phone"] : '';

    $name = trim($rawname);
    $email = trim($rawemail);
    $phone = trim($rawphone);
    
    // 2. Проверка на пустоту
    if(empty($name) || empty($email) || empty($phone)) {
        $errors[] = "Все поля обязательны для заполнения.";
    } else {
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Некорректный формат почты.";
        }
        
        $phone_pattern = '/^\+7\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$/';
        if(!preg_match($phone_pattern, $phone)) {
             $errors[] = "Неверный формат телефона, используйте формат +7(000)000-00-00";
        }
    }

    header('Content-Type: application/json; charset=utf-8');

    if(empty($errors)) {
        echo json_encode([
            'status' => 'success', 
            'message' => "Приветствую вас, $name! Мы перезвоним на $phone."
        ]);
    } else {
        echo json_encode([
            'status' => 'error', 
            'message' => implode(" ", $errors)
        ]);
    }
    
    exit; 
}

include 'header.php';
?>

<div class="contacts-section">
    <h1>Наши контакты</h1>
    <p>Телефон: +7 (999) 000-00-00</p>

    <form id="bookingForm" method="POST" action="">
        <label for="user_name">Введите ваше имя:</label>
        <input type="text" id="user_name" name="user_name" required placeholder="Иван">

        <label for="user_email">Введите вашу почту:</label>
        <input type="email" id="user_email" name="user_email" required placeholder="ivan@mail.ru">

        <label for="user_phone">Ваш телефон (+7(000)000-00-00):</label>
        <input type="text" id="user_phone" name="user_phone" required placeholder="+7(999)123-45-67">

        <button type="submit">Отправить</button>
    </form>
</div>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js?v=3"></script>