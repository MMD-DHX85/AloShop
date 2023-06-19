<?php 
	session_start();
	
	$Password=$_POST['password'];
	$Username=$_POST['username'];
	
	$conn=new PDO("mysql:host=localhost;dbname=Online_Shop","root","");
	$err=$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM users WHERE Username='$Username' AND Password='$Password';");
	$stmt->execute();
	$row=$stmt->fetch();
	
	if(!empty($err))
	{
		if($stmt->rowCount()==1)
		{
			if($row['Type']==2)
			{	$_SESSION['FName']=$row['First_Name'];
				$_SESSION['login']=true;
				header("Location: Index.php?message=login_success");
				exit();
			}
			
			else if($row['Type']==1)
			{
				$_SESSION['FName']=$row['First_Name'];
				$_SESSION['admin']=true;
				header("Location: Index.php?message=login_success");
				exit();
			}
		}
		
		else
		{
			header("Location: Index.php?message=Wrong_pass");
			exit();
		}
		
		
	}
	else
	{
		header("Location: Index.php?message=login_error");
		exit();
	}
	?>