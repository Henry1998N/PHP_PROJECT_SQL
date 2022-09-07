
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="login-box">
	<h2>Login</h2>
	<form action="checklog1.php" method="POST">
		<div class="user-box">
			<input type="email" name="Email" required="" value="<?php if(isset($_COOKIE['Email'])) echo $_COOKIE['Email'] ?>">
			<label for="">Email</label>
		</div>
		<div class="user-box">
			<input type="password" name="Password" value="<?php if(isset($_COOKIE['Password'])) echo $_COOKIE['Password'] ?>">
			<label for="">Password</label>
		</div>
		<div>

			<input type="checkbox" name="check">
			<label for="" style="color:#30E9F4">Remember me</label>

		</div>
		<div>
		<a><button type="submit" class="btn btn-outline-light">Login</button></a>
        <a href="managerlogin.php"><button type="button" class="btn btn-outline-light">Manager Login</button></a>
        <a class="anchor" href="signup1.php">Sign Up</a>
		</div>
        </div>

		</div>
	</form>
</div>
<?php 
if(!(isset($_SESSION["counter_load1"]))){
    $_SESSION["counter_load1"]=0;}
echo "<b>","You tried : ",$_SESSION["counter_load1"],"</b>"; ?>

