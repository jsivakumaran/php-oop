<?php
  //Load the class
  require 'classes/Form.php';
  //Instantiate a form object
  $form = new Form();
  var_dump($form);

  //Instantiates another form object
  $anotherForm = new Form();
  var_dump($anotherForm);

  echo PHP_EOL;

  //Verify the data type
  echo gettype($form);

  //Destroying the object
  $form = null;
  //another way of destroying the object
  unset($anotherForm);
