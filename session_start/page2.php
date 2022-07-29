<?php
session_start(); // Ouvrir/réactiver la session. 
$session = session_id(); // récupérer l'identifiant de la session (pour info). 

if (!isset($_SESSION['date'])) {
    // Pas le droit de voir la page.
    echo "Acces interdit";
    die();
}

// Session existe : ok
$date = $_SESSION['date'];
$message = "Session déjà ouverte:  " . $session . " démarre le " . $date;
$actuel = 'Nous sommes le ' . date('d/m/Y') .
    ' ; il est ' . date('H:i:s');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page 2</title>
</head>

<body>
        <h1>Page 2</h1>
        <p>Page accessible que si la session existe.</p>
        <p><?php echo $actuel; ?></p>
        <p>
            <?php echo $message; ?>
        </p>
        <br />
        <p>
            <a href="page1.php">Page 1</a>
        </p>
</body>
</html>