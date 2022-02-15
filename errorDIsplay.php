<?php
function echoError($errMsg, $jsFile, $cssFile){
    require_once('../scripts/echoHTML.php');
    echoHead($jsFile, $cssFile);
    echoHeader("Please Note the Error");
    echo"<h3>$errMsg</h3>";
    echoFooter(); 
}
?>