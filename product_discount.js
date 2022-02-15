var $ = function(id) {
    return document.getElementById(id);
};

function validateProductData() {
    var productDescription = $("product_description").value; 
    
    if (productDescription != "Guitars" && productDescription != "Pianos" && productDescription != "Other" productDescription != "guitars" && productDescription != "pianos" && productDescription != "other"){
        alert("Product Description not Correct");
        return false;
    }//if

    return true; 

}//validateProductData