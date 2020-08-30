<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST["submitButton"]))
    {
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

        $success = $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);

        if($success)
        {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }

function getInputValue($name)
{
    if(isset($_POST[$name]))
    {
        echo $_POST[$name];
    }
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

                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <input type="text" name="firstName" placeholder="Имя" value="<?php getInputValue("firstName"); ?>" required>

                    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <input type="text" name="lastName" placeholder="Фамилия" value="<?php getInputValue("lastName"); ?>" required>

                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                    <input type="text" name="username" placeholder="Имя пользователя" value="<?php getInputValue("username"); ?>" required>

                    <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <?php echo $account->getError(Constants::$emailTaken); ?>
                    <input type="email" name="email" placeholder="Email" value="<?php getInputValue("email"); ?>" required>

                    <input type="email" name="email2" placeholder="Подтвердите email" value="<?php getInputValue("email2"); ?>" required>

                    <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
                    <?php echo $account->getError(Constants::$passwordLength); ?>
                    <input type="password" name="password" placeholder="Пароль" required>

                    <input type="password" name="password2" placeholder="Подтвердите пароль" required>

                    <input type="submit" name="submitButton" value="ОТПРАВИТЬ">

                </form>

                <a href="login.php" class="signInMessage">Уже зарегистрированы? Нажмите сюда!</a>

            </div>
        
        </div>

    </body>
</html>