<?php
  include __DIR__ . '/database.php';

  $database_json = json_encode($database);
  header('Content-Type: application/json');

  // if($_GET['autore'] != '') {
  //   foreach ($database as $value) {
  //     var_dump($value);
  //   }
  // }
  echo $database_json;

?>
