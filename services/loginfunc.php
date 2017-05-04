<!--CREATE BY WU JIANFENG IN APRIL 11 2016-->

<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>
<?php
/**
 * For Project_OW this is coping from an old project of my that is why still using non-OO Coding style
 * Login-Database-Test
 * Developer: JEFF-PC
 * Date: 2015/7/14
 * Time: 16:48
 */
 //Start SESSION Function
 session_start();


	//If user click submit button and content is 'submit'
    if(isset($_POST["submit"]) && $_POST["submit"] == "go"){
  		$user = $_POST["username"];
  		$psw = $_POST["password"];
  		//Security Check important
  		if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["username"])){
  			echo "<script>alert('Username Unvaild'); history.go(-1)</script>";
  			exit();
  		}
  		if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["password"])){
  			echo "<script>alert('Password Unvaild'); history.go(-1)</script>";
  			exit();
  		}
  		//Check if user actually input username and password
  		if($user == "" || $psw == ""){
  			echo " <script>alert('Username or Password is empty'); history.go(-1)</script> ";
  		}else{
  			//Find the username and return a number
  			include('./connect.php');
  			$sqlcheck = "SELECT username,password FROM user WHERE username = '$user'";
  			$sqlcheckrun = mysqli_query($link,$sqlcheck);
  			$num = mysqli_num_rows($sqlcheckrun);
  			//If the username exist
  			if($num){
  				$row = mysqli_fetch_array($sqlcheckrun); //change data type to what can print
  				//Return psw by username and display
  				$sqlpsw = "SELECT password FROM user WHERE username = '$row[0]'";
  				$userpswrun = mysqli_query($link, $sqlpsw);
  				$userpswt = mysqli_fetch_array($userpswrun);
  					//Verify the password which is been encryption
  					if(password_verify($psw,$userpswt[0])){
  						//Return userid by username and display
  						$sqlid = "SELECT id, usertype FROM user WHERE username = '$row[0]'";
  						$useridrun = mysqli_query($link, $sqlid);
  						$useridt = mysqli_fetch_array($useridrun);
  						//write username id and type to SESSION
  						$_SESSION['username'] = $row[0];
  						$_SESSION['userid'] = $useridt[0];
  						$_SESSION['usertype'] = $useridt[1];
  						$userstatus = $_SESSION['username'];
  						echo "'Welcome','$row[0]','log in...'";
  						//alert
  						echo "<script>alert('Login Successful');window.location.href='../admin/index.php';</script>";
  					//If password not right
  					}else{
  						echo "<script>alert('Username or Password Wrong');history.go(-1);</script>";
  					}
  			//If user does not exist
  			}else{
  				echo"<script>alert('User does not exist');history.go(-1);</script>";
  			}
  		}
	//If no login button that the website is close 如果不存在提交按钮则识别为站点已经被关闭，提示内容并自动返回上一步
	}else{
	    echo"<script>alert('The Site has close');history.go(-1);</script>";
    }
	//Print database connect error 打印数据库报错信息（如果有）
	echo mysqli_error();
	//If logout unset the SESSION 登出，撤销所有SESSION数据
	if($_GET['action'] == "logout"){
		unset($_SESSION['userid']);
		unset($_SESSION['username']);
		unset($_SESSION['usertype']);
		session_destroy();
		//跳转至登陆界面
		header("Location:../admin/login.php");
	}





?>
</html>
