<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap 4 - CSS  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom CSS  -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- librerias -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>VideoTube</title>
    </head>
    <body>
        <div id="pageContainer">

            <div id="mastHeadContainer">
                
                <button class="navShowHide">
                    <img src="assets/images/icons/menu.png" alt="">
                </button>

                <a class="logoContainer" href="index.php">
                    <img src="assets/images/icons/VideoTubeLogo.png" alt="Site Logo" title="Logo">
                </a>

                <div class="searchBarContainer">
                    <form action="search.php" method="GET">
                        <input type="text" class="searchBar" name="term" placeholder="Buscar">
                        <button class="searchButton">
                            <img src="assets/images/icons/search.png" alt="Icono Search" title="Buscar Video">
                        </button>
                    </form>
                </div>

                <div class="rightIcons">
                    <a href="upload.php">
                        <img class="upload" src="assets/images/icons/upload.png" alt="upload-icon">
                    </a>
                    <a href="#">
                        <img class="upload" src="assets/images/profilePictures/default.png" alt="profile-picture">
                    </a>
                </div>

            </div>

            <div id="sideNavContainer" style="display:none;">

            </div>

            <div id="mainSectionContainer">

                <div id="mainContentContainer">