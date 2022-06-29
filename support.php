<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>

        <!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="stylesheets/support_style.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">
        <title>Support</title>
    </head>


    <!--BODY-->
    <body>
    
        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>
        
        <div id="div-supp">
            <h1>FAQ</h1>
            
            <h2>How does it work?</h2>
                <p class="p">
                    <span style="color: #f2610d;">Users</span> are going to look for jobs, apply for them and <span style="color: #f2610d;">Companies</span> are going to contact them with more informations.<br><br>
                    <span style="color: #f2610d;">Companies</span> create job listings, their potential employees are going to apply for.
                </p>

            <h2>Can’t remember login details</h2>
                <p class="p">Contact our support at <span id="contact"><u>info@applyfor.com</u> </span></p>

            <h2>Are the companies legit?</h2>
                <p class="p">We can assure you that the <span style="color: #f2610d;">Companies</span> on our site are 100% verified by us and with professional attitude.</p>
            
            <h2>This didn't help? Contact us!</h2>
                <p class="p">If you have any other questions or problems feel free to contact us at <span id="contact"><u>info@applyfor.com</u></p>
        </div>


        <!--FOOTER-->
        <?php
            require "includes/footer.php";
        ?>
        <script src="js/support.js"></script>
    </body>
</html>