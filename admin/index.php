<?php
	require_once('./scripts/config.php');
	confirm_logged_in();
	greeting();
	$message = greeting();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome <?php echo $_SESSION['user_name'] ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/foundation.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Oswald:200,400,600|Roboto" rel="stylesheet">
	<script src="../js/main.js"></script>
</head>
<body>
	<div class="adminContainer">
		<div id="dashContainer">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns align-center">
					<h1 id="dashTitle">Admin Dashboard</h1>
					<h2 id="dashWelcome">Welcome <?php echo $_SESSION['user_name'] ?></h2>
					<div id="greeting">
						<?php if(!empty($message)):?>
						<p><?php echo $message;?></p>
						<?php endif?>
					</div>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="admin_createuser.php">Create User</a></li>
					<li><a href="admin_edituser.php">Edit User</a></li>
					<li><a href="admin_deleteuser.php">Delete User</a></li>
				</ul>
				<ul>
					<li><a href="admin_storylist.php">Manage Stories</a></li>
				</ul>
				<ul>
					<li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
				</ul>
			</nav>
		</div>
	</div>
	
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>