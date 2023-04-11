<!DOCTYPE html>
<html>
<body style="background-color:black;color:white;min-height:100vh;min-width:fit-content;display:flex;justify-content:center;align-items:center;">

<?php
$farenheit = readline("Enter the farenheit : ");
$celsius = (($farenheit - 32)*5)/9;
$celsius =  round($celsius);
echo "The Temperature in celsius : $celsius";
?>

</body>
</html>
