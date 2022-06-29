<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>

        <!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="stylesheets/form_style.css">

        <link rel="icon" href="img/logo151.png">
        <title>Login</title>
    </head>


    <!--BODY-->
    <body>

        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>

        <div class="margin"></div>

        <div class="formular">
            <button class="btn_user">User Login</button>

            <span id="buttonSplitter">|</span>

            <button class="btn_comp">Company Login</button>
            
            <form id="user" action="includes/loginUsr.inc.php" method="POST">
                <h1>User Login</h1>
                <input type="email" placeholder="Email" name="email" required><br>
                <input type="password" placeholder="Password" name="pwd" required><br>
                <button id="btn-login" type="submit" name="login-user-submit">Sign In</button><a style="margin-left: 1%;" href="register.php">Join now</a>

                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill all fields!</p>";
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p>Incorrect login info!</p>";
                        }
                    }
                ?>
            </form>

            <form id="comp" action="includes/loginCmp.inc.php" method="POST">
                <h1>Company Login</h1>
                <input type="email" placeholder="Email" name="email" required><br>
                <input type="password" placeholder="Password" name="pwd" required><br>
                <button id="btn-login" type="submit" name="login-comp-submit">Sign In</button><a style="margin-left: 1%;" href="register.php">Join now</a>
                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill all fields!</p>";
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo "<p>Incorrect login info!</p>";
                        }
                    }
                ?>
            </form>
        </div>

        <script src="js/login.js"></script>
    </body>
</html>