<?php

  header('Content-Type: application/json');

  require_once('connect.php');

  $con = mysqli_connect($h, $u,$p, $n);

  if(!$con) exit('db error, server returned: '.mysqli_connect_error());

  $sql = "SELECT * FROM tables";

  $res = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($res))
  {
    $json[] = $row;
  }

  mysqli_close($con);
  echo json_encode($json);

?>
