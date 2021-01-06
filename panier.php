

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

<body>

<div class="wrapper">

    <nav id="sidebar" >
        <div class="sidebar-header">
            <h3>ASTRAKEY</h3>
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
                    <ul class="nav navbar-nav ml-auto">

                        <img src="./img/Logo.png" alt="logo" style="height: 70px" >
                        <img src="./img/Astrakey.png" alt="logo" style="height: 80px" >

                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="magasin.php">Magasin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="panier.php">Panier</a>
                        </li>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 navbar-text" type="search" placeholder="Rechercher" aria-label="Rechercher">
                            <button class=" btn btn-outline-light my-2 my-sm-0 " type="submit">Rechercher</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>



        <?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "root", "astrakey");

        if(isset($_POST["payez"]))
        {
        	if(isset($_SESSION["shopping_cart"]))
        	{
        		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        		if(!in_array($_GET["id"], $item_array_id))
        		{
        			$count = count($_SESSION["shopping_cart"]);
        			$item_array = array(
        				'item_id'			=>	$_GET["id"],
        				'item_name'			=>	$_POST["hidden_name"],
        				'item_price'		=>	$_POST["hidden_price"],
        				'item_quantity'		=>	$_POST["quantity"]
        			);
        			$_SESSION["shopping_cart"][$count] = $item_array;
        		}
        		else
        		{
        			echo '<script>alert("Item Already Added")</script>';
        		}
        	}
        	else
        	{
        		$item_array = array(
        			'item_id'			=>	$_GET["id"],
        			'item_name'			=>	$_POST["hidden_name"],
        			'item_price'		=>	$_POST["hidden_price"],
        			'item_quantity'		=>	$_POST["quantity"]
        		);
        		$_SESSION["shopping_cart"][0] = $item_array;
        	}
        }

        if(isset($_GET["action"]))
        {
        	if($_GET["action"] == "delete")
        	{
        		foreach($_SESSION["shopping_cart"] as $keys => $values)
        		{
        			if($values["item_id"] == $_GET["id"])
        			{
        				unset($_SESSION["shopping_cart"][$keys]);
        				echo '<script>alert("Item Removed")</script>';
        				echo '<script>window.location="index.php"</script>';
        			}
        		}
        	}
        }

        ?>
        <!DOCTYPE html>
        <html>
        	<head>
        		<title>Astrakey Panier</title>
        		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        	</head>
        	<body>
        		<br />
        		<div class="container">
        			<br />
        			<br />
        			<br />
        			<h3 align="center">Astrakey <a>Panier</a></h3><br />
        			<br /><br />
        			<?php
        				$query = "SELECT * FROM panier ORDER BY id ASC";
        				$result = mysqli_query($connect, $query);
        				if(mysqli_num_rows($result) > 0)
        				{
        					while($row = mysqli_fetch_array($result))
        					{
        				?>
        			<div class="col-md-4">
        				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
        					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
        						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

        						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

        						<h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

        						<input type="text" name="quantity" value="1" class="form-control" />

        						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

        						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="polon@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Jeux">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Jeux">Jeux</td></tr><tr><td><select name="os0">
	<option value="Call of duty">Call of duty €59.00 EUR</option>
	<option value="Cyberpunk">Cyberpunk €33.00 EUR</option>
	<option value="Minecraft">Minecraft €20.00 EUR</option>
</select> </td></tr>
</table>
<input type="hidden" name="option_select0" value="Call of duty">
<input type="hidden" name="option_amount0" value="59.00">
<input type="hidden" name="option_select1" value="Cyberpunk">
<input type="hidden" name="option_amount1" value="33.00">
<input type="hidden" name="option_select2" value="Minecraft">
<input type="hidden" name="option_amount2" value="20.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
</form>


        					</div>
        				</form>
        			</div>
        			<?php
        					}
        				}
        			?>
        			<div style="clear:both"></div>
        			<br />
        			<h3>Order Details</h3>
        			<div class="table-responsive">
        				<table class="table table-bordered">
        					<tr>
        						<th width="40%">Jeux</th>
        						<th width="10%">Quantiter</th>
        						<th width="20%">Prix</th>
        						<th width="15%">Total</th>
        						<th width="5%">Action</th>
        					</tr>
        					<?php
        					if(!empty($_SESSION["shopping_cart"]))
        					{
        						$total = 0;
        						foreach($_SESSION["shopping_cart"] as $keys => $values)
        						{
        					?>
        					<tr>
        						<td><?php echo $values["item_name"]; ?></td>
        						<td><?php echo $values["item_quantity"]; ?></td>
        						<td>$ <?php echo $values["item_price"]; ?></td>
        						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
        						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
        					</tr>
        					<?php
        							$total = $total + ($values["item_quantity"] * $values["item_price"]);
        						}
        					?>
        					<tr>
        						<td colspan="3" align="right">Total</td>
        						<td align="right">€ <?php echo number_format($total, 2); ?></td>
        						<td></td>
        					</tr>
        					<?php
        					}
        					?>

        				</table>
        			</div>
        		</div>
        	</div>
        	<br />
        	</body>
        </html>

        <?php

        /*function array_column($array, $column_name)
        {
        	$output = array();
        	foreach($array as $keys => $values)
        	{
        		$output[] = $values[$column_name];
        	}
        	return $output;
        }*/
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
