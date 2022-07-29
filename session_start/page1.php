<?php
session_start(); // Ouvrir/réactiver la session. 
$session = session_id(); // récupérer l'identifiant de la session (pour info). 

if (!isset($_SESSION['date'])) {
    // Nouvelle session

    // Création d'une variable de session
    $date = date('d/m/Y à H:i:s');
    $_SESSION['date'] = $date;

    //préparer un message. 
    $message = "Nouvelle session : " . $session . " démarre le " . $date;
} else {
    // Ancienne session. 

    //Récupérer la variable de Session. 
    $date = $_SESSION['date'];

    //   - préparer un message. 
    $message = "Session déjà ouverte:  " . $session . " démarre le " . $date;
}

// Détermination de la date et de l'heure actuelle (pas celle 
// de l'ouverture de la session). 
$actuel = 'Nous sommes le ' . date('d/m/Y') .
    ' ; il est ' . date('H:i:s');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page 1</title>
</head>

<body>
    <h1>Page 1</h1>
    <p><?php echo $actuel; ?></p>
    <p>
        <?php echo $message; ?>
    </p>
    <br />
    <p>
        <a href="page2.php">Page 2</a>
    </p>
</body>

</html>