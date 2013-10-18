<?php include("pp_conf.php"); $ppkey=$def_sett['s'];
global $urlclscrpt, $_REQUEST;
$pp_sett[$ppkey][4]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][4];
$pp_sett[$ppkey][5]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][5];

?>

<center>
<?php echo $msg['pp_ad_submitted_proceed_activation']; ?>
  
<p style='padding:15px;'>

<form action="<?php echo $ppurlbn; ?>" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo $pp_email; ?>">
<input type="hidden" name="item_name" value="<?php echo $pp_sett[$ppkey][3]; ?>">
<input type="hidden" name="item_number" value="<?php echo $ppkey; ?>">
<input type="hidden" name="amount" value="<?php echo $pp_sett[$ppkey][1]; ?>">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="return" value="<?php echo $pp_sett[$ppkey][4]; ?>">
<input type="hidden" name="cancel_return" value="<?php echo $pp_sett[$ppkey][5]; ?>">
<input type="hidden" name="notify_url" value="<?php echo $ppipnurl; ?>">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="<?php echo $pp_sett[$ppkey][2]; ?>">
<input type="hidden" name="bn" value="PP-BuyNowBF">
<input type="hidden" name="on0" value="id">
<input type="hidden" name="os0" value="<?php echo $row['idnum']; ?>">
<input type="image" src="<?php echo $ppurlimg; ?>" 
border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="<?php echo $ppusbimg; ?>" width="1" height="1">
</form>

<div style='padding:10px'></div>
<font class='stfntb'> 
<b>
<?php echo str_replace("--ppact_url--", alcl_ppact_url, $msg['pp_you_can_activate_ad_later']); ?>
</b></font>
</center>
<p>