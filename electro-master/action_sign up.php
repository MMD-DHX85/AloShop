<?php 
	session_start();
	
	$FName=$_POST['Fname'];
	$LName=$_POST['Lname'];
	$Password=$_POST['password'];
	$Username=$_POST['username'];
	$Email=$_POST['Email'];
	
	$conn=new PDO("mysql:host=localhost;dbname=Online_Shop","root","");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("INSERT INTO users('First_Name','Last_Name','Username','Password','Email','Type') VALUES ('$FName','$LName','$Username','$Password','$Email','2');");
	$stmt->execute();
	
	if($stmt)
	{
		$_SESSION['FName']=$FName;
		$_SESSION['login']=true;
		header("Location: Index.php?message=Signup_success");
		exit();
	}
	else
	{
		header("Location: Index.php?message=Signup_failed");
		exit();
	}