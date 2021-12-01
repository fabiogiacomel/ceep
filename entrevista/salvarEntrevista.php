<?php
  if (empty($_POST["P1"])) {
    $p1 = "";
  } else {
    $p1 = test_input($_POST["P1"]);
  }

  if (empty($_POST["P2"])) {
    $p2 = "";
  } else {
    $p2 = test_input($_POST["P2"]);
  }

  if (empty($_POST["P3"])) {
    $p3 = "";
  } else {
    $p3 = test_input($_POST["P3"]);
  }

  if (empty($_POST["P4"])) {
    $p4 = "";
  } else {
    $p4 = test_input($_POST["P4"]);
  }

  if (empty($_POST["P5"])) {
    $p5 = "";
  } else {
    $p5 = test_input($_POST["P5"]);
  }

  if (empty($_POST["P6"])) {
    $p6 = "";
  } else {
    $p6 = test_input($_POST["P6"]);
  }

  if (empty($_POST["P7"])) {
    $p7 = "";
  } else {
    $p7 = test_input($_POST["P7"]);
  }

  if (empty($_POST["P8"])) {
    $p8 = "";
  } else {
    $p8 = test_input($_POST["P8"]);
  }

  if (empty($_POST["P9"])) {
    $p9 = "";
  } else {
    $p9 = test_input($_POST["P9"]);
  }

  if (empty($_POST["P10"])) {
    $p10 = "";
  } else {
    $p10 = test_input($_POST["P10"]);
  }

  if (empty($_POST["P11"])) {
    $p11 = "";
  } else {
    $p11 = test_input($_POST["P11"]);
  }

echo $p1, $p2, $p3, $p4, $p5; 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>