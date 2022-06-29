<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>
        <!-- Style Sheets-->
        <link rel="stylesheet" type="text/css" href="stylesheets/profile_cmp_style.css">

        <style>
            .footer{
                position: relative;
            }
        </style>
        
        <link rel="icon" href="img/logo151.png">
        <title>Profile <?php echo $_SESSION['uidcomp'] ?></title>
    </head>


    <!--BODY-->
    <body>
        <!--HEADER-->
        <?php
            require "includes/header.php";
            require "includes/profile.inc.php";
            
        ?>
        
        <div class="container_profile">
            <button onclick="editProfileComp()" id="btn-edit">Edit</button>
            <br><br>

            <img id="profilepic" src="img/cmpPic.png" alt="" height="300">
            <?php
                echo "<span id='uidRight'><b id='uidRightB'>" . $uid;
                echo "</b><br><b>" . $email . "</b></span><br>";
            ?>
            <br>
            

            <form action="includes/updateProfileComp.inc.php" method="POST">
                <label id="fullName">Company name</label>
                <input id="name" type="text" name="name" autocomplete='off' value="<?php echo $name ?>" required disabled><br><br>

                <label id="fullCRN">CRN Number</label>
                <input id="crn" type="text" name="crn" autocomplete='off' value="<?php echo $crn ?>" required disabled><br><br>

                <label id="fullAddress">HQ Address</label>
                <input id="address" type="text" name="address" autocomplete='off' value="<?php echo $address ?>" required disabled><br><br>

                <label id="fullPhone">Phone</label>
                <input id="phone" type="text" name="phone" autocomplete='off' value="<?php echo $phone ?>" required disabled><br><br>

                <label id="fullCateg">Category</label>
                <input id="type" type="text" name="category" autocomplete='off' value="<?php echo $category ?>" required disabled><br><br>

                <button onclick="saveProfileComp()" id="btn-save" type="submit" name="save-submit" disabled>Save</button>
            </form>
        </div>
        
        <img id="backgroundRight" src="img/backgroundRight.png" height="700px">
        <img id="background" src="img/background.png" height="700px">

        <div id="containerUsr">
            <span id="usr-cmp"><b><?php echo $_SESSION["type"] ?></b></span>
            <div class="container_right">
                <form action="includes/updateDesc.inc.php" method="POST">
                    <textarea id="bio" name="desc" rows="10" cols="49" placeholder="Short Description of Company" disabled><?php echo $description ?></textarea><br>
                    
                    <button onclick="saveDesc()" id="btn-save-dwn" type="submit" name="save-submit" disabled>Save</button>
                </form>
                <button onclick="editDesc()" id="btn-edit">Edit</button>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <!--FOOTER-->
        <?php
            require "includes/footer.php";
        ?>
        <script src="js/profile.js"></script>
    </body>
</html>