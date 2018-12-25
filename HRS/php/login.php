
<!DOCTYPE html>
<html>
<head>
  <title>Admin View</title>
  <link rel="icon" href="../images/title/logo.png">
	<link href="../css/login.css" rel="stylesheet" type="text/css">
  <?php require 'connect_to_mysql.php'; ?>
</head>
<body>
  <header>
  
	<div>
	<center><span id="heading">Admin Log-in</span></center>
</div>
	<div class="general_btn">
  <form action="loginn.php" method="POST" />
  		<center>
  				<label class="write">Username</label>
                  <input type="text" class ="text" size="10" name="uname" /><br><br>
                  <label class="write">Password</label>
					<input type="password" class ="text" size="10" name="pass"><br><br>
					<button class ="text" type="login"><b>Login</b></button>
					
				</center>
					</form>
        </div>

        <div>
        	<center>
        		<a href="homepage.php">
        	<button class ="home" type="button"><b>Back to Homepage</b></button>
        </center>
        </div>
        </header>
</body>
</html>