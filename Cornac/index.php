<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Je dresse des Elephants</title>
</head>
<body>
<?php
include('header.php');

include('include.php');

?>
<table border="1">
    <tr>
        <th>Heure</th>
        <th>Titre du Spectacle</th>
        <th>Artiste</th>
        <th>Image</th>

    </tr>
    <?php

    foreach ($shows as $key => $show) {
        echo "<tr>";
        foreach ($show as $keyShow => $value) {
            if ($keyShow == "img_url") {
                echo "<td> <a target='_blank' href='$value'>$value</a> </td>";
            } else {
                echo "<td> $value </td>";
            }
        }
        echo "</tr>";
    }
    ?>


</table>
<?php

include('footer.php');


?>
</body>
</html>