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
                    <h3>Войдите</h3>
                    <span>чтобы начать пользоваться Tanyanflix</span>
                </div>
            
                <form method="POST">

                    <input type="text" name="username" placeholder="Имя пользователя" required>

                    <input type="password" name="password" placeholder="Пароль" required>

                    <input type="submit" name="submitButton" value="ОТПРАВИТЬ">

                </form>

                <a href="register.php" class="signInMessage">Хотите зарегистрироваться? Нажмите сюда!</a>

            </div>
        
        </div>

    </body>
</html>