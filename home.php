<html>
<body bgcolor="lightpink">
<h1>Hey,
 <?php 
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?> <br>Welcome</h1>
    <h3> <?php echo "<br>Session started";?></h3>
<a href="logout.php"> Logout </a>
</body>
</html>
