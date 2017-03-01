<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>

<?php
/**
 * Create by WU JIANFENG
 * 2016/3/29
 * Pucun-Takeaway WebApp
 * User Center function
 */
    session_start();
		include('./connect.php');
		//CHECK IF SUBMIT BUTTON BEEN MODIFY
		if(isset($_POST["Submit"]) && $_POST["Submit"] == "Change"){
			$orpsw = $_POST["orpassword"];
			$newpsw = $_POST["newpassword"];
      $userid = $_SESSION['userid'];
			//LOAD SQL INJECT PROTECTOR
			include('../../checker/scycheck.php');
			//Return userid by username and display
			$sqlpsw = "select password from user where id = '$userid'";
			$userpswrun = mysqli_query($link, $sqlpsw);
			$userpswt = mysqli_fetch_array($userpswrun);
			if(password_verify($orpsw,$userpswt[0])){
					//DATABASE CONTROLLER - UPDATE DATABASE DATA
					$newpsw = password_hash($newpsw,PASSWORD_DEFAULT);
			        $sql_update_psw = "UPDATE user SET password = '$newpsw' WHERE id='$userid'";
			        $res_update_psw = mysqli_query($link,$sql_update_psw);
						//IF USER CHANGE PASSWORD -> UNSET SESSION TO FORCE USER RE-LOGIN
						if ($res_update_psw){
		            unset($_SESSION['userid']);
								unset($_SESSION['username']);
								unset($_SESSION['usertype']);
		                        echo "<script>alert('Change Successful, please re login'); window.location.href='../admin/login.php';</script>";
							}else{
								//DATABASE ERROR
		                        echo "<script>alert('Something wrong');history.go(-1);</script>";
		                    }

			}else{
				echo "<script>alert('Please input right old password');history.go(-1);</script>";
			}
		}

    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Submit"){

      include('./uploadfunc.php');

      $hId = $_POST['hId'];
      $hName = $_POST['hName'];
      $hPopularity = $_POST['hPopularity'];
      $hPicked = $_POST['hPicked'];
      $hWR = $_POST['hWR'];
      $hOF = $_POST['hOF'];
      $hEDR = $_POST['hEDR'];
      $hEliminations = $_POST['hEliminations'];
      $hOE = $_POST['hOE'];
      $hOT = $_POST['hOT'];
      $hDamage = $_POST['hDamage'];
      $hHealing = $_POST['hHealing'];
      $hBlocked = $_POST['hBlocked'];
      $hDeaths = $_POST['hDeaths'];
      $hEDRR = $_POST['hEDRR'];
      $hE = $_POST['hE'];
      $hSK = $_POST['hSK'];
      $hFB = $_POST['hFB'];
      $hMedals = $_POST['hMedals'];
      $hGold = $_POST['hGold'];
      $hSilver = $_POST['hSilver'];
      $hBronze = $_POST['hBronze'];
      $hCards = $_POST['hCards'];

      //tf From Upload function
  		if(isset($tf)){
  			//If user upload
  			$mPic = $tf;
  		}else{
  			//If the picture is nopic.jpg
  			if($_POST["mpic"] == "./img/hero/genji.jpg"){
  				$mPic = "";
  			}else{
  				//Otherwise use old picture
  				$mPic = $_POST["mpic"];
  			}
  		}


      $update_sql="UPDATE  py SET name='$hName', popularity='$hPopularity', picked='$hPicked'
                   ,win_rate='$hWR', on_fire='$hOF', ed_ratio='$hEDR', elimis='$hEliminations', obj_elims='$hOE'
                   ,obj_time='$hOT', damage='$hDamage', healing='$hHealing', blocked='$hBlocked', deaths='$hDeaths'
                   ,ed_ratio_re='$hEDRR', eliminations='$hE', solo_kills='$hSK', final_blows='$hFB', medals='$hMedals'
                   ,gold='$hGold', silver='$hSilver', bronze='$hBronze', cards='$hCards', img='$mPic' WHERE id='$hId'";

      $updateSqlRun = mysqli_query($link, $update_sql);
      if($updateSqlRun){
        echo "<script>alert('Update Successful');history.go(-1);</script>";
      }else{
        echo "<script>alert('Can not update database');history.go(-1);</script>";
      }
    }
?>
