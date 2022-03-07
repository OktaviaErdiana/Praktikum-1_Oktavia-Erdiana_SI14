<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["Gilang", "tasya", "oktavia", "ajis"];
    array_unshift($tims, "ica", "mirza");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>