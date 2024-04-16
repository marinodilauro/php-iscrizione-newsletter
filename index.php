<?php
require_once __DIR__ . '/helpers/functions.php';

var_dump($_GET);


$email = $_GET['email'];


var_dump(isset($email));

if (isset($email)) {

  var_dump($email);

  var_dump(str_contains($email, '@'), str_contains($email, '.'));

  $response = checkEmail($email);

  $message = generateAlertMessage($response);

  var_dump($message);
}

var_dump($response);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <title>php-iscrizione-newsletter</title>
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Newsletter</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Home
                <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">About
                <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Contacts
                <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Action 1</a>
                <a class="dropdown-item" href="#">Action 2</a>
              </div>
            </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search" />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>


  </header>

  <main>

    <?php if (isset($message)) : ?>

      <div class="alert alert-<?php echo $message['status']; ?> position-fixed alert-dismissable fade show" role="alert" style="top:90%; left:2rem; z-index:1;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><?php echo $message['content']; ?></strong>
      </div>

    <?php endif; ?>

    <!-- Newsletter -->
    <div class="newsletter bg-light">

      <div class="container py-4">
        <div class="row">

          <div class="col-6">
            <h2>Newsletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi, eveniet, ipsum assumenda ullam minima quis soluta numquam maiores saepe quae nemo? Ex temporibus consequatur, veniam sit reiciendis perspiciatis reprehenderit.</p>

          </div>

          <div class="col-4 mx-auto">

            <ul class="list-unstyled m-0">

              <li class="lh-lg mb-4">

                <form action="" method="get">

                  <div class="mb-3">
                    <label for="" class="form-label">Subscribe to our newsletter</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="mario.rossi@example.com" />
                    <small id="emailHelper" class="form-text text-muted">Type your email address</small>
                  </div>


                  <button type="submit" class="btn btn-primary rounded">Submit</button>

                </form>


              </li>

            </ul>
          </div>
        </div>


      </div>
    </div>
  </main>

</body>

</html>