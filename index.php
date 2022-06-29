<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>
        
        <!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="stylesheets/index_style.css">

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">
        <title>Home</title>
    </head>


    <!--BODY-->
    <body>
        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>
        
        <div id="div-1">
            <span id="title">Are you looking for a job?</span> <br> <br> <br>
            <span id="lower_text"><i>This site is your best choice to find your dream job!</i></span> <br> <br> <br>
            
        </div>

        <div id="div-2">
            <span id="title">Over 100 <span style="color: #f2610d;">companies</span> are looking for <span style="color: #f2610d;">employees</span>!</span>
        </div>
        
        <div id="div-3">
            <span id="startLooking">Start looking for <a href="register.php">jobs</a> today!</span>
            <a class="enlist" href="register.php">ENLIST NOW</a>
        </div>

        <!--FOOTER-->
        <?php
            require "includes/footer.php";
        ?>
    </body>
</html>