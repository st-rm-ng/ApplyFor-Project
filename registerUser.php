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
        <title>User Registration</title>
    </head>



    <!--BODY-->
    <body>
    
        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>

        <div class="formular">
            <form action="includes/registerUsr.inc.php" method="POST">
                <h1>User Registration</h1>

                <label class="tooltip">"a-z A-Z 0-9 _ -"</label><br>
                <input type="text" placeholder="Username" name="uid" required><br>

                <label class="tooltip">"example@gmail.com"</label><br>
                <input type="email" placeholder="Email" name="email" required><br>

                <select class="selectRegister" name="warea" required>
                    <option value="" disabled selected hidden>Working Area</option>
                    <?php 
                        require "..\..\..\shadow_af.php";

                        $query_tag = "SELECT * FROM tag";
                        $result_tag = mysqli_query($conn, $query_tag);

                        while ($row_tag = mysqli_fetch_assoc($result_tag)) {
                            printf('<option value="%s">%s</option>\n', $row_tag['IDtag'], $row_tag['nameTag']);
                        }
                    ?>>
                </select><br>

                <br>
                <input type="password" placeholder="Password" name="pwd" required><br>
                <input type="password" placeholder="Repeat password" name="pwd-repeat" required><br>

                <button id="btn-login" type="submit" name="register-submit">Register</button> 
                
                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill all fields!</p>";
                        }
                        else if ($_GET["error"] == "invalidusername") {
                            echo "<p>Choose a valid form of username!</p>";
                        }
                        else if ($_GET["error"] == "invalidemail") {
                            echo "<p>Choose a valid form of email!</p>";
                        }
                        else if ($_GET["error"] == "notmatchingpwds") {
                            echo "<p>Passwords doesn't match!</p>";
                        }
                        else if ($_GET["error"] == "stmterror") {
                            echo "<p>Something went wrong! :(</p>";
                        }
                        else if ($_GET["error"] == "usernameoremailalreadyexists") {
                            echo "<p>Username or Email already exists!</p>";
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