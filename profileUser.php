<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>
        <!-- Style Sheets-->
        <link rel="stylesheet" type="text/css" href="stylesheets/profile_style.css">

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">
        <title>Profile <?php echo $_SESSION['uiduser'] ?></title>
    </head>


    <!--BODY-->
    <body>
    
        <!--HEADER-->
        <?php
            require "includes/header.php";
            require "includes/profile.inc.php";
        ?>
        <img id="background" src="img/background.png" height="700px">
        <img id="backgroundRight" src="img/backgroundRight.png" height="700px">

        <div class="container_profile">
        <button onclick="editProfileUser()" id="btn-edit">Edit</button>
        <br><br>
        
        <?php 
            if ($gender == "man") {
                echo '<img id="profilepic" src="img/profilepic.png" alt="" height="300">';
            }
            else if ($gender == "woman") {
                echo '<img id="profilepic" src="img/profilepicwoman.png" alt="" height="300">';
            }
            else {
                echo '<img id="profilepic" src="img/profilepic.png" alt="" height="300">';
            }

            echo "<span id='uidRight'><b id='uidRightB'>" . $uid;
            echo "</b><br><b style='font-size: large'>" . $email . "</b></span><br>";
        ?>
        <br>


        <form action="includes/updateProfileUser.inc.php" method="POST">
            <label id="fullName">Full Name</label>
            <input id="name" type="text" name="name" autocomplete='off' value="<?php echo $name ?>" required disabled><br><br>

            <label id="fullArea">Working area</label>
            <select id="warea" name="warea" required disabled>
                <?php 
                    require_once "includes/warea.inc.php";
                ?>
            </select><br><br>

            <label id="fullSpec">Specialization</label>
            <input id="spec" type="text" name="spec" autocomplete='off' value="<?php echo $spec ?>" required disabled><br><br>

            <label id="fullPhone">Phone</label>
            <input id="phone" type="text" name="phone" autocomplete='off' value="<?php echo $phone ?>" required disabled><br><br>

            <label id="fullCity">City</label>
            <input id="city" type="text" name="city" autocomplete='off' value="<?php echo $city ?>" required disabled><br><br>

            <label id="fullGender" for="gender">Gender&ThinSpace;</label>
            <span id="genderRight">

            <?php 
                if ($gender == "man") {
                    echo '<input id="genderBetter" type="radio" name="gender" value="man" disabled checked>Man';
                    echo '<input id="genderKitchen" type="radio" name="gender" value="woman" disabled>Woman';
                }
                else if ($gender == "woman") {
                    echo '<input id="genderBetter" type="radio" name="gender" value="man" disabled>Man';
                    echo '<input id="genderKitchen" type="radio" name="gender" value="woman" disabled checked>Woman';
                }
                else {
                    echo '<input id="genderBetter" type="radio" name="gender" value="man" disabled checked>Man';
                    echo '<input id="genderKitchen" type="radio" name="gender" value="woman" disabled>Woman';
                }
            ?>
            </span><br><br>
            
            <button onclick="saveProfileUser()" id="btn-save" type="submit" name="save-submit" disabled>Save</button>
        </form>

        </div>
        <div id="containerUsr">
            <span id="usr-cmp"><b><?php echo $_SESSION["type"] ?></b></span>
            <div class="container_right">
                <form action="includes/updateBio.inc.php" method="POST">
                    <textarea id="bio" name="bio" rows="10" cols="58" placeholder="BIO" disabled><?php echo $bio ?></textarea><br>

                    <button onclick="saveBio()" id="btn-save-dwn" type="submit" name="save-submit" disabled>Save</button>
                </form>
                <button onclick="editBio()" id="btn-edit">Edit</button>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!--FOOTER-->
        <?php
            require "includes/footer.php";
        ?>
        <script src="js/profile.js"></script>
    </body>
</html>