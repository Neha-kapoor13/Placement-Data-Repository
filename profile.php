<?php
    session_start();
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
	<link type="text/css" rel="stylesheet" href="css/style2.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
<style>
body {
    background:url(images/sbg.jpg) ;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
    </head>
    <body id="pro">

        <!-- navigation bar -->
                 <?php
include('nav.php');
?>
        <!-- content -->
        <div id="content">
        <center>
            <h1 id="hea"><?php echo "Welcome ".$_SESSION["user"]; ?></h1>
            <div class="clearfix">
                
                    <p id="first">N</p><p class="tit">ame: </p>
                    <p class="det"><?php echo $_SESSION["name"]; ?></p><br>
                    <p id="first">E</p><p class="tit">mail: </p>
                    <p class="det"><?php echo $_SESSION["email"]; ?></p><br>
                    <p id="first">J</p><p class="tit">oin Date: </p>
                    <p class="det"><?php echo $_SESSION["date"]; ?></p>
                </div>
                        
            </div>
        </center>
        </div>
    
                <?php
include('foot.php');
?>
        
    </body>
    
</html>