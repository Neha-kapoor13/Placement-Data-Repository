 <!-- navigation bar -->
        <div id="log">
                <img src="images/log.jpg"></div>
            </div>
        <ul id="nav-bar">
            <a href="index.php"><li id="home">HOME</li></a>
	<a href="place.php"><li>PLACEMENT</li></a>
            <a href="company.php"><li>COMPANIES</li></a>
            <a href="ask.php"><li>UPLOAD QUESTIONS</li></a>
	<a href="search.php"><li>SEARCH QUESTIONS</li></a>
	<?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>LOG IN</li></a>
            <a href="signup.php"><li>SIGN UP</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>LOG OUT</li></a>
            <?php
                }
            ?>
        </ul>
        