<?php include("includes/header.php"); ?>
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="get" name="registerform">
            <p><label for="user_login">Login<br>
                    <input class="input"  name="login" size="32" type="text" value=""></label></p>
            <p><label for="user_name">Имя<br>
                    <input class="input" name="name" size="32"  value=""></label></p>
            <p><label for="user_surname">Фамилия<br>
                    <input class="input" name="surname" size="32"  value=""></label></p>
            <p><label for="user_birth">День рождения<br>
                    <input class="input" name="birth" size="32"  value="" type="date"></label></p>
            <p><label for="user_password">Пароль<br>
                    <input class="input" name="password" type="password" size="32"  value=""></label></p>
            <p class="submit"><input class="button" id="register" name="register" type="submit"
                                     value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href="login.php">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>
<?php require_once("includes/connection.php");
require 'includes/connection.php';
if (isset($_GET["register"])) {
    if (isset($_GET['login'])) {
        $login = $_GET['login'];
    }
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }
    if (isset($_GET['surname'])) {
        $surname = $_GET['surname'];
    }
    if (isset($_GET['birth'])) {
        $birth = $_GET['birth'];
    }
    if (isset($_GET['password'])) {
        $password = $_GET['password'];
    }

    $signup = "insert into user_t(login,name,surname,birth_date,password) values ('$login','$name','$surname','$birth','$password');";
    $signup = pg_query($con, $signup);
    $result = pg_fetch_assoc($signup);
}
