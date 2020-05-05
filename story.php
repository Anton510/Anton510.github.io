<?php
session_start();


//    переменные которые передаются 
$name = $_POST['name'];
$mobil = $_POST['mobil'];
$work = $_POST['work'];
$email = $_POST['email'];
$product = $_POST['product'];

// Валидация форм
if (strlen($_POST['name']) == 0) {
    $_SESSION["name"] =  "<div class='alert text-danger' role='alert'>Пожалуйста введите ваше имя</div>";
    header('Location: /index.php');
    exit;
} 

if (strlen($_POST['mobil']) == 0) {
    $_SESSION["mobil"] =  "<div class='alert text-danger' role='alert'>Пожалуйста введите ваш телефон</div>";
    header('Location: /index.php');
    exit;
} 

if (strlen($_POST['work']) == 0) {
    $_SESSION["work"] =  "<div class='alert text-danger' role='alert'>Пожалуйста введите название вашей работы</div>";
    header('Location: /index.php');
    exit;
} 

if (strlen($_POST['email']) == 0) {
    $_SESSION["email"] =  "<div class='alert text-danger' role='alert'>Пожалуйста введите ваш Email</div>";
    header('Location: /index.php');
    exit;
} 

$_SESSION['push'] = "<div class='alert alert-success' role='alert'>Ваша заявка принята, с вами свяжутся в течение 2-х часов</div>" ;

//Соединение с базой
try {
	$conn = new PDO("mysql:host=localhost;dbname=testpro;", "root", "");


// обрабатываем
	$query = "INSERT INTO project  VALUES 
    (NULL, :name, :mobil, :work, :email, :product)";
	$msg = $conn->prepare($query);
    $msg->execute(['name' => $name, 'mobil' => $mobil,'work' => $work,'email' => $email,'product' => $product]);


	
	header('Location: /index.php');
}

catch (PDOException $e)
{
	echo "error";
}
?>