<?php

  $command = escapeshellcmd('../py/update.py');
  $output = shell_exec($command);
  if($output){
    echo "<script>alert('Your database is successfully updated from Overbuff.com');history.go(-1)</script>";
  }else{
    echo "<script>alert('Your services is not supported python script, please update manually');history.go(-1)</script>";
  }

  echo $output;

?>
