

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
                    <h4 class="navbar-text center-text">Panier !</h4>
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

        <!--Section: Block Content-->
        <section>

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-lg-8">

              <!-- Card -->
              <div class="card wish-list mb-3">
                <div class="card-body">

                  <h5 class="mb-4">Cart (<span>2</span> items)</h5>

                  <div class="row mb-4">
                    <div class="col-md-5 col-lg-3 col-xl-3">
                      <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                        <img class="img-fluid w-100"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                        <a href="#!">
                          <div class="mask waves-effect waves-light">
                            <img class="img-fluid w-100"
                              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                            <div class="mask rgba-black-slight waves-effect waves-light"></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7 col-lg-9 col-xl-9">
                      <div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5>Blue denim shirt</h5>
                            <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                            <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                            <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                          </div>
                          <div>
                            <div class="def-number-input number-input safari_only mb-0 w-100">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                              <input class="quantity" min="0" name="quantity" value="1" type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                            </div>
                            <small id="passwordHelpBlock" class="form-text text-muted text-center">
                              (Note, 1 piece)
                            </small>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                class="fas fa-trash-alt mr-1"></i> Remove item </a>
                            <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                                class="fas fa-heart mr-1"></i> Move to wish list </a>
                          </div>
                          <p class="mb-0"><span><strong>$17.99</strong></span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="mb-4">
                  <div class="row mb-4">
                    <div class="col-md-5 col-lg-3 col-xl-3">
                      <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                        <img class="img-fluid w-100"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                        <a href="#!">
                          <div class="mask waves-effect waves-light">
                            <img class="img-fluid w-100"
                              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                            <div class="mask rgba-black-slight waves-effect waves-light"></div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7 col-lg-9 col-xl-9">
                      <div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5>Red hoodie</h5>
                            <p class="mb-3 text-muted text-uppercase small">Shirt - red</p>
                            <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                            <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                          </div>
                          <div>
                            <div class="def-number-input number-input safari_only mb-0 w-100">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                              <input class="quantity" min="0" name="quantity" value="1" type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                class="fas fa-trash-alt mr-1"></i> Remove item </a>
                            <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                                class="fas fa-heart mr-1"></i> Move to wish list </a>
                          </div>
                          <p class="mb-0"><span><strong>$35.99</strong></span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                    items to your cart does not mean booking them.</p>

                </div>
              </div>
              <!-- Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body">

                  <h5 class="mb-4">Expected shipping delivery</h5>

                  <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                </div>
              </div>
              <!-- Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body">

                  <h5 class="mb-4">We accept</h5>

                  <img class="mr-2" width="45px"
                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                    alt="Visa">
                  <img class="mr-2" width="45px"
                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                    alt="American Express">
                  <img class="mr-2" width="45px"
                    src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                    alt="Mastercard">
                  <img class="mr-2" width="45px"
                    src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                    alt="PayPal acceptance mark">
                </div>
              </div>
              <!-- Card -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4">

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body">

                  <h5 class="mb-3">The total amount of</h5>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                      Temporary amount
                      <span>$25.98</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                      Shipping
                      <span>Gratis</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                      <div>
                        <strong>The total amount of</strong>
                        <strong>
                          <p class="mb-0">(including VAT)</p>
                        </strong>
                      </div>
                      <span><strong>$53.98</strong></span>
                    </li>
                  </ul>

                  <button type="button" class="btn btn-primary btn-block waves-effect waves-light">go to checkout</button>

                </div>
              </div>
              <!-- Card -->

              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body">

                  <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample1"
                    aria-expanded="false" aria-controls="collapseExample1">
                    Add a discount code (optional)
                    <span><i class="fas fa-chevron-down pt-1"></i></span>
                  </a>

                  <div class="collapse" id="collapseExample1">
                    <div class="mt-3">
                      <div class="md-form md-outline mb-0">
                        <input type="text" id="discount-code1" class="form-control font-weight-light"
                          placeholder="Enter discount code">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card -->

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </section>
        <!--Section: Block Content-->

        


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
