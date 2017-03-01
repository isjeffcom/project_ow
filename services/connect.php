<?php


/**
* Created by JIANFENG WU
* Connect to Database
* Date:2017.02.20
*/

  $link = mysqli_connect('localhost', 'root', '123321', 'py');
  mysqli_select_db($link, 'py');
  mysqli_query($link, 'set name utf8');

?>
