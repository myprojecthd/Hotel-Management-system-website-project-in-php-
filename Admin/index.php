<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="#">Home</a></li>
					<li><a href="#">Contect Us</a></li>
					<li><a href="#">BOOK MY STAY</a></li>
					<li><a href="#">Our Hotel</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Password</td>
	       		<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px;height: 50px;border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['sub']))
           {
           	     $un=$_POST['un'];
           	     $ps=$_POST['ps'];
           	    $q1="select * from admin";
           	    $run=mysqli_query($a,$q1);
           	    $row=mysqli_fetch_array($run);
           	     $u=$row['un'];
           	     $p=$row['ps'];
           	     if($un==$u&& $ps==$p)
           	     {
           	     	header("Location:ahome.php");
           	     }
           	     else
           	     {
           	     	header("Location:index.php?Wrong User");
           	     }

           }
           
	       ?>	
	</div></center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>