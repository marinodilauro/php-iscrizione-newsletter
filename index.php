<?php
require_once __DIR__ . '/server.php';

// var_dump($message);
// var_dump($response);
// var_dump($email);


// var_dump($_SESSION);

// var_dump(!empty($_GET['email']));
// var_dump(!empty($_SESSION['message']));



session_start();

if (!empty($_SESSION['message'])) {
  $message = $_SESSION['message'];
}

session_unset();
session_destroy();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FontAwesome 6.2.0 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>php-iscrizione-newsletter</title>
</head>

<body>

  <!-- Header -->
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

    <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Jumbotron</h1>
        <p class="col-md-8 fs-4">
          Using a series of utilities, you can create this jumbotron, just
          like the one in previous versions of Bootstrap. Check out the
          examples below for how you can remix and restyle it to your liking.
        </p>
        <button class="btn btn-primary btn-lg" type="button">
          Example button
        </button>
      </div>
    </div>

    <!-- Posts -->
    <section class="posts my-5">

      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">

          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img class="card-img-top" src="https://picsum.photos/200" alt="Title" />
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- Newsletter -->
    <div id="newsletter" class="newsletter bg-light">

      <div class="container py-4">
        <div class="row">

          <div class="col-6">
            <h2>Newsletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere commodi, eveniet, ipsum assumenda ullam minima quis soluta numquam maiores saepe quae nemo? Ex temporibus consequatur, veniam sit reiciendis perspiciatis reprehenderit.</p>

          </div>

          <div class="col-4 mx-auto">

            <ul class="list-unstyled m-0">

              <li class="lh-lg mb-4">

                <!-- Newsletter form -->
                <form action="server.php" method="get">

                  <div class="mb-3">
                    <label for="" class="form-label">Subscribe to our newsletter</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="mario.rossi@example.com" />
                    <small id="emailHelper" class="form-text text-muted">Type your email address</small>
                  </div>


                  <button type="submit" class="btn btn-primary rounded mb-3">Submit</button>

                  <?php if (isset($message)) : ?>

                    <div class="alert alert-<?php echo $message['status']; ?> alert-dismissable fade show" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <strong><?php echo $message['content']; ?></strong>
                    </div>

                  <?php endif; ?>

                </form>


              </li>

            </ul>
          </div>
        </div>


      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer id="footer" class="bg-dark py-5">

    <div class="container">
      <div class="row justify-content-between">

        <!-- Address Info -->
        <div class="col-3">
          <ul class="list-unstyled">

            <li class="list_title text-light fs-4 fw-bold mb-3">Address Info</li>

            <li class="lh-lg mb-2">
              <i class="fa-solid fa-location-dot pe-3 text-light"></i>
              <a class="text-decoration-none text-light" href="">60 29th Street San Francisco. CA 94110 507-Union Trade Center, United States of America</a>
            </li>

            <li class="lh-lg mb-2">
              <i class="fa-solid fa-phone pe-3 text-light"></i>
              <a class="text-decoration-none text-light" href="">(+00) 123-456-789</a>
            </li>

            <li class="lh-lg mb-2">
              <i class="fa-solid fa-envelope pe-3 text-light"></i>
              <a class="text-decoration-none text-light" href="">demo@example.com</a>
            </li>

          </ul>
        </div>

        <!-- Informations -->
        <div class="col-3">
          <ul class="list-unstyled m-0">

            <li class="list_title text-light fs-4 fw-bold mb-3">Informations</li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Bookmarks</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Features</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Sitemap</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Lists</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Contact Us</a>
            </li>

          </ul>
        </div>

        <!-- Extras -->
        <div class="col-3">
          <ul class="list-unstyled m-0">

            <li class="list_title text-light fs-4 fw-bold mb-3">Extras</li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Delivery</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Cart</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">Terms and conditions</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">My account</a>
            </li>

            <li class="lh-lg mb-2">
              <a class="text-decoration-none text-light" href="">About Us</a>
            </li>

          </ul>
        </div>



      </div>
    </div>


  </footer>


  <!-- Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

  </script>

</body>

</html>