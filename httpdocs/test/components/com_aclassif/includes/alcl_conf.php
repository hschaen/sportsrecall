<?php 
$phpvrsn=explode('.',phpversion()); if($phpvrsn[0]*10+$phpvrsn[1] >= 53 ){ error_reporting(E_ALL  & ~E_NOTICE & ~E_DEPRECATED);}
else {error_reporting(E_ALL & ~E_NOTICE);}

require("glbvr.php");
 
include_once("alcl_cfgs.php"); 
include_once("alcl_iniset.php");

$opt_file="conf_opt.php";include("cfgset.php"); 
$opt_file="conf_cat.php";include("cfgset.php"); 
if($alcl_loc_mltlopt=="2" and !defined('alcl_adm_interface')){ $alcl_locations_flds=array('city');}
$alcl_locations_cnt=count($alcl_locations_flds);

$confvflpth=$alcl_dir_path.'/config/conf_v.php';

#if ($_SERVER['HTTPS']=='on' and defined('alcl_fb_app')) {define('alcl_http_v',"https://");} else{define('alcl_http_v',"http://");}
if ($_SERVER['HTTPS']=='on') {define('alcl_http_v',"https://");} else{define('alcl_http_v',"http://");}

if(file_exists($confvflpth)){include_once("conf_v.php");} else {define('alcl_v_joomla',1);}
if(defined('alcl_v_joomla')){include_once("conf_joomla.php");}
else{include_once("conf_standalone.php");}

if($alcl_dtblt=='yes'){include_once('alcl_tblt.php');}

if (!defined('alcl_adm_interface')){include_once("alcl_ltvr.php");}

if (defined('alcl_v_standalone')) {include_once("conf_layout.php");} 
if (defined('alcl_v_joomla')) {include_once("conf_jlayout.php");}
if (defined('alcl_v_wordpress')) {include_once("conf_jlayout.php");}
 
include_once('alcl_paths.php');
include_once('alcl_links.php');
require_once("sfmd.php"); 

$alcl_config_links=get_config_links();

header("Content-Type: text/html; charset=$charsetcd\n");  
 
 include_once("conf2.php");
############################################################

if (!defined('alcl_v_joomla') or (defined('alcl_v_joomla') and $mbac_addad=='f')){$lgneditd="no";}; 

$prphotolimits="yes";
$pr_lim_height="";  $pr_lim_width="50";
$lnkttlfl="yes";

global $charsetcdsn; if(strToLower($charsetcd)=="utf-8"){$charsetcdsn="1";}

if ($moderating_ct!=""){$spoptmss=split(",",$moderating_ct); 
foreach ($spoptmss as $value){if($value==$_REQUEST['ct']){$moderating=$moderating_vl;}}}
if ($mbac_second_ct!=""){$spoptmss=split(",",$mbac_second_ct); 
foreach ($spoptmss as $value){if($value==$_REQUEST['ct']){$mbac_second=$mbac_second_vl;}}}
if ($mbac_addad_ct!=""){$spoptmss=split(",",$mbac_addad_ct); 
foreach ($spoptmss as $value){if($value==$_REQUEST['ct']){$mbac_addad=$mbac_addad_vl;}}}
if ($mbac_sndml_ct!=""){$spoptmss=split(",",$mbac_sndml_ct); 
foreach ($spoptmss as $value){if($value==$_REQUEST['ct']){$mbac_sndml=$mbac_sndml_vl;}}}

if (!defined('alcl_adm_interface')){

if ($affcliframe=="yes"){$layoutnb='affiliate';}
if($use_ajax!="yes"){$useajxctnv="no";}

if(defined('alcl_lite_layout') or defined('alcl_fb_app')){$useajxctnv='no';}

}

if(defined('alcl_fb_app')){
$affcliframe="no";
$fb_intrfc="yes"; $fbappscrpt="yes"; $sturlvar="no"; $ppactv="no"; 
$mbac_second='f'; $mbac_addad='f';  $mbac_sndml='f';
$alcl_loc_pltp='1';
$layoutnb='facebook_app';
$ht_header=$ht_header_fb;
$ht_footer=$ht_footer_fb;
if(!defined('alcl_lite_layout')){define('alcl_lite_layout','1');}
} 


require("jsfuncs.php");

$templ=$layout_tmpl[$layoutnb]; 

if (defined('alcl_v_standalone')){include_once("mb_lginf.php");} 

foreach ($categories as $key=> $value){
if ($value[3]=="group"){$categr_group=$key; $gr_categories[$key]="g";}
else {$gr_categories[$key]=$categr_group;}
} 

require_once("gmap_conf.php");
if (defined(alcl_v_joomla)){include_once(jmlfuncs.php);}

if ($chlayoutcl=='layout_main'){
if ($alcl_hdrftrtp=='2')
{$layout_tmpl[$layoutnb]['header']='t_header_2.html'; $layout_tmpl[$layoutnb]['footer']='t_footer_2.html'; 
 global $alcl_mn_tp_lt; $alcl_mn_tp_lt="2";
}
if ($alcl_indadsltp=='2'){$layout_tmpl[$layoutnb]['ads_list']='t_ads_list2.html';}
if ($alcl_indadsltp=='3'){$layout_tmpl[$layoutnb]['ads_list']='t_ads_list3.html';}
}

include('conf_custom.php');

if(($_GET['md']=='browse') and ($_GET['idemail']!="" or $_GET['mblogin']!="")){$sturlvar="no";}

?>