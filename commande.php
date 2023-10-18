<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
  <title>Mon panier</title>

  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="./css/commande.css" rel="stylesheet" />
</head>
<body>
<div class="px-4 px-lg-0">
  <!-- For demo purpose -->
  <div class="container text-white py-5 text-center">
    <a href="./index.php"><img src="./images/logo.png" alt="Logo d'accueil" style="height: 150px;"></a>
    <h1 class="display-4">MON PANIER</h1>
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              
              <tbody>
                <tr>
                    <th scope="row" class="border-0 text-center">
                        <div class="p-2">
                            <div class="ml-3 d-inline-block align-middle">
                                <h5>Panier <br> <h6>Il n'y a aucun article dans ton panier.</h6></h5>
                            </div>
                        </div>
                    </th>
                </tr>
                
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Code de réduction</div>
          <div class="p-4">
            <p class="font-italic mb-4">Si vous avez un code de réduction, veuillez l'entrer ci-dessous</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Appliquer le code" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Appliquer le code</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Sommaire</div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-Total</strong><strong>—</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Code de réduction</strong><strong>—</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>—</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">—</h5>
              </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">COMMANDER</a>

            <h6>
                <a href="./register.php" style="color: grey;">Rejoins-nous</a>
                ou
                <a href="./connexion.php" style="color: grey;">S'identifier</a>
            </h6>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>