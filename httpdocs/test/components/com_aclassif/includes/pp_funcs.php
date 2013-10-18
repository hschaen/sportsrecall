<?php

function msg_not_processed($rsn)
{
global $pp_msg, $pp_email, $pp_res, $snd_pyr, $snd_cpadm;

$message="  ".$pp_msg['header']."
".$pp_msg['not_processed']." $rsn 
".$pp_msg['footer']." ";

if ($snd_pyr=="yes"){
pp_mail ($pp_res['payer_email'], $pp_res['subject'], $message, $pp_email);
}

if ($snd_cpadm=="yes"){
pp_mail ($pp_email, $pp_res['subject'], $message, $pp_email);
}
return; 
}


function msg_success_processed()
{
global $pp_msg, $pp_email, $pp_res, $snd_pyr, $snd_cpadm;

$message=" ".$pp_msg['header']."
".$pp_msg['success_processed']." 

".$pp_msg['item_name'].": ".$pp_res['item_name']."
".$pp_msg['item_number'].": ".$pp_res['item_number']."
".$pp_msg['payment_status'].": ".$pp_res['payment_status']."
".$pp_msg['payment_amount'].": ".$pp_res['payment_amount']."
".$pp_msg['payment_currency'].": ".$pp_res['payment_currency']."

".$pp_msg['footer']." 
";

if ($snd_pyr=="yes"){
pp_mail($pp_res['payer_email'], $pp_res['subject'], $message, $pp_email); 
}

if ($snd_cpadm=="yes"){
pp_mail($pp_email, $pp_res['subject'], $message, $pp_email); 
}
return;
}


function res_verified()
{
global $pp_msg, $pp_email, $pp_res, $pp_sett, $table_ads, $table_mb, $mbrshp_per, $ma_disc, 
$ma_price, $ma_count, $ma_totdisc;

if ($pp_email!=$pp_res['receiver_email']){
msg_not_processed($pp_msg['pp_email_not_correct']); return;}

$item_id=$pp_res['item_number'];

if ($pp_sett[$item_id][0]!='ma' and $pp_res['payment_amount']< $pp_sett[$item_id][1]*0.9){
msg_not_processed($pp_msg['not_correrct_amount']); return;}


if ($pp_sett[$item_id][2]!=$pp_res['payment_currency']){
msg_not_processed($pp_msg['not_correrct_currency']); return;}


pp_connect_to_db();

$itemnumb=$pp_res['item_number'];

if ($pp_sett[$itemnumb][0]=='h'){
$sql_query="update $table_ads set adrate=1  where idnum=".$pp_res['alm_id']." ";
mysql_query("$sql_query");

}


if ($pp_sett[$itemnumb][0]=='s'){
$sql_query="update $table_ads set visible=1 where idnum=".$pp_res['alm_id']." ";
mysql_query("$sql_query");
}

if ($pp_sett[$itemnumb][0]=='m'){

$cook_login=$pp_res['alm_id'];

$sql_query="select idnum, visible, exptime from $table_mb where 
login='$cook_login' ";
$sql_res=mysql_query("$sql_query");
$row=mysql_fetch_row($sql_res);
$count1=$row[0]; $val_visible=$row[1];
 
if ($val_visible=="0"){
$sql_query="update $table_mb set visible=1
where login='$cook_login' ";
}
else {
$time_now=time();
if ($row[2] > $time_now){$exptime2=$row[2]+$mbrshp_per*86400;}
else{$exptime2=$time_now+$mbrshp_per*86400;}
$sql_query="update $table_mb set exptime=$exptime2
where login='$cook_login' ";
}
mysql_query("$sql_query");
}


if ($pp_sett[$itemnumb][0]=='ma'){

ma_reslt($pp_res['alm_id']); 
if ($pp_res['payment_amount']< $ma_price*0.8){
msg_not_processed($pp_msg['not_correrct_amount']); return;
}

$sql_query="update $table_ads set visible=1 where email='".$pp_res['alm_id']."' ";
mysql_query("$sql_query");

}

msg_success_processed(); 
return;
}

function ma_reslt($ma_email)
{
global $ma_price, $ma_count, $ma_notact, $ma_totdisc, $ma_disc, $pp_res, $def_sett, $pp_sett, $table_ads;

$sql_query="select count(idnum) from $table_ads where email='$ma_email' ";
$sql_res=mysql_query($sql_query);
$row=mysql_fetch_row($sql_res);
$ma_count=$row[0];

$sql_query="select count(idnum) from $table_ads where email='$ma_email' and visible=0 ";
$sql_res=mysql_query($sql_query);
$row2=mysql_fetch_row($sql_res);
$ma_notact=$row2[0];

$disckey1=1000;
foreach ( $ma_disc as $key => $value)
{if (($ma_count<=$key) and ($key<$disckey1)){$disckey1=$key;}   }
$ma_totdisc=$ma_disc[$disckey1];

$defstkey=$def_sett['ma'];
$ma_price=$ma_notact*$pp_sett[$defstkey][1]*(1-$ma_totdisc*0.01);
 

}


function fhttp_error()
{ global $pp_msg;
msg_not_processed($pp_msg['http_error']);

return;
}

function res_invalid()
{ 
global $pp_msg;

msg_not_processed($pp_msg['decl_by_paypal']);
return;
}


function pp_mail_bak ($email, $subject, $message, $emailfrom) 
{
echo "
<p>mail= $email
<br>subject=$subject
<br>message=$message
<br>From: $emailfrom

";
}

function pp_mail ($email, $subject, $message, $emailfrom) 
{
mail($email, $subject, $message,"From: $emailfrom");
}


function pp_hlt_ad()
{ global $msg2, $pp_sett, $def_sett,$ppkey, $urlclscrpt, $_REQUEST;

$ppkey=$def_sett['h'];
if ($_REQUEST['afltcldr']==""){
$pp_sett[$ppkey][4]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][4];
$pp_sett[$ppkey][5]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][5];
}
}


function pp_mbs_ad()
{ global $msg2, $pp_sett, $def_sett,$ppkey, $urlclscrpt, $_REQUEST;

$ppkey=$def_sett['m'];
if ($_REQUEST['afltcldr']==""){
$pp_sett[$ppkey][4]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][4];
$pp_sett[$ppkey][5]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][5];
}
}

function pp_mact()
{ global $msg2, $pp_sett, $def_sett,$ppkey, $urlclscrpt, $_REQUEST;

$ppkey=$def_sett['ma'];

if ($_REQUEST['afltcldr']==""){
$pp_sett[$ppkey][4]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][4];
$pp_sett[$ppkey][5]= alcl_script_dir_url."scripts/".$pp_sett[$ppkey][5];
} 
}


function pp_connect_to_db()
{
global $host_name, $db_user,$db_password, $html_header, 
$html_footer, $db_name, $table_ads;

mysql_connect("$host_name","$db_user","$db_password");
mysql_select_db("$db_name");
}

?>