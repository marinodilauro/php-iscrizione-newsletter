<?php
require_once __DIR__ . '/helpers/functions.php';


// var_dump($_GET);

$email = $_GET['email'];


// var_dump(isset($email));

if (isset($email)) {

  // var_dump($email);

  // check if emails contains '@' and '.'

  // var_dump(str_contains($email, '@'), str_contains($email, '.'));

  $response = checkEmail($email);

  $message = generateAlertMessage($response);

  // var_dump($message);
  // var_dump($response);
  // var_dump($_GET);
  session_start();

  $_SESSION['message'] = $message;

  // $_SESSION['message'] = $message;

  // var_dump($_SESSION);

  if ($response == true) {
    header('Location: ./subscribed.php');
  } else {
    header('Location: ./index.php');
  }
}
