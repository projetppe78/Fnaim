<!DOCTYPE html>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" src="img/logo/FNAIM.ico" type="img/logo/FNAIM.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css\font-awesome-4.7.0\css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <!-- Collapsible content -->
    <a class="navbar-brand" href="index.php">
        <img src="img/logo/logo_FNAIM.png" width="50" height="40">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link " href="index.php"> <strong>Home</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="apropos.php"><strong>A
                        propos</strong> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="visite.php"><strong>Visite</strong> </a>
            </li>
        </ul>
        <form method="post" action="recherche.php" class="form-inline">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input class="form-control " type="text" name="search" placeholder="Recherché">
            <a style="display: none" href="../../recherche.php"><input type="submit" name="rechercher"
                                                                       value="Rechercher"></a>
        </form>
        <div style="padding-left: 3%; padding-right: 1%">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item form-inline">
                    <i class=" fa fa-2x fa-user-circle" aria-hidden="true"></i>
                </li>
                <li class="nav-item form-inline">
                    <a class="nav-link" href="profil.php">Mon compte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>

