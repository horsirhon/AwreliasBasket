<div class="box"><!-- box Starts -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

?>

<h1 class="text-center">Payment Options For You</h1>

<p class="lead text-center">

<a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Offline</a>

</p>



<?php

$i = 0;


$ip_add = getRealUserIp();

$get_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$get_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_qty = $row_cart['qty'];

$pro_price = $row_cart['p_price'];

$get_products = "select * from products where product_id='$pro_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

 } ?>

<h1 class="text-center">Pay Now</h1>

<form class="Pay-btn">
<a class="flwpug_getpaid" data-PBFPubKey="FLWPUBK_TEST-fd15425643bbf0f6298c5a4c154c6d3b-X" data-txref="rave-checkout-1500826869" data-amount="<?php echo $pro_price;?>" data-customer_email="user@aureliasbaskets.com" data-currency="NGN" data-pay_button_text="Pay With Card Now" data-country="NG" data-custom_title="<?php echo $customer_id; ?>" data-custom_description="<?php echo $product_title; ?>" data-redirect_url="" data-custom_logo="" data-payment_method="both"></a>	

<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
  </form>




</form><!-- form Ends -->

</center><!-- center Ends -->

</div><!-- box Ends -->