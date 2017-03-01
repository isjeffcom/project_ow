<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>
<?php
/**
 * Create by WU JIANFENG
 * 2016/3/29
 * Pucun-Takeaway WebApp
 * Signup Function
 */
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Signup"){
        $user = $_POST["username"];
        $psw = $_POST["password"];
				$psw_confirm = $_POST["confirm"];
				include('../checker/scycheck.php');
				//check invitecode
        if ($user == "" || $psw == "" || $psw_confirm == ""){
            echo "<script>alert('Please confirm your information');history.go(-1);</script>";
			         exit();
        }else{


  			//Check password > 6
        if ($psw == $psw_confirm && strlen($psw) >= 6){
          //connect to database
          include('./connect.php');
          $checkUN = "SELECT username FROM user WHERE username = '$_POST[username]'";
          $resultUN = mysqli_query($link,$checkUN);
          $cnm = mysqli_num_rows($resultUN);
  				//check if the username already exist
                  if ($cnm){
                      echo "<script>alert('Username already exist');history.go(-1);</script>";
                  }else{
                  	//Encryption the password by hash method
                  	  $psw = password_hash($psw,PASSWORD_DEFAULT);
                      $sql_insert = "INSERT INTO user (username,password,usertype) VALUES('$user','$psw','1')";
                      $res_insert = mysqli_query($link,$sql_insert);
                      if ($res_insert){
              						echo "<script>alert('Signin Successful');window.location.href='../admin/login.php';</script>";
              					}else{
              						//CAN NOT CONNECTED TO DATABASE
              						echo mysqli_error($link);
                          echo "<script>alert('Something wrong...');</script>";
                                  }
                      }
            }else{
            	//COMFIRM PASSWORD NOT RIGHT
                echo "<script>alert('Check it again');history.go(-1);</script>";
            }
        }
    }else{
		//CANT FIND SUBMIT BUTTON
        echo "<script>alert('Something wrong here...');history.go(-1);</script>";
	}
?>
