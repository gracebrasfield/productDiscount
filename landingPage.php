<?php
require_once('../config.php');
require_once('../scripts/echoHTML.php');
echoHead('../clientScripts/product_discount.js', '../styles/main.css');
echoHeader("Enter Sales Information");
echo '
        <form action="discount_display.php" onsubmit = "return validateProductData();" method="post">
              
              <div id="data">
                  <label> Product Description:</label>
                  <input type="text" name="product_description" id="product_description" required><br>
                  <label>List Price:</label>
                  <input type="number" name="list_price" min="0"><br>
                  <label>Discount Percent:</label>
                  <input type="number" name="discount_percent" min="0" max="100"><br>
                  <span>%</span><br>
            </div>
            
            <div id="buttons">
                <label>=&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>
        </form>
';
echoFooter();
?>
                  

        
   