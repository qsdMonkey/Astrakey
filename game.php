<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=astrakey', 'root', 'root');

} catch (Exception $e) {
    die('Error');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <title>Astrakey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>


<!--------------------------------------------------------------------------Body HTML-------------------------------------------------------------------------->
<body>
<!--------------------------------------------------------------------------Debut sidebar-------------------------------------------------------------------------->
<div class="wrapper">

    <nav id="sidebar" >
        <div class="sidebar-header">
            <img src="./img/Astrakey.png" alt="logo" style="height: 60px" >
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="home.php">Accueil</a>
            </li>
            <li>
                <a href="magasin.php">Magasin</a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Genre</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="rpg.php">RPG</a>
                    </li>
                    <li>
                        <a href="fps.php">FPS</a>
                    </li>
                    <li>
                        <a href="openworld.php">Open World</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <img src="./img/Logo.png" alt="logo" style="height: 70px" >
                    <h4 class="navbar-text center-text">Les jeux du moment !</h4>
                    <ul class="nav navbar-nav ml-auto">
                        <a class="border-custom" href="panier.php"><img src="./img/panier.png" alt="logo" height="40px" width="40px"></a>

                        <form class="form-inline">
                            <input class="form-control mr-sm-2 navbar-text" type="search" placeholder="Rechercher" aria-label="Rechercher">
                            <button class=" btn btn-outline-light my-2 my-sm-0 " type="submit">Rechercher</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

<?php


$getAll = $bdd->prepare('SELECT * FROM games WHERE id_games=?');
    $getAll->execute(array($_POST["id_games"]));

foreach ($getAll->fetchAll() as $game) {
?>
        <div class="container-fluid">
            <div class="content-wrapper">
        		<div class="item-container">
        			<div class="container">
        				<div class="col-md-12">
        					<div class="product col-md-3 service-image-left ">


                                    <img id="item-display" src="<?php echo $game['img'];?>" alt="" witdh="130px" height="305px">

        					</div>

        				</div>

        				<div class="col-md-7">
        					<div class="product-title"><?php echo $game["name"];?></div>

        					<hr>
        					<div class="product-desc"><?php echo $game["description"];?></div>
                            <hr>
                            <div class="product-price"><?php echo $game["price"];?> €</div>
                            <div class="product-stock"><b>En stock</b></div>
                            <br/>
        					<div class="border-custom">
        						<button type="button" class="btn btn-success">
        							Ajouter au panier
                                </button>
                                <br/>

        					</div>
        				</div>
        			</div>
        		</div>

        			</div>
        		</div>

<?php
}
 ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>





</body>
</html>
