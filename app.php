<?php

  include "services/message.php";
  include "services/validate.php";
  include "services/category.php";

  $post = $_POST;
  $dates = [ 'name', 'age' ];

  define_category( $post['name'], $post['age'] );

  header('Location: index.php');

?>