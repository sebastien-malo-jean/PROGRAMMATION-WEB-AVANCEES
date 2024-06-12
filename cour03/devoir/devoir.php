<?php 

include_once("class/Livre.php");

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="author" content="Sebastien Malo Jean">
    <meta name="description" content="">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    $livre__lesFourmis = new Livre(
        "978-2253147758",
        "Les Fourmis",
        new DateTime("1991-03-01"),
        "Science-fiction",
        8.50,
        "Les Fourmis est un roman de science-fiction de Bernard Werber qui explore la vie d'une colonie de fourmis et les interactions entre les humains et les fourmis.",
        5.00
    );
    
    $livre__lesFourmis->afficheMarge();

    print($livre__lesFourmis->afficheMarge());
    ?>
</body>

</html>