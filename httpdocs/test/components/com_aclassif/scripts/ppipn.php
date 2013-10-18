<?php 

include("../includes/alcl_conf.php");
include("pp_conf.php");
include("pp_funcs.php");
include("mb_conf.php");

// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';

foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ("ssl://{$ppurlsck}", 443, $errno, $errstr, 30);

// assign posted variables to local variables
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];


$pp_res['alm_id']=$_POST['option_selection1'];

$pp_res['item_name']=$item_name;
$pp_res['item_number']=$item_number;
$pp_res['payment_status']=$payment_status;
$pp_res['payment_amount']=$payment_amount;
$pp_res['payment_currency']=$payment_currency;
$pp_res['txn_id']=$txn_id;
$pp_res['receiver_email']=$receiver_email;
$pp_res['payer_email']=$payer_email;


if (!$fp) {
fhttp_error();
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {
res_verified();  
}
else if (strcmp ($res, "INVALID") == 0) {
res_invalid();  
}
}
fclose ($fp);
}

?>

