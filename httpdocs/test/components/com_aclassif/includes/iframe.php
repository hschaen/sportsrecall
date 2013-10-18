<?php
$aff_cookie_time=time()+3600000;

$afflpgurl="";
if($_COOKIE['afflurl1']!=""){$afflpgurl=$_COOKIE['afflurl1'];}
if($_REQUEST['affl_url']!=""){$afflpgurl=$_REQUEST['affl_url'];}

if ($afflpgurl=="" and $affdafrb=="yes"){header ("Location: $affredir");}

if ($_REQUEST['affl_url']!=""){setcookie("afflurl1", $_REQUEST['affl_url'], $aff_cookie_time);}

function ifrmrdr()
{
 
global $_REQUEST, $_SERVER, $afflpgurl;
if($afflpgurl!=""){
$afflrdr=$afflpgurl."?".$_SERVER['QUERY_STRING'];
if ($_SERVER['QUERY_STRING']==""){$afflrdr=$afflpgurl;}
$html="
<script language='JavaScript'>
if(self == top){location.replace('{$afflrdr}');}  
</script>
";

return $html;
}
}