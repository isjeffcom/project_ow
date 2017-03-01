<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>


<?php
/**
 * Create by WU JIANFENG
 * 2016/3/29
 * Pucun-Takeaway WebApp
 * If login Function
 */
 	session_start();

	if(isset($_SESSION['userid'])){
    if($_SESSION['usertype'] != '1'){
      echo "<script>alert('You are not admin');window.location.href='../index.php'</script>";
      exit();
    }else{
      //do nothing
    }

	}else{
    echo "<script>alert('Log in first');window.location.href='../index.php'</script>";
    exit();
  }
?>
