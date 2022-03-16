<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <style>
        
        header .container > .d-flex{
            align-items: center;
            justify-content: space-between;
            text-transform: uppercase;
           
        }
        header .container > .d-flex > a{
            font-size: 18px;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
            padding: 20px 0px;
            
            
        }
        header .container > .d-flex > a::after{
            content: '' ;
            width: 0%;
            height: 2px;
            background-color: #f44336;
            display: block;
            margin: auto;
            transition: 0.5s;
            cursor: pointer;
        }
        header .container > .d-flex > a:hover::after{
            width: 100%;
        }






    </style>
</head>
<body>

    <header>
       <div class="bg-success">
       <div class="container">
            <div class="d-flex">
            <a href="information.php">Car Information</a>        
            <a href="informationadd.php">Car Information Add</a>        
            <a href="index.php" class="text-center"> 
                <img src="img/man.png" alt="icone" width="20px" height="20px"><br>
                <span><?=$_SESSION['user'] ?? null?></span>
            </a>        
        </div>
        </div>
       </div>
        
    </header>
