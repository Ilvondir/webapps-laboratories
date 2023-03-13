<?php
include('trip.php')
?>

<!doctype html>
<html lang="pl">
  <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wycieczki górskie</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Wycieczki górskie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#start">Start</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#wycieczki">Wycieczki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cennik">Cenniki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#inne">Inne</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
          </form>
        </div>
      </div>
    </nav>
    <div id="start" class="mb-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Niesamowite przeżycia!</h1>
            </div>    
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Niesamowite widoki!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Piękno natury!</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="wycieczki" class="container mb-5">
      <div class="row">
          <h1>Wycieczki</h1>
      </div>
      <div class="row">
        <?php foreach($trips as $trip) {?>
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="img/<?php echo $trip->getImg() ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $trip->getName() ?></h5>
                      <p class="card-text"><?php echo $trip->getDescription() ?></p>
                      <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
                  </div>
              </div>
          </div>
          <?php } ?>
      </div>
  </div>

  <div id="cennik" class="container mt-5 mb-5">
    <div class="row">
        <h1>Cennik</h1>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa wycieczki</th>
                <th scope="col">Kontynent</th>
                <th scope="col">Kraj</th>
                <th scope="col">Okres</th>
                <th scope="col">Cena</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($trips as $trip) { ?>

            <tr>
                <th scope="row"><?php echo $trip->getId() ?></th>
                <td><?php echo $trip->getName() ?></td>
                <td><?php echo $trip->getContinent() ?></td>
                <td><?php echo $trip->getCountry() ?></td>
                <td><?php echo $trip->getPeriod() ?> dni</td>
                <td><?php echo $trip->getPrice() ?> PLN</td>
            </tr>

          <?php } ?>
        </tbody>
    </table>
  </div>

  <div id="inne" class="container mb-3">
    <div class="row">
        <div class="col-sm-12 col-md-6 mb-4">
            <h2>O naszych wycieczkach...</h2>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/t7ZpJ7wWlZI"></iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2>Zapytanie o ofertę</h2>
            <form>
                <div class="form-group mt-2 mb-3">
                    <label for="exampleFormControlInput1">Adres email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormSelect1">Rodzaj oferty</label>
                    <select class="form-select" id="exampleFormControlSelect1">
                        <option selected>indywidualna</option>
                        <option>grupowa</option>
                        <option>specjalna</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlBudget">Budżet</label>
                    <div class="input-group mb-3">
                      <input type="number" min="0" placeholder="20000" step="any" class="form-control">
                      <span class="input-group-text">PLN</span>
                    </div>                    
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Komentarz</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group mb-3 d-flex justify-content-center">
                    <a href="#" class="btn btn-primary">Wyślij</a>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="container-fluid bg-light">
    <div class="row text-center pt-2">
        <p class="text-dark">&copy; Wycieczki górskie - 2023</p>
    </div>
</footer>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
