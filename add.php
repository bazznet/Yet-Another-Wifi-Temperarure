

<?php
$temp = "G=";
$temp .= ($_GET["temp1"]);
file_put_contents("/media/USB/Garden.Temp", $temp);
echo $temp
?>




