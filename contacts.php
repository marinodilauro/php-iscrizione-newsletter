<?php

include_once __DIR__ . '/layouts/head.php';

?>

<main>

  <div class="p-5 bg-light">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Contact Me</h1>
      <p class="col-md-8 fs-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, fugiat. Voluptates aliquid modi corrupti. Doloremque repudiandae, repellendus rerum voluptates maiores molestiae illo praesentium cumque unde deserunt temporibus omnis ea expedita?
      </p>
      <button class="btn btn-dark btn-lg" type="button">
        Example button
      </button>
    </div>
  </div>

  <div class="container w-25 my-4">

    <form action="" method="post">

      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="" />
        <small id="namehelper" class="form-text text-muted">Insert your full name</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="" />
        <small id="emailHelper" class="form-text text-muted">Insert your email</small>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        <small id="messagelHelper" class="form-text text-muted">Insert your message</small>
      </div>

      <button type="submit" class="btn btn-dark">Send</button>

    </form>
  </div>

</main>


<?php include_once __DIR__ . '/layouts/foot.php'; ?>