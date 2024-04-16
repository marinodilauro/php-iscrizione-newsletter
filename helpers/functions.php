<?php


/**
 * Generate alert message using a given true/false response paramenter.
 * @param string $response A true/false value.
 * @return array
 */
function generateAlertMessage($response) {
    if($response) {
     return  [
      'status' => 'success',
      'content' => 'Email is valid'
    ];
    } 
     return [
      'status' => 'danger',
      'content' => 'Email must contain @ and .'
    ];

}

/**
 * Check if email contains a '@' and a '.' .
 * @param string $mail The email to check.
 * @return boolean
 */
function checkEmail($mail) {

  if(str_contains($mail, '@') && str_contains($mail, '.')) {
    return true;
  } 
  return false;

}

?>