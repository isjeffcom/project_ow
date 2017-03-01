<?php include('../checker/admincheck.php'); ?>

<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>

<body>

	<?php

  $username = $_SESSION['username'];
	?>

  <h1>Content Management:</h1>

  <?php
  echo "<a href='../services/loginfunc.php?action=logout'>Log Out</a>";

  ?>

	<div class="columns_form">

			<figure>

				<form action="../services/updatefunc.php" method="post">

						<h1>Verify Password</h1><br><br>
						<a>Current Password<input type="password" name="orpassword"/></a>

						<h1>User Information</h1><br><br>
					    <a>Username: <?php echo htmlspecialchars($username) ?></a>
							<br><br><br><br>

					    <a>New Password<input type="password" name="newpassword"/></a>
							<br><br><br><br>

              <input type='Submit' name='Submit' value='Change'/>

              <h1>Hero Data</h1>

              <!--a href='update.php'>One-click update from Overbuff.com</a-->

              <br><br>
          </form>
              <?php
              include('../services/connect.php');
              $sql = "SELECT * FROM py";
              $sqlrun = mysqli_query($link,$sql);
              $rownum = mysqli_num_rows($sqlrun);
              while ($row = mysqli_fetch_array($sqlrun)){
                echo "<form action='../services/updatefunc.php' method='post' enctype='multipart/form-data'>";
                echo "<div style='display:none'><a>Id:</a><input type='text' name='hId' value='".$row[0]."'/></div><br>";
                echo "<div><a>Name:</a><input type='text' name='hName' value='".$row[1]."'/><br>";
                echo "<a>Popularity:</a><input type='text' name='hPopularity' value='".$row[3]."'/><br>";
                echo "<a>Picked:</a><input type='text' name='hPicked' value='".$row[4]."'/><br>";
                echo "<a>Win Rate:</a><input type='text' name='hWR' value='".$row[5]."'/><br>";
                echo "<a>On Fire:</a><input type='text' name='hOF' value='".$row[6]."'/><br>";
                echo "<a>E:D Ratio:</a><input type='text' name='hEDR' value='".$row[7]."'/><br>";
                echo "<a>Eliminations:</a><input type='text' name='hEliminations' value='".$row[8]."'/><br>";
                echo "<a>Object Elimations:</a><input type='text' name='hOE' value='".$row[9]."'/><br>";
                echo "<a>Object Time:</a><input type='text' name='hOT' value='".$row[10]."'/><br>";
                echo "<a>Damage:</a><input type='text' name='hDamage' value='".$row[11]."'/><br>";
                echo "<a>Healing:</a><input type='text' name='hHealing' value='".$row[12]."'/><br>";
                echo "<a>Blocked:</a><input type='text' name='hBlocked' value='".$row[13]."'/><br>";
                echo "<a>Deaths:</a><input type='text' name='hDeaths' value='".$row[14]."'/><br>";
                echo "<a>E:D ratio Re:</a><input type='text' name='hEDRR' value='".$row[15]."'/><br>";
                echo "<a>Eliminations:</a><input type='text' name='hE' value='".$row[16]."'/><br>";
                echo "<a>Solo Kills:</a><input type='text' name='hSK' value='".$row[17]."'/><br>";
                echo "<a>Final Blows:</a><input type='text' name='hFB' value='".$row[18]."'/><br>";
                echo "<a>Medals:</a><input type='text' name='hMedals' value='".$row[19]."'/><br>";
                echo "<a>Gold:</a><input type='text' name='hGold' value='".$row[20]."'/><br>";
                echo "<a>Silver:</a><input type='text' name='hSilver' value='".$row[21]."'/><br>";
                echo "<a>Bronze:</a><input type='text' name='hBronze' value='".$row[22]."'/><br>";
                echo "<a>Cards:</a><input type='text' name='hCards' value='".$row[23]."'/><br>";
                echo "<a>Image:</a><img src='.".$row[24]."'/>";
                echo "<input type='hidden' name='mpic' value='".$row['24']."'/>";
                echo "<input type='file' name='fileToUpload' id='fileToUpload'/><br><br>";
                echo "<input type='Submit' name='Submit' value='Submit'/></div></form><br><br>";

              }
              ?>



			</figure>
		</div>

</body>
