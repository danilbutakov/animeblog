<?php

require_once __DIR__ . '/php/mysqlauthentication.php';

require_once __DIR__ . '/php/authorization.php';

require_once __DIR__ . '/php/registration.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/sign-up.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script src="slick/slick.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php
        if ($_COOKIE['user'] == '') :
        ?>
            <?php require_once __DIR__ . '/public/header.php'; ?>
            <main class="page">
                <section class="sign">
                    <div class="sign__content _container-signlog">
                        <div class="content__form2">
                            <form action="" method="post" class="js-form" novalidate>
                                <div class="form2__item">
                                    <label for="" class="form__label">Email</label>
                                    <input type="email" name="email" class="form__input js-input js-input-email" placeholder="Enter your Email" />
                                </div>
                                <div class="form2__item">
                                    <label for="" class="form__label__password">Password</label>
                                    <input type="password" name="pass" class="form__input js-input js-input-password" placeholder="Enter your Password" />
                                </div>
                                <div class="form2__button">
                                    <button type="submit" name="submit" class="button__send">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            <?php else : ?>
                <p>Привет <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="php/exit.php">здесь</a></p>
            <?php endif; ?>
            <?php require_once __DIR__ . '/public/popup.php'; ?>
            </main>
    </div>
    <script src="js/popup.js"></script>
</body>
<script src="js/formIndex1.js"></script>
<script src="js/login.js"></script>

</html>