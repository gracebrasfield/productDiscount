<?php
function calculateProductDiscount($list_price, $discount_percent){
    return ($list_price * $discount_percent * .01); 
}//calculateProduct Discount

function cleanIO($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}//cleanIO
?>