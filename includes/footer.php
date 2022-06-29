<footer class="footer">
    <div id="nav-down-container">
        <a class="nav-down" href="index.php">Home</a>
        <a class="nav-down" href="support.php">Support</a>
        <?php 
            if(isset($_SESSION['uiduser'])) {
                echo '<a class="nav-down" href="profileUser.php">Profile</a>';
            }
            else if(isset($_SESSION['uidcomp'])) {
                echo '<a class="nav-down" href="profileComp.php">Profile</a>';
            }
            else {
                echo '<a class="nav-down" href="login.php">Profile</a>';
            }
        ?>
        <a class="nav-down" href="terms.php">Terms and Conditions</a>
        <a class="nav-down" href="policy.php">Privacy Policy</a>
    </div>
    <div id="social_networks">
        <a href="https://www.instagram.com/"><img id="ig_icon" src="img/ig_icon.png" alt="" width="40px" height="auto"></a>
        <a href="https://www.facebook.com/"><img id="fb_icon" src="img/fb_icon.png" alt="" width="40px" height="auto"></a>
        <a href="https://twitter.com/"><img id="twitter_icon" src="img/twitter_icon.png" alt="" width="40px" height="auto"></a>

    </div>
    <div id="copyright">© 2021 ApplyFor™. All rights reserved. By <a href="mailto:adam.antal@student.spseke.sk" id="mail">Adam Antal</a> & <a href="mailto:tomas.timko@student.spseke.sk" id="mail">Tomáš Timko</a></div>
</footer>