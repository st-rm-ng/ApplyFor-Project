<!DOCTYPE html>
<html lang="en">
    
    <!--HEAD-->
    <head>
        <?php 
            require "includes/basehead.php";
        ?>
        <!-- Style Sheets-->
        <link rel="stylesheet" type="text/css" href="stylesheets/search_style.css">

        <link rel="icon" href="img/logo_alpha.png">

        <style>
            .footer{
                position: relative;
            }
        </style>

        <link rel="icon" href="img/logo151.png">
        <title>Search</title>
    </head>


    <!--BODY-->
    <body>
    
        <!--HEADER-->
        <?php
            require "includes/header.php";
        ?>
        <div id="center">
            <?php 
                if (isset($_SESSION['uiduser'])) {
                    echo '<h1>Start looking for jobs!</h1>';
                }
                else if (isset($_SESSION['uidcomp'])) {
                    echo '<h1>Start looking for employees!</h1>';
                }
            ?>
            <form action="" method="GET">
                <div id="container_src">
                    <input id="searchBox" name="k" type="text" autocomplete="off" placeholder="Search">
                </div>
                
                <input id="searchBtn" type="submit" value="Search">
            </form>
        </div>

        <div class="stripe"> </div>

        <?php
        require "../../shadow_af.php";

            if (isset($_GET['k']) && $_GET['k'] != '') {
// USER SCRIPT
                if (isset($_SESSION['uidcomp'])) { 
                    $k = trim($_GET['k']);

                    $query_string = "SELECT * FROM user INNER JOIN tag ON user.IDtag_fk = tag.IDtag WHERE ";
                    $display_words = "";

                    $keywords = explode(' ', $k);
                    foreach ($keywords as $word) {
                        $query_string .= "uidUser LIKE '%" . $word . "%' OR nameUser LIKE '%" . $word . "%' OR emailUser LIKE '%" . $word . "%' OR cityUser LIKE '%" . $word . "%' OR specUser LIKE '%" . $word . "%' OR nameTag LIKE '%" . $word . "%' OR ";
                        $display_words .= $word . " ";
                    }
                    $query_string = substr($query_string, 0, strlen($query_string) - 3);
                    
                    $query = mysqli_query($conn, $query_string);
                    $result_count = mysqli_num_rows($query);

                    if ($result_count > 0) {
                        echo '<div id="resultCount"> Number of results found: ' . $result_count . '</div>';
                        echo '<div class="containerResults">';

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo '<table class="profileSearch">
                                    <tr>
                                        <td><span class="uName">' . $row['nameUser'] . '</span></td>
                                    </tr>';
                                    if ($row['genderUser'] == "man") {
                                        echo
                                        '<tr>
                                            <td style="border-bottom: 3px solid white; padding-bottom: 1%"><img id="profilepic" src="img/profilepic.png" height="300"></td>
                                            <td style="border-bottom: 3px solid white;"><textarea id="bio" rows="13" cols="70" placeholder="BIO" disabled>' . $row['bioUser'] . '</textarea></td>
                                        </tr>';
                                    }
                                    else if ($row['genderUser'] == "woman") {
                                        echo
                                        '<tr>
                                            <td style="border-bottom: 3px solid white; padding-bottom: 1%"><img id="profilepic" src="img/profilepicwoman.png" height="300"></td>
                                            <td style="border-bottom: 3px solid white;"><textarea id="bio" rows="13" cols="70" placeholder="BIO" disabled>' . $row['bioUser'] . '</textarea></td>
                                        </tr>';
                                    }
                                    echo
                                    '<tr>
                                        <td><span class="uid"> <label id="uid">Username: </label></td>
                                        <td class="uid">' . $row['uidUser'] . '</span></td>
                                    <tr>
                                        <td><span class="uEmail"><label id="uEmail">Email: </label></td>
                                        <td class="uEmail">' . $row['emailUser'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="uPhone"><label id="uPhone">Phone number: <br></label></td>
                                        <td class="uPhone">' . $row['phoneUser'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="uCity"><label id="uCity">City: <br></label></td>
                                        <td class="uCity">' . $row['cityUser'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="white"><label id="">Working Area: <br></label></td>
                                        <td class="nameTag">' . $row['nameTag'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="white"><label id="">Specification: <br></label></td>
                                        <td class="specUser">' . $row['specUser'] . '</span></td>
                                    </tr>
                                </table>';
                        }
                        echo '</div>';
                    }
                    else {
                        echo '<span id="center">No results found.</span>';
                    }
                }
// COMPANY SCRIPT
                else if (isset($_SESSION['uiduser'])) {
                    $k = trim($_GET['k']);

                    $query_string = "SELECT * FROM company WHERE ";
                    $display_words = "";

                    $keywords = explode(' ', $k);
                    foreach ($keywords as $word) {
                        $query_string .= "uidComp LIKE '%" . $word . "%' OR nameComp LIKE '%" . $word . "%' OR emailComp LIKE '%" . $word . "%' OR addressComp LIKE '%" . $word . "%' OR categoryComp LIKE '%" . $word . "%' OR ";
                        $display_words .= $word . " ";
                    }
                    $query_string = substr($query_string, 0, strlen($query_string) - 3);
                    
                    $query = mysqli_query($conn, $query_string);
                    $result_count = mysqli_num_rows($query);

                    if ($result_count > 0) {
                        echo '<div id="resultCount"> Number of results found: ' . $result_count . '</div>';
                        echo '<div class="containerResults">';

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo '<table class="profileSearch">
                                    <tr>
                                        <td><span class="uName">' . $row['nameComp'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom: 3px solid white; padding-bottom: 1%"><img id="profilepic" src="img/cmpPic.png" height="300"></td>
                                        <td style="border-bottom: 3px solid white;"><textarea id="bio" rows="13" cols="70" placeholder="Short Description of Company" disabled>' . $row['descComp'] . '</textarea></td>
                                    </tr>
                                    <tr>
                                        <td><span class="uid"> <label id="uid">UID: </label></td>
                                        <td class="uid">' . $row['uidComp'] . '</span></td>
                                    <tr>
                                        <td><span class="uEmail"><label id="uEmail">Email: </label></td>
                                        <td class="uEmail">' . $row['emailComp'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class=""><label id="uPhone">HQ Address: <br></label></td>
                                        <td class="">' . $row['addressComp'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="uPhone"><label id="uPhone">Phone number: <br></label></td>
                                        <td class="uPhone">' . $row['phoneComp'] . '</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class=""><label id="uPhone">Category: <br></label></td>
                                        <td class="">' . $row['categoryComp'] . '</span></td>
                                    </tr>
                                </table>';
                        }
                        echo '</div>';
                    }
                    else {
                        echo '<span id="center">No results found.</span>';
                    }
                }
            }
        ?>
        
        <!--FOOTER-->
        <?php
            require "includes/footer.php";
        ?>
        <script src="#"></script>
    </body>
</html>