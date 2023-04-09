<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"">
    <title>MOCK FILLER</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg px-4">
        <div class="container py-2 px-0">
            <a href="#" class="navbar-brand text-light">
                <img src="img/119529-eyes-anime-hd-image-free_600x600.png" class="img-thumbnail w-25 rounded-circle ">
                <span class="fw-bold">MockEpisodes</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Items -->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto text-white">

                    <li class="nav-item fs-5 me-4">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item fs-5 me-4">
                        <a href="#" class="nav-link">About</a>
                    </li>

                    <li class="nav-item fs-5 me-4">
                        <a href="shows.php" class="nav-link">Shows</a>
                    </li>

                    <!-- Login/Logout  -->

                    <?php
                    
                        if(isset($_SESSION['userid'])) {

                            echo '<li class="nav-item fs-5 me-4"><a href="dashboard.php" class="nav-link">Dashboard</a></li>';
                            echo '<li class="nav-item fs-5 me-4"><a href="includes/logout.inc.php" class="nav-link">Logout</a></li>';
                        }
                        
                        else {
                            echo '<li class="nav-item fs-5 me-4"><a href="contributors.php" class="nav-link">Contributors</a></li>';
                        }
 
                    ?>

                </ul>
            </div> 


        </div>
    </nav>