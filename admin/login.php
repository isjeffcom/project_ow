<html>
<head>
  <title>Test Title</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8">
</head>
<?php require_once('../checker/logincheck.php'); ?>

	<style>
		.removeBtn {
			display: none;
		}
	</style>

	</head>


	<body>
		<?php echo '<script>localStorage.clear();</script>';?>

		<!--NAV END-->
		<div class="columns_form">
      <a href='signup.php'>Sign Up?</a>
			<figure>

				<form action="../services/loginfunc.php" method="post">

					<a>Username: <input type="text" name="username"/></a>

					<a>Password: <input type="password" name="password"/></a><br>

					<input type="submit" name="submit" value="go"/>



				</form>
			</figure>
		</div>

	</body>
</html>
