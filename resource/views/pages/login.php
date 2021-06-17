<?php
require_once "../../../vendor/autoload.php";

use App\Controller\AuthController;

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $authController = new AuthController();
    $authController->login($email, $password);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2>Login</h2>
        <!-- Login Form -->
        <form method="post">
            <?php if (isset($_SESSION['login-error']) && $_SESSION['login-error'] != null) :?>
            <p class="alert alert-danger">
                <?php echo $_SESSION['login-error'] ?>
            </p>
            <?php endif; ?>
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>