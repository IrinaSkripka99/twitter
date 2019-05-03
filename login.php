<?php include("includes/header.php"); ?>
    <div class="container mlogin">
        <div id="login">
            <h1>Вход</h1>
            <form action="login.php" id="loginform" method="get" name="loginform">
                <p><label for="user_login">Имя пользователя<br>
                        <input class="input" id="username" name="login" size="20"
                               type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                        <input class="input" id="password" name="password" size="20"
                               type="password" value=""></label></p>
                <p class="submit"><input class="button" type="submit" value="Log In"></p>
                <p class="regtext">Еще не зарегистрированы?<a href="register.php">Регистрация</a>!</p>
            </form>
        </div>
    </div>
<?php include("includes/footer.php"); ?>
<?php require_once("includes/connection.php");
session_start();


if (isset($_SESSION["session_username"])) {
    // вывод "Session is set"; // в целях проверки
    header("Location: intropage.php");
}


if (isset($_GET["login"])) {
    if (isset($_GET['login'])) {
        $login = $_GET['login'];
    }

    if (isset($_GET['password'])) {
        $password = $_GET['password'];
    }
    $signup = "select password from user_t where login='$login';";
    $signup = pg_query($con, $signup);
    $result = pg_fetch_assoc($signup);
    if ($result['password'] == $password) {
        print "OK";
    } else {
        print "LOX";
    }
}
