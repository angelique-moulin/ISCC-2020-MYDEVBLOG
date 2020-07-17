<?php

$username = "login";
$pass = "2020";

if (isset($_POST['login']) && isset($_POST['pwd'])) {
    if ($username == $_POST['login'] && $pass == $_POST['pwd']) {
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];
        header("Location:create_articles.php?page=add_articles");
    } else {
        echo '<body onLoad="alert(\'Membre non reconnu, veuillez réessayer.\')">';
        echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
    }
} else {
    echo 'Nom d\'utilisateur ou mot de passe incorrect.<br>Cliquez <a href="connexion.php">ici</a> pour réessayer.';
}

?>
