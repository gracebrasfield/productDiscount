<?php
require_once('scripts/echoHTML.php');
require_once('scripts/calculateUtils.php');
require_once('scripts/errorDisplay.php');
$myJSFile = '../clientScripts/product_discount.js';
$myCSSFile = '../styles/main.css'; 

    // get the data from the form
if (isset($_POST['product_description'])){
    $product_description = cleanIO($_POST['product_description']);
    //var_dump($product_description);
    //exit();
}//if
if (isset($_POST['list_price']))
    $list_price = cleanIO($_POST['list_price']);
if (isset($_POST['discount_percent']))
    $discount_percent = cleanIO($_POST['discount_percent']);
if (!filter_var($list_price, FILTER_VALIDATE_FLOAT)) {
    var_dump($list_price);
    echo '<br>';
    echoError("Need number for List Price", $myJSFile, $myCSSFile);
    exit();
}//if
if (!filter_var($discount_percent, FILTER_VALIDATE_FLOAT)) {
    var_dump($discount_percent);
    echo '<br>';
    echoError("Need number for Discount Percent", $myJSFile, $myCSSFile);
    exit(); 
}//if

//Application specific checks below
if ($product_description == "")
    exit("Supply product description");
if ($product_description != "Guitars" && $product_description != "Pianos" && $product_description != "Other" && $product_description != "guitars" && $product_description != "pianos" && $product_description != "other")
    exit("Incorrect product description");
if ($list_price < 0)
   exit("List price be positive");
if ($discount_percent < 0 || $discount_percent >100)
    exit("Discount must be positive and up to 100");

    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];

    // calculate the discount
    //$discount = $list_price * $discount_percent * .01;
    //$discount_price = $list_price - $discount;

    // apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$" .number_format($list_price, 2);
    $discount_percent_formatted = number_format($discount_percent, 1)."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);

    //escape the unformatted input
    $product_description_escaped = cleanIO($product_description);    
    /*
    function cleanIO($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data; 
    }*/
echoHead($jsFile, $cssFile);
echoHeader("Thank you!");
echo '
        
        <label>Product Description:</label>
        <span>' . cleanIO($product_description_escaped) . '</span><br>
        
        <label>List Price:</label>
        <span>' . cleanIO($list_price_formatted) . '</span><br>
        
        <label>Standard Discount:</label>
        <span>' . cleanIO($discount_percent_formatted) . '</span><br>
        
        <label>Discount Amount:</label>
        <span>'.  cleanIO($discount_formatted) .'</span><br>
        
        <label>Discount Price:</label>
        <span>'. cleanIO($discount_price_formatted) .'</span><br>
        
        <a href="landingPage.php">Back</a>

';
echoFooter();
?>
    