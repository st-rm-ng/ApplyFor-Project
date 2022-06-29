<div class="head"></div>
<header class="header">
    <a href="index.php"><img id="logoMain" src='img/logo151.png'></a>
    <nav class="menu">
        <ul>
            <li><a class="btn-nav" href="index.php">Home</a></li>
            <li><a class="btn-nav" href="support.php">Support</a></li>
            <?php 
                if (isset($_SESSION['uiduser'])) {
                    echo '<li><a class="btn-nav" href="profileUser.php">Profile</a></li>';
                }
                else if (isset($_SESSION['uidcomp'])) {
                    echo '<li><a class="btn-nav" href="profileComp.php">Profile</a></li>';
                }
                else {
                    echo '<li><a class="btn-nav" href="login.php">Profile</a></li>';
                }
            ?>
            <li><span id="splitter">|</span></li>
        
            <?php 
                if (isset($_SESSION['uiduser'])) {
                    echo "<li><form action='search.php' method='GET'>";
                    echo "<input id='search_box' type='text' name='k' autocomplete='off' spellcheck='false' autocapitalize='off' placeholder='Search' required>";
                    echo "<input id='search' type='submit' value>";
                    echo "</form></li>";
                    echo "<li><a id='btn-nav-login' href='includes/logout.inc.php'>Logout</a></li>";
                }
                else if (isset($_SESSION['uidcomp'])) {
                    echo "<li><form action='search.php' method='GET'>";
                    echo "<input id='search_box' type='text' name='k' autocomplete='off' spellcheck='false' autocapitalize='off' placeholder='Search' required>";
                    echo "<input id='search' type='submit' value>";
                    echo "</form></li>";
                    echo "<li><a id='btn-nav-login' href='includes/logout.inc.php'>Logout</a></li>";
                }
                else {
                    echo "<li><a id='btn-nav-login' href='login.php'>Login</a></li>";
                    echo "<li><a id='btn-nav-register' href='register.php'>Register</a></li>";
                }
            ?>
        </ul>    
    </nav>
</header>