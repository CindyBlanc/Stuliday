<?php
require 'includes/functions.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stuliday</title>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <nav class="navbar" style="background-color: #113C61;" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="images/stuliday-logo-dark.png" width=50 height=50>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php" style="color: #AE8441;">
                    Home
                </a>

                <a class="navbar-item" href="places.php" style="color: #AE8441;">
                    Places to stay
                </a>


            </div>

            <div class="navbar-end">
                <?php
            if (!empty($_SESSION)) {
                ?>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" style="color: #AE8441;">
                        <?php echo $_SESSION['username']; ?>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="profil.php" style="color: #AE8441;">
                            Profile page
                        </a>
                        <a class="navbar-item" href="advert.php" style="color: #AE8441;">
                            Create a new ad
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="?logout" style="color: #AE8441;">
                            Disconnect
                        </a>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class=" navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="signin.php">
                            <strong>Sign in</strong>
                        </a>
                    </div>
                </div>
                <?php
            }
        ?>
            </div>
        </div>
    </nav>