<?php
    function echoHead($jsFile, $cssFile){
    echo'
    <!DOCTYPE html>
        <html>
        <head>
            <title>Product Discount Calculator</title>
            <script src = "' . $jsFile . '"></script>
            <link rel="stylesheet" type="text/css" href="'. $cssFile .'">
        </head>
    ';
    }

   function echoHeader($title){
    require_once('../config.php');
    echo'
    <body>
        <header>
            <img SRC="'.WEB_ROOT.APP_FOLDER_NAME.'/images/header_img.jpg" height=100 width=100>
            <h1>'.$title.'</h1>
        </header> 
    ';    
    }

    function echoFooter(){
    echo'
    <footer>
        <img SRC="../images/footer.png" height=50 width=50>
    </footer>
    </body>
    </html>
    ';
    }
?>