<form action="groet.php"><input type="submit" value="Klik hier voor een groet!"/></form>

<?php

echo "Bedankt voor het ingeven van je naam!";
setcookie("name",$_GET["name"],time() +(86400*30),"/");

?>