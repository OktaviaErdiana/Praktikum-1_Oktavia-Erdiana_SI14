<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["OKTAVIA", "MIRZA", "AJIS", "CACA"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>