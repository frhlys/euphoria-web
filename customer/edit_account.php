<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];


?>

<h1 align="center" > Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Name: </label>

<input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Email: </label>

<input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">


</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label> Customer Contact: </label>

<input type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Address: </label>

<input type="text" name="c_address" class="form-control" required value="<?php echo $customer_address; ?>">


</div><!-- form-group Ends -->


<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Update Now

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>