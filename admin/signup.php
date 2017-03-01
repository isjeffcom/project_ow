<html>

<?php include('../checker/logincheck.php'); ?>

  <head>
    <title>Test Title</title>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
  </head>


	<body>

		<!--NAV START-->

		    <nav class="navbar navbar-inverse" >

				<div>
				    <ul class="nav navbar-nav navbar-right">
					    <li><a><span class="nav menu"></span>Already have account?</a></li>
						<li><a href="login.php"><span class="nav menu"></span>Sign In</a></li>
					</ul>
				</div>
			</nav>

			<!--NAV END-->
		<div class="columns_form">
			<figure>
				<form action="../services/signupfunc.php" method="post">

				    <a>Username：<input type="text" name="username" /></a>
				    <a>[English and number only]</a><br>
				    <br />

				    <a>Password：<input type="password" name="password" /></a>
				    <a>[English and number only]</a><br>
				    <br/>

				    <a>Password Confirm：<input type="password" name="confirm"/></a>
				    <br />

				    <input type="Submit" name="Submit" value="Signup"/>
				</form>
			</figure>

		</div>

	</body>
</html>
