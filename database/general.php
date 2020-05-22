<?php

function output_errors($errors)
{
    $val = '';
    foreach($errors as $error)
    {
      $val .= '<div class="alert alert-danger">' . $error . '</div>';
    }
    return $val;
}

function protect_page()
{
  if(logged_in() === false )
  {
    header('Location: login.php');
    exit();
  }
}

function logged_in_redirect()
{
  if(logged_in() === true )
  {
    header('Location: index.php');
    exit();
  }
}
?>
