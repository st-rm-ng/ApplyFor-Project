<?php 
    require "..\..\..\shadow_af.php";
    
    $query = "SELECT * FROM user WHERE emailUser = '" . $_SESSION['uiduser'] . "'";
    $query_tag = "SELECT * FROM tag";

    $result = mysqli_query($conn, $query);
    $result_tag = mysqli_query($conn, $query_tag);
    while ($row_tag = mysqli_fetch_assoc($result_tag)) {
        if ($row['IDtag_fk'] == $row_tag['IDtag']) {
            printf('<option value="%s">%s</option>\n', $row['IDtag_fk'], $row_tag['nameTag']);
        }
    }

    $result_tag = mysqli_query($conn, $query_tag);
    echo '<optgroup label="-----">\n';
    while ($row_tag = mysqli_fetch_assoc($result_tag)) {
        printf('<option value="%s">%s</option>\n', $row_tag['IDtag'], $row_tag['nameTag']);
    }
    echo '</optgroup>\n';
?>