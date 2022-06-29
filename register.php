<!DOCTYPE html>
<html lang="en">

    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>

        <!-- Style Sheets -->
        <link rel="stylesheet" type="text/css" href="stylesheets/form_style.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/register_style.css">

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">  
        <title>Registration</title>
    </head>


    <!--BODY-->
    <body>
    
        <?php 
            if(isset($_SESSION['IDuser'])) {
                echo '<p class="login-status">You are logged in!</p>';
            }
            else {
                echo 
                '<div class="container">
                    <div class="split left">
                        <img src="img/applicantRegister.jpg" alt="" width="auto" height="105%">
                        <h1>The Applicant</h1>
                            <a href="registerUser.php" class="button">I&#39m looking for job</a>
                    </div>
                    <div class="split right">
                        <img src="img/companyRegister.jpg" alt="" width="auto" height="105%">
                        <h1>The Company</h1>
                            <a href="registerComp.php" class="button">I&#39m looking for employees</a>
                    </div>
                </div>';
            }
        ?>
        


        <script src="js/register.js"></script>
    </body>
</html>