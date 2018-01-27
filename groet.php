<?php
if(!isset($_COOKIE["name"])) {
     echo "Gegroet!";
} else {
     echo "Gegroet, " . $_COOKIE["name"];
}
?>