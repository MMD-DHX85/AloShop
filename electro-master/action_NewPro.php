<?php
session_start();


    
    $ProName = $_POST['ProName'];
    $ProBrand = $_POST['ProBrand'];
    $ProCat = $_POST['ProCat'];
    $ProPrice = $_POST['ProPrice'];
    $ProIntro = $_POST['ProIntro'];
    $ProQty = $_POST['ProQty'];
    $ProDetail = $_POST['ProDetail'];
    $ProDesc = $_POST['ProDesc'];
    
    $conn = new PDO("mysql:host=localhost;dbname=Online_Shop", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt2=$conn->prepare("ALTER TABLE `products` AUTO_INCREMENT = 1;");
    $stmt2->execute();
    $stmt = $conn->prepare("INSERT INTO `products` (`Pro_Name`, `Pro_Brand`, `Pro_Cat`, `Pro_Price`, `Pro_Qty`, `Pro_Intro`, `Pro_Desc`, `Pro_Detail`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$ProName, $ProBrand, $ProCat, $ProPrice, $ProQty, $ProIntro, $ProDesc, $ProDetail]);
    $stmt3=$conn->prepare("SELECT Pro_Code FROM `products` ORDER BY `Pro_Code` DESC LIMIT 1;");
    $stmt3->execute();
    $xx=$stmt3->fetch(PDO::FETCH_ASSOC);
    
    $ffile=$_FILES['ProPic'];
    $numFiles=count($ffile['name']);
    for($i=0; $i<$numFiles; $i++)
    {
        $ProPic = $ffile['name'][$i];
        $fileup = $ffile['tmp_name'][$i];
        
        $imginfo = getimagesize($fileup);
        if ($imginfo !== false)
        {
            $imgType=$_FILES['ProPic']['type'][$i];
            if ($imgType == "image/png" || $imgType == "image/jpeg" || $imgType == "image/gif")
            {
                $source=$fileup;
                $target=""; 
                $ext = pathinfo($ProPic, PATHINFO_EXTENSION);
                if($i===0)
                {
                    $target= "C:/wamp64/www/electro-master/img/store\\" . $xx['Pro_Code'] . "." . $ext;    
                }
                else
                {
                    $target= "C:/wamp64/www/electro-master/img/product\\" . $xx['Pro_Code'] . "-" . $i+1 . "." . $ext;
                }
                move_uploaded_file($source, $target);
                
                $stmtPic=$conn->prepare("INSERT INTO `image` (`Path`, `Pro_Name`, `Pro_Code`) VALUES ('$target', '$ProName', {$xx['Pro_Code']});");
                $stmtPic->execute();
                exit();
            }
        }   
    }