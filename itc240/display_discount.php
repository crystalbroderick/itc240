<?php
    // get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    
    // calculate the discount and discounted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    // calculate sales tax rate and sales tax amount
    $sales_tax = .08;
    $sales_tax_percent = 8;
    $sales_tax_amt = $discount_price * $sales_tax;


    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
    $sales_tax_percent_f = $sales_tax_percent."%";
    $sales_tax_amt_f = "$".number_format($sales_tax_amt, 2);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span>
        <br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span>
        <br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
        <br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span>
        <br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
        <br>
        <br>
        <label>Sales Tax Rate:</label>
        <span><?php echo $sales_tax_percent_f; ?></span>
        <br>
        <label>Sales Tax Amount:</label>
        <span><?php echo $sales_tax_amt_f; ?></span>
    </main>
</body>
</html>