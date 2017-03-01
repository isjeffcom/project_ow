<?php

  header('Content-Type: application/json');
  //$heroName = isset($_POST['heroName']) ? $_POST['heroName'] : null;

  include('./connect.php');

  $sql = "SELECT * FROM py";
  $result = $link->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $jsonArr[] = $row;
      }
  }

  echo stripslashes(json_encode($jsonArr));

?>
