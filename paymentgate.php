<?php
include_once 'configu.php';
include_once 'dbConnect.php';
?>
<html>
    <head><title>Form</title></head>
    <body>
<form action="<?php echo PAYPAL_URL; ?>" method="post" id="paypal_form">
    <input type="hidden" name="business" value = "<?php echo PAYPAL_ID; ?>">

    <lable>Enter Product Name </label>
    <input type="text" name="item_name" id="item" required><br><br>

    <label>Enter Price</label>
    <input type="number" required="" name="amount" id="amount">
    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">


    <input type="hidden" name="cmd" value="_xclick">

    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
    <br><br>

    <input type="submit" name="submit" border="0" value="Paid">
</form>
</body></html>


<script>
    jQuery(document).ready(function()
    {
        jQuery('#paypal_form').submit(function()
        {
            setData(jQuery("#amount").val(), jQuery("#item").val());
        });
        function setData(amount, item)
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function()
            {

            };
            xhttp.open("GET", "insertData.php?amount="+amount+"&item="+item, true);
            xhttp.send();
        }
    });
</script>