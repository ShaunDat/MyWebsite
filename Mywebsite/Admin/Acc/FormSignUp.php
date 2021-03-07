<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form sign up</title>
</head>

<body>
	<form method="post">
	<table> 
		<p style="font-size: 40px">Create your account</p>
		<tr>
		<td><label>UserId</label></td>
		</tr>
		<tr>
		<td><input type="text" required placeholder="UserID" name="UserID"></td>
		</tr>
		<tr>
		<td><label>Username</label></td>
		</tr>
		<tr>
		<td><input type="text" required placeholder="Username" name="UserName"></td>
		</tr>
		<tr><td><label>Email address</label></td>
		</tr>
		<tr><td><input type="text" required placeholder="Email address" name="EmailAddress"></td>
		</tr>
		<tr><td><ladel> Password </ladel></td>
		</tr>
		<tr><td><input type="Password" required placeholder="Password" name="Password"></td>
		</tr>
		<tr><td><input type="submit" value="Create account" name="register" ></td>
		</tr>
		<tr><td><input type="button" value="Login"> <a href="/Mywebsite/Admin/Acc/FormLogin.php"></a></td>
		</tr>
	</table>
	</form>
	<?php 
	include("../Repeat/Connect.php");
	mysqli_set_charset($connect,"utf8");
	if(isset($_POST['register'])){
	$UserID = $_POST['UserID'];
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	$EmailAddress =$_POST['EmailAddress'];
	$sql="Insert into users values ('$UserID','$UserName','$Password','$EmailAddress')";
	$result = mysqli_query($connect,$sql);
	if($result){
		echo"<script>alert('Account has been created successfully!')</script>";
		echo"<script>window.open('FormLogin.php','_self')</script>";
	}
		else{
		echo"<script>alert('Error')</script>";
	}
}
	?>
</body>
</html>
