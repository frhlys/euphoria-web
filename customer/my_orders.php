
<center><!-- center Starts -->

<h1>My Orders</h1>

<p class="lead"> Your orders are here.</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Amount</th>
<th>Invoice</th>
<th>Qty</th>
<th>Status</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];


$order_status = $row_orders['order_status'];

$i++;

if($order_status=='pending'){

$order_status = "<b >Unpaid</b>";

}
else{

$order_status = "<b >Paid</b>";

}

?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td>RM<?php echo $due_amount; ?></td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $order_status; ?></td>

<td>
<p>Not Successful</p>
</td>


</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



