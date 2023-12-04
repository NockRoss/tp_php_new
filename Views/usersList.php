<?php
require_once('./Model/connection.class.php');
require_once('./Model/UserManager.class.php');

$pdoBuilder = new Connection();
$db = $pdoBuilder->getDb();
$userManager = new UserManager($db);

$users = $userManager->findAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
</head>
<body>

<h2>Liste des Utilisateurs</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->getIdUser(); ?></td>
                <td><?= $user->getEmail(); ?></td>
                <td><?= $user->getLastName(); ?></td>
                <td><?= $user->getFirstName(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
