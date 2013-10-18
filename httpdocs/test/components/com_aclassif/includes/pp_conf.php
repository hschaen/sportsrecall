<?php  $opt_file="conf_pp.php"; include("cfgset.php");
       $opt_file="conf_m1.php";include("cfgset.php");
 
# default item numbers of "Buy Now" buttons for fee based services:
$def_sett= array('s' => '1', 'h' => '2', 'm' => '3', 'ma' => '4');

   

$pp_res['subject']=$ppm_subject;
$pp_msg['header']=$ppm_header;
$pp_msg['footer']=$ppm_footer;
$pp_msg['success_processed']= $msg['pp_success_processed']; 
$pp_msg['not_processed']= $msg['pp_not_processed']; 
$pp_msg['http_error']= $msg['pp_http_error']; 
$pp_msg['not_correrct_amount']= $msg['pp_not_correrct_amount']; 
$pp_msg['not_correrct_currency']=$msg['pp_not_correrct_currency']; 
$pp_msg['pp_email_not_correct']= $msg['pp_email_not_correct']; 
$pp_msg['decl_by_paypal']= $msg['pp_email_not_correct']; 
$pp_msg['item_name']=$msg['pp_item_name' ]; 
$pp_msg['item_number']=$msg['pp_item_number']; 
$pp_msg['payment_status']=$msg['pp_payment_status']; 
$pp_msg['payment_amount']=$msg['pp_payment_amount']; 
$pp_msg['payment_currency']=$msg['pp_payment_currency']; 
$pp_msg['receiver_email']=$msg['pp_receiver_email']; 

##########################################################################
$ppurlbn="https://www.paypal.com/cgi-bin/webscr";
$ppusbimg="https://www.paypal.com/en_US/i/scr/pixel.gif";
$ppurlimg="https://www.paypal.com/en_US/i/btn/x-click-but23.gif";
$ppurlsck="www.paypal.com";

if($tpp_sndbox=="yes"){
$ppurlbn="https://www.sandbox.paypal.com/cgi-bin/webscr";
$ppusbimg="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif";
$ppurlimg="https://www.sandbox.paypal.com/en_US/i/btn/x-click-but23.gif";
$ppurlsck="www.sandbox.paypal.com";
}

?>