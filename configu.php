<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
define('PAYPAL_ID', 'sb-tyqjd29056721@business.example.com');
define('PAYPAL_SANDBOX', TRUE);

define('PAYPAL_RETURN_URL', 'https://localhost/FinalYearProject/submit.php');
define('PAYPAL_CANCEL_URL', 'https://localhost/FinalYearProject/cancel.php');
define("PAYPAL_CURRENCY", 'INR');

define('DB_HOST', 'locahost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'paypal');

define('PALPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");
?>