<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>EcoSphere - Shop</title>
        <meta name="viewport" content="width=device-width">
        <link href="Views/style/general.css" rel="stylesheet" type="text/css">
        <link href="Views/style/header-footer.css" rel="stylesheet" type="text/css">
        <link href="Views/style/mainSection.css" rel="stylesheet" type="text/css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Nunito|Glegoo" rel="stylesheet">
        <!-- Fontawesome -->
        <script src="./Views/js/fontawesome-all.min.js"></script>
        <!-- Icon -->
        <link href="./Views/img/icon.png" rel="icon">
    </head>
    <body>

<header>
    <div id="info-bar">
        <p>My wonderful platform</p>
    </div>

    <div id="banner-bloc">
        <h1>TP Authentification et MVC</h1>
    </div>

    <div id="account_bar">
                <div class="connection center">
            <a href="./index.php?ctrl=user&action=login" class="no-deco" title="Login or create account">
                <i class="fas fa-user"></i>
                <div class="text">Login</div>
            </a>
        </div>
            </div>

    <ul id="menu_bar">
        <a href="./index.php?ctrl=user&action=usersList" class="no-deco"><li>Liste des utilisateurs</li></a>
        <a href="./" class="no-deco"><li>Le mémoire</li></a>
        <a href="./" class="no-deco"><li>La soutenance</li></a>
        <a href="./" class="no-deco"><li>Le carnet de liaison</li></a>
        <a href="./" class="no-deco"><li>Les espaces de travail</li></a>
    </ul>
</header>
<section id="main-section">
    
<!-- Monthly box -->
<div id="monthly-box">
</div>
<!-- End Monthly Box -->

<div id="newItems">
</div>
</section>

<footer>
    <p>
        Licence professionnelle Projet Web et Mobile at Sorbonne Université 2018/2019
    </p>
</footer>    </body>
</html>
