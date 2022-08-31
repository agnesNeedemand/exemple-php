<?php
// Initialisation d’une variable.
$arr = array(
    "Grossi" => [
        "prenom" => "Julien",
        "site" => "https://grossi.needemand.com/"
    ],
    "Mourichon" => [
        "prenom" => "Thibault",
        "site" => "https://mourichon.needemand.com/"
    ]
);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Page 1</title>
</head>

<body>
    <div>
        <!-- lien vers la page 2 en passant la valeur de $nom dans
l’URL -->
        <a href="page2.php?nom=<?= $nom ?>">Page 2</a>
        <ul>
            <!-- début du foreach remarquez les :  et la fermeture du php -->
            <!-- tout ce qui est entre le début et la fin du foreach sera le contenu servi en boucle -->
            <?php foreach ($arr as $key => $value) : ?>
                <li>
                    <span>
                        <?= $key ?>
                    </span>
                    <span>
                        <?= $value["prenom"] ?>
                    </span>
                    <a href="<?= $value["site"] ?>">Portfolio</a>
                </li>
                <!-- fin du foreach -->
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>