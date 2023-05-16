<?php

require_once('config/db.php');
$query = "select * from tblscinfo";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,800;1,900&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="MainProgStyle.css">
    <link rel="icon" href="48.png" type="image/png">
    <title>Dashboard</title>
</head>
<body>

    <div class="container">

        <nav>
            <div class="brngyLbl">BARANGAY 48, PASAY CITY</div>
                <ul class="navItems">
                    <li id = "db"><a href="userdashboard.php">DASHBOARD</li>
                    <li id = "sc"><a href="indexuser.php">SENIOR CITIZENS</li>
                </ul>

                <div class="logo">
                    <a href="#"><img src="pasay-logo-small.png" alt="PasayLogo" id="brngyPic"></i></a>
                </div>
        </nav>

        <div id="DataContainer">
            <div id="official-lbl"><p>CURRENT BARANGAY OFFICIALS</p></div>
            
            <div class="authorities">
                <div class="row1">

                    <div class="col1">
                        <img src="kapitann.png" alt="">
                        <h2>Hon. Thomas Omaña II</h2>
                        <p>Punong Barangay</p>
                    </div>

                    <div class="col2">
                        <img src="kagawadallan.png" alt="">
                        <h2>Hon. Allan Ko</h2>
                        <p>Kagawad</p>
                    </div>

                    <div class="col3">
                        <img src="kagawadarnel.png" alt="">
                        <h2>Hon. Arnel Diaz</h2>
                        <p>Kagawad</p>
                    </div>

                    <div class="col4">
                        <img src="kagawadjerby.png" alt="">
                        <h2>Hon. Jerby Jesuyon</h2>
                        <p>Kagawad</p>
                    </div>
                
                </div>

                <div class="row2">

                    <div class="col1">
                        <img src="kagawadperlita.png" alt="">
                        <h2>Hon. Perlita Dianon</h2>
                        <p>Kagawad</p>
                    </div>

                    <div class="col2">
                        <img src="kagawadreniel.png" alt="">
                        <h2>Hon. Reniel Gravo</h2>
                        <p>Kagawad</p>
                    </div>

                    <div class="col3">
                        <img src="kagawadalfredo.png" alt="">
                        <h2>Hon. Alfredo Cajucom</h2>
                        <p>Kagawad</p>
                    </div>

                    <div class="col4"> 
                        <img src="kagawadreynaldo.png" alt="">
                        <h2>Hon. Reynaldo Buen</h2>
                        <p>Kagawad</p>
                    </div>
                
                </div>

                <div class="row3">

                    <div class="col1">
                        <img src="treasurer.png" alt="">
                        <h2>Ana Katrina San Miguel</h2>
                        <p>Treasurer</p>
                    </div>

                    <div class="col2">
                        <img src="secretary.png" alt="">
                        <h2>Regina Everlie Balana</h2>
                        <p>Secretary</p>
                    </div>

                    <div class="col3">
                        <img src="skchairman.png" alt="">
                        <h2>Rachel Rose Delgado</h2>
                        <p>SK Chairman</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="floatParent2">
    <a href="logout.php">
        <div id="LogoutBtn">
        </div>
    </a>
</div>
</body>
</html>