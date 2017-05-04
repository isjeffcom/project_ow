<head>
  <title>OverMark - SERCURTY CHECKER</title>
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
		echo "<script>alert('You already Sign in');window.location.href='./index.php'</script>";
		exit();
	}
?>
