<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>FNAIM</title>
    <meta charset="utf-8">
</head>
<body>
<?php
include ("controller/tableau_de_bord.php");
$unControleur = new Tableau ("localhost","essaippe","admin","Btssio","perssone");
$result = $unControleur->selectAll();
include("view/vue_profil.php");
?>
</body>
</html>