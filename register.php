<?php
    if(isset($_POST["submitButton"]))
    {
        echo "Форма отправлена";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    </head>
    <body>
        
        <div class="signInContainer">
        
            <div class="column">

                <div class="header">
                    <img src="assets/images/logo.png" title="Логотип" alt="Логотип сайта">
                    <h3>Зарегистрируйтесь</h3>
                    <span>чтобы начать пользоваться Tanyanflix</span>
                </div>
            
                <form method="POST">

                    <input type="text" name="firstName" placeholder="Имя" required>

                    <input type="text" name="lastName" placeholder="Фамилия" required>

                    <input type="text" name="username" placeholder="Имя пользователя" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Подтвердите email" required>

                    <input type="password" name="password" placeholder="Пароль" required>

                    <input type="password" name="password2" placeholder="Подтвердите пароль" required>

                    <input type="submit" name="submitButton" value="ОТПРАВИТЬ">

                </form>

                <a href="login.php" class="signInMessage">Уже зарегистрированы? Нажмите сюда!</a>

            </div>
        
        </div>

    </body>
</html>