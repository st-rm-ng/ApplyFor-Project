<!DOCTYPE html>
<html lang="en">

    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>

        <!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="stylesheets/form_style.css">

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">
        <title>Company Registration</title>
    </head>


    <!--BODY-->
    <body>
    
        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>

        <div class="formular">
            <form action="includes/registerCmp.inc.php" method="POST">
                <h1>Company Registration</h1>

                <label class="tooltip">"a-z A-Z 0-9 _ -"</label><br>
                <input type="text" placeholder="Unique Identifier" name="uid" required><br>

                <label class="tooltip">"example@gmail.com"</label><br>
                <input type="email" placeholder="Email" name="email" required><br>

                <label class="tooltip">"Example Company Ltd."</label><br>
                <input type="text" placeholder="Company Name" name="compname" required><br>

                <label class="tooltip">"a-z A-Z 0-9"</label><br>
                <input type="text" placeholder="CRN" name="crn" required><br>

                <label class="tooltip">"a-z A-Z 0-9 , . () -" and "SPACE"</label><br>
                <input type="text" placeholder="Company Headquarters" name="address" required><br>

                <br>
                <input type="password" placeholder="Password" name="pwd" required><br>
                <input type="password" placeholder="Repeat Password" name="pwd-repeat" required><br>

                <button id="btn-login" type="submit" name="register-submit">Register</button> 

                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill all fields!</p>";
                        }
                        else if ($_GET["error"] == "invaliduid") {
                            echo "<p>Choose a valid form of UID!</p>";
                        }
                        else if ($_GET["error"] == "invalidemail") {
                            echo "<p>Choose a valid form of email!</p>";
                        }
                        else if ($_GET["error"] == "invalidcrn") {
                            echo "<p>Choose a valid form of CRN!</p>";
                        }
                        else if ($_GET["error"] == "invalidaddress") {
                            echo "<p>Choose a valid form of Address!</p>";
                        }
                        else if ($_GET["error"] == "notmatchingpwds") {
                            echo "<p>Passwords doesn't match!</p>";
                        }
                        else if ($_GET["error"] == "stmterror") {
                            echo "<p>Something went wrong! :(</p>";
                        }
                        else if ($_GET["error"] == "uidalreadyexists") {
                            echo "<p>UID or Email already exists!</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p>Your registration was successful!</p>";
                        }
                    }
                ?>
            </form>    
        </div>
    </body>
</html>