<?php
session_start();
// var_dump($_SESSION);
session_unset();
session_destroy();

include_once __DIR__ . '/layouts/head.php';
?>

<main>

  <div class="container">

    <div class="wrapper d-flex flex-column justify-content-center align-items-center my-5 gap-4">

      <img src="./assets/images/subscription_ok.png" alt="" style="width: 150px; aspect-ratio: 1/1;">

      <p style="font-size: 4rem;"> <strong>Thanks for submitting!</strong></p>
      <p style="font-size: 1.5rem;">You wil now receive our newsletter</p>

      <a class=" btn btn-dark" href="index.php" role="button"> Return to homepage</a>

    </div>

  </div>

</main>

<?php include_once __DIR__ . '/layouts/foot.php'; ?>