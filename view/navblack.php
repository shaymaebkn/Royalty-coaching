<?php 
    include_once '../connect/connection.php';
    session_start();
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

  

    $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='?'");
     

    // echo $_SESSION['email'];
     ?>
    
     
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coaching.css">
    <link rel="shortcut icon" type="" href="../images/logopng.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Royalty Coaching</title>
    <link rel="shortcut icon" type="" src="../images/group 4.svg" />
</head>
<body>
        <!-- nav -->
        <nav class="navbar" style="color:black;">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="../images/Group 4.svg" alt="" width="70" height="60">
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="coaching.php">Coaching</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Programme de regime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../users/profile.php">
                            <!-- <img src=""  class="rounded-circle" alt="userimg"> -->
                            <p><?php echo $_SESSION['username'];?></p>
                        </a>
                    </li>

                </ul>
            </div>

        </nav>
        <?php
    }
else{  ?>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coaching.css">
    <link rel="shortcut icon" type="" href="../images/logopng.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Royalty Coaching</title>
    <link rel="shortcut icon" type="" href="../images/logopng.png" />
</head>
    <nav class="navbar" style="color:black ;">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="../images/Group 4.svg" alt="" width="70" height="60">
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="coaching.php">Coaching</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Programme de regime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white"href="team.php">Team</a>
                    </li>
                    <li class="nav-item text-dark">
                        <button id="login"><a href="../auth/login.php">Login</a></button>
                    </li>
                    <li>
                        <a class="nav-link text-white" href="../auth/registration.php"> register</a>
                    </li>

                    <li>
                        <a class="nav-link text-white" href="../admin/navadmine.php"> Admin</a>
                    </li>

                </ul>
            </div>

        </nav>

        <?php
}
?>