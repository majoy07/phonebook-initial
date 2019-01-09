<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="photos/pexels-photo-269481.jpeg" alt="Responsive background-image" >
<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="form">
<h1><font face="Cooper Black"><font color="white">Welcome <?php echo $_SESSION['username']; ?>!</font></font></h1>
<br/><br/>
<p><a href="dashboard.php"><font color="yellow">Dashboard</font></a></p>
<a href="logout.php"><font color="yellow">Logout</font></a>
</div>
</center>
</body>
</html>