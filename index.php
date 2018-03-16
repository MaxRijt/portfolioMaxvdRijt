<!DOCTYPE HTML>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Home - Portfolio Max van de Rijt</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark main-nav">
      <a class="navbar-brand main-nav-header" href="#">Max van de Rijt</a>
      <button class="navbar-toggler navbar-toggler-button" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse main-nav-hrefs" id="navbarNav">
        <ul class="navbar-nav">
          <div class="main-nav-pages">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projecten
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Alle Projecten</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Web-Development</a>
                <a class="dropdown-item" href="#">Applicaties</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link white" href="#">Over Mij</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link white" href="#">Contact</a>
            </li>
          </div>
          <a class="nav-item active nav-link" href="#"><img src="images/callmain.png" alt="Go down" class="main-nav-icons nav-call" width="30" height="30"></a>
          <a class="nav-item active nav-link" href="#"><img src="images/mailmain.png" alt="Go down" class="main-nav-icons nav-mail" width="30" height="30"></a>
          <a class="nav-item active nav-link" href="#"><img src="images/discordmain.png" alt="Go down" class="main-nav-icons nav-discord" width="30" height="30"></a>
        </ul>
      </div>
    </nav>
    <div class="jumbotron">
      <div id="carouselExampleSlidesOnly" class="carousel slide Main-Slider" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/background.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background.jpg" alt="Third slide">
          </div>
        </div>
      </div>
    </div>

    <div class="container main-info">
      <h1>Hello world!</h1>
      <h1>Hello world!</h1>
      <h1>Hello world!</h1>
    </div>

    <div class="row test">
      <div class="footer-text">
        <h1>Hello</h1>
      </div>
      <div class="footer-mail">
        <h1>Hello</h1>
      </div>
      <div class="footer-call">
        <h1>Hello</h1>
      </div>
      <div class="">
        <h1>Hello</h1>
      </div>
    </div>

    <div class="footer-main">
    <?php include 'inc/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
