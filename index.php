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

include_once __DIR__ . '/layouts/head.php';
?>

<main>

  <!-- Jumbotron -->
  <div class="p-5 mb-4 bg-light">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Jumbotron</h1>
      <p class="col-md-8 fs-4">
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>
      <button class="btn btn-dark btn-lg" type="button">
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


                <button type="submit" class="btn btn-dark rounded mb-3">Submit</button>

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

<?php include_once __DIR__ . '/layouts/foot.php'; ?>