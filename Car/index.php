<?php
include "header.php";
if(!isset($_SESSION['user'])){
    header("location:login.php");

  }

?>



    <style>
                body{
    
    background: linear-gradient(rgba(0,0,0,0.50), rgba(0,0,0,0.50)), url('./img/banner.png');
    background-position: center;
    background-size: cover;
    height: 100vh;
    background-repeat: no-repeat;
    
    
        } -->





        slider */
        
         .title{
            font-size: 70px;
            line-height: 100px;
            height: 100px;
            text-align: left;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            color: #fff;
            top: 40%;
            transform: translateY(-50%);
            position: absolute;
            transform: translateX(50%);
        }
        .slider{
            color: #ffc107;
            margin-left: 12px;
            box-sizing: border-box;
            animation: slider 6s linear infinite;
        }
        @keyframes slider{
            0%{margin-top:  -200px;}
            30%{margin-top:  -200px;}
            35%{margin-top:  0px;}
            65%{margin-top:  0px;}
            70%{margin-top:  200px;}
            100%{margin-top:  200px;}
        }


     </style> 
</head>
<body>
    

<div class="container">
            <div class="content">
                <div class="title">Make Website
                    <div class="slider">
                        <div> NOW</div>
                        <div> TODAY</div>
                        <div> FREE</div>
                    </div>
                </div>
            </div>
        </div>






    


    

<?php include "fooder.php"; ?>