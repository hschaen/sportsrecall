<?php
define('alcl_index1_d',1);
require_once("alcl_conf.php");
require_once("funcs1.php");
require_once("favrt.php");
require_once("search.php");
require_once("adshtm.php");
require_once("keywrd.php");  
require_once("alcl_flct.php");
require_once("fsturl.php");

if(defined('alcl_v_joomla')){include_once("jmlfuncs.php");}

if($affcliframe=="yes"){include_once("iframe.php");}
 
$javastl="
<script language='JavaScript'>
<!--
 function displ(nmdiv){if (document.getElementById){
if (document.getElementById(nmdiv).style.display=='none') document.getElementById(nmdiv).style.display ='block';
else document.getElementById(nmdiv).style.display ='none';} else if (document.all)
{ if(document.all[nmdiv].style.display=='none') document.all[nmdiv].style.display ='block';
else document.all[nmdiv].style.display ='none';}}
-->
</script>"; 

global $use_ajax; if ($use_ajax=="yes"){$javastl=js_displ();}  

global $indhdrcvl;$indhdrcvl="1";

$opt_file="conf_m1.php";include("cfgset.php");  
if (($md!="details") and ($md!="") and ($md!="browse")){$opt_file="conf_m2.php";include("cfgset.php");}

$select_text=$msg['Please_choose_one_sl'];

$sqlaflcl="";

if($fb_intrfc=="yes"){include_once("fbfuncs.php"); 
if (($md=="add_form") or ($md=="submitad")){if(!fb_sbmform()){return;}}
if (($md=="privacy_mail") or ($md=="send_mail")){if(!fb_sndprml()){return;}}
}

$rmmbrloc="";

start();

if ($md=="chct") {include("ch_catg.php");ch_categ();}

if ($_GET['adsordtp']!=""){get_top_ads_title();}

if(defined('alcl_v_standalone')){
if (($md=="details") and ($mbac_second=="m"))
{$opt_file="conf_m2.php";include("cfgset.php");
include_once("mb_check.php"); check_mb_login("details&id=$id");}
if ((($md=="add_form") or ($md=="submitad")) and ($mbac_addad=="m"))
{include_once("mb_check.php"); check_mb_login("add_form");}
if ((($md=="privacy_mail") or ($md=="send_mail")) and ($mbac_sndml=="m"))
{include_once("mb_check.php"); check_mb_login("privacy_mail&idnum=$idnum");}
if ($md=="forgmbpassw"){include_once("mb_check.php"); forgot_mb_passw();} if ($md=="adscnt"){adscnt1();}
if ($md=="sendmbps"){include _once("mb_conf.php"); include("mb_check.php"); send_mb_passw($ps_email);}
if ($md=="mblogout"){include_once("mb_check.php"); mb_log_out();}
}

if(defined('alcl_v_joomla')){
if (($md=="details") and ($mbac_second=="m"))
{$opt_file="conf_m2.php";include("cfgset.php");
 if(!jcheck_mb_login()){return;}}
if ((($md=="add_form") or ($md=="submitad")) and ($mbac_addad=="m"))
{ if(!jcheck_mb_login()){return;}}
if ((($md=="privacy_mail") or ($md=="send_mail")) and ($mbac_sndml=="m"))
{ if(!jcheck_mb_login()){return;}} 
} 
 
if ($flattchext!=""){include_once("flattch.php");}
if (($md=="") and ($ct=="") ){include("top.php"); print_categories(); return;} 
if (($md=="browse") or ($md=="")){browse_ads(); return;} 

if ($md=="details"){include("details.php"); if($id==""){$id=0;} ad_details();} 
if ($md=="add_form") {include("forms.php"); print_add_form();} 
if ($md=="editlogin"){ include("forms.php"); edit_login(" ");}
if ($md=="editform"){ include("forms.php");   edit_form();}
if ($md=="forgotpassw"){include("forms.php"); forgotpassw($ps_email);}
if ($md=="sendpassw"){include("funcs2.php");sendpassw($ps_email);}
if ($md=="privacy_mail"){include("forms.php"); privacy_form($idnum);}
if ($md=="send_mail"){include("funcs2.php"); send_mail($idnum);}
if ($md=="submitad") {include("submit.php"); submit_ad();}
if ($md=="edit") {include("submit.php"); edit_ad();}
if ($md=="adsvtrate"){include("funcs2.php"); adsvtrate();} 
if ($md=="chcity"){include_once("ch_city.php"); ch_city(); return; }
 
if ($md=="pclkeyw"){  pop_keywrds_lst(); }
if ($md=="aclkeyw"){  alphabet_keywrds_lst(); }

if ($md=="flgspam"){include_once("funcs2.php"); include_once("flagspam.php"); flag_spam_ad();}

if ($md=="actvt_ad"){include_once("funcs2.php"); include_once("actlink.php"); actvtl_ad();}

if ($md=="renew_ad"){include_once("funcs2.php"); include_once("alcl_exp_ntf.php"); alcl_renew_ad();}

?>