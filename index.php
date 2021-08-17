<?php 
    $apiKey="rzp_test_NbLqsd2qBgUdcw";
?>

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key=<?php echo $apiKey?> // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount']* 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'O-ID'.rand(0,100).'END';?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Divesh watwani"
    data-description="Task 3 - The Spakes Foundation"
    data-image="https://www.thesparksfoundationsingapore.org/images/logo_small.png"
    data-prefill.name="<?php echo $_POST['name']?>"
    data-prefill.email="<?php echo $_POST['email']?>"
    data-theme.color="#689DED"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>