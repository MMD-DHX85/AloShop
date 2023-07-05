<?php
session_start();
if(isset($_POST['submit']))
{
    $ProCode=$_POST['ProCode'];
    $ProName=$_POST['ProName'];
    $ProBrand=$_POST['ProBrand'];
    $ProCat=$_POST['ProCat'];
    $ProPrice=$_POST['ProPrice'];
    $ProIntro=$_POST['ProIntro'];
    $ProQty=$_POST['ProQty'];
    $ProDetail=$_POST['ProDetail'];
    $ProDesc=$_POST['ProDesc'];

    $conn=new PDO("mysql:host=localhost;dbname=Online_Shop","root","");
    $err=$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO products('Pro_Code', 'Pro_Name', 'Pro_Brand', 'Pro_Cat', 'Pro_Price', 'Pro_Qty', 'Pro_Intro', 'Pro_Desc', 'Pro_Detail') VALUES ('$ProCode', '$ProName', '$ProBrand', '$ProCat', '$ProPrice', '$ProQty', '$ProIntro', '$ProDesc', '$ProDetail')");
    $stmt->execute();
    $row=$stmt->fetch();

    $ProPic=$_POST['ProPic'];
    $fileup=$_FILES["fileToUpload"]["temp_name"];
    $imginfo=getimagesize($fileup);
    if($imginfo!== false)
    {
        $imgType=$imginfo['2'];
        if($imgType==IMAGETYPE_PNG || $imgType==IMAGETYPE_JPEG || $imgType==IMAGETYPE_GIF)
        {
            
        }
    }
}