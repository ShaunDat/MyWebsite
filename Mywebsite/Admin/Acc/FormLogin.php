<!doctype html>
<html>
<head>
	<style> table ,td, tr{border: 1px solid rgba rgba(0,0,0,1.00);
		border-collapse: collapse;
		}
		table{
			
		}
	</style>
<meta charset="utf-8">
<title>democode 13</title>
</head>

<body>
<form method= "post"> 
	<table>
		<tr>
		<td><p style="font-size: 35px"> Sign in to GitHub</p></td>
		</tr>
		<tr>
		<td><label> Username or email address</label></td>
		</tr>
		<tr>
		<td><input type="text" required placeholder="UserName" name="UserName"></td>
		</tr>
		<tr>
		<td><ladel> Password </ladel></td>
		</tr>
		<tr>
		<td><input type="Password" required placeholder="Password" name = "Password"></td>
		</tr>
		<tr>
		<td>
		<a href="/Mywebsite/Admin/Acc/FormResetPass.php">Forgot password?</a></td>
		</tr>
		<td><input type="submit" value="Login" name="Login"></td>
		<tr>
			<td><label>New to GitHub? <a href ="/Mywebsite/Admin/Acc/FormSignUp.php">Create an account.</a></label></td>	
		</tr>					  
	</table>
	</form>
	<?php 
	include("../Repeat/Connect.php");
	// mysqli_set_charset($connect,"utf8");
	 if(isset($_POST['Login'])){
		 $UserName = $_POST['UserName'];
		 $Password = $_POST['Password'];
		 $sql = "select * from users where UserName = '$UserName' AND Password = '$Password'"; 
		 $result = mysqli_query($connect,$sql);
		 $checkLogin = mysqli_num_rows($result);
		 if($checkLogin == 0)
		 {
			 echo "<script>alert('Password or username is incorrert, please try again!') </script>";
			 exit();
		 }
		 if($checkLogin> 0)
		 {
			 echo"<script>alert('You have logged in succesfully!')</script>";
		 }
	 }
	?>
</body>
</html>