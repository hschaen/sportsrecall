<?php

/**
*  This file is part of Almond Classifieds Component for Joomla! (site:http://www.ads-programming.com/acj)
*  Copyright (C) 2008-2009 Ads-Programming.Com. All rights reserved.
*  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL  
*/

include('funcs2.php');
 
function print_categories()
{ 
global $html_header, $html_footer, $categories,$ad_ind_width,$schopt,$ads_fields,$subcnmb,$javastl,$hghltcat,
$catl_width, $top_page_info,  $top_page_width, $topsearchfields, $top_leftcol,$catcols,$_REQUEST,$hdhctgrs,
$tbclr_1, $tbclr_2, $tbclr_3, $tbclr_4, $fntclr_1, $msg, $top_rightcol,$btmtophtml, $templ,
$top_bottom,$getcityval, $popctgr, $top_rightcol, $tmltads, $slctcntr, $indx_url, $use_ajax, $locations;

$top_rightcol="";

catname_adscnt();

global $rmmbrloc;
if ($_REQUEST[$schopt]!=''){  

$cityhtml="&nbsp;<p class='pst1'>
<font class=stfntb> 
&nbsp; &nbsp; <b>".$ads_fields[$schopt][0].": ".$_REQUEST[$schopt]." </b></font>
&nbsp; &nbsp;&nbsp; &nbsp;  <font class='stfnt'>( <a href='{$indx_url}allc=1'>".$msg['all_cities']."</a> $rmmbrloc )</font> </font>
 
<br>
";

$citgtv1=$_REQUEST[$schopt];
$getcityval="$schopt=".checkgetfld($citgtv1)."&";
 
}

if ($_REQUEST[$schopt]!=""){$ltstcityv="&city=".checkgetfld($_REQUEST[$schopt]);}
else{$ltstcityv="";}


$grp_cnt=get_grpcnt();

$popctgr=""; $divkey1="0";  
foreach ($categories as $key => $value)
{
 
$aa1=split("_",$key);

if ($aa1[0]=='newcolumn'){$divkey1="0";   $categ[$key]="</td><td valign='top' align=left>";}
else {
if($aa1[0] == 'title')
{   

$p_val1=""; if ($divkey1=="1"){$p_val1="<p class='pst1'>";}
$categ[$key]= " 
$p_val1<p class='pst1'>
<TABLE BORDER=0 WIDTH='90%' cellspacing=0 cellpadding=0  >
<TR><td class='ct_group'><a href='{$indx_url}".$getcityval."md=browse&mds=search&gmct=".$aa1[1]."'>
<font class='ttl_grp'>".$categories[$key].":</a></font> &nbsp; (".$grp_cnt[$aa1[1]].") 
</TD></TR></table>
";

}else 
{

if (($categories[$key][2] != 'h') and ($key != 'evntcl'))
{$divkey1="1";$categ[$key]=print_cat_name($key);}

}
}

}

include ($templ['top']); 
return;
}

function get_grpcnt()
{ 
global $categories, $sql_mct1, $table_ads, $grpcnt, $gkey2, $HTTP_GET_VARS;
 
foreach ($categories as $key => $value)
{
$aa1=split("_",$key);
if($aa1[0]== 'title'){$kk1=0; 
if ($sql_mct1!=""){

get_gcnt2();
 
}
$sql_mct1="";
}
if($kk1==1 and $key!="evntcl" and  $key!="evcl_rpl" and 
$categories[$key][2]!="h" and $aa1[0]!='newcolumn'){$sql_mct1=$sql_mct1." catname='$key' or";}
if($aa1[0]== 'title'){$kk1=1; $gkey2=$aa1[1];}
}

get_gcnt2();
 
return $grpcnt;
}

function get_gcnt2()
{ 
global $sql_mct1, $table_ads, $grpcnt, $gkey2, $HTTP_GET_VARS;

if ($HTTP_GET_VARS['city']!=""){ $city_query=" and city='".$HTTP_GET_VARS['city']."' ";};
 
$sql_mct1=preg_replace ("/or$/", "", $sql_mct1);
$sql_mct1="( $sql_mct1 ) and ";
$sql_query="select count(idnum) from $table_ads where $sql_mct1 visible=1 $city_query";
$sql_res=mysql_query("$sql_query"); 
$row=mysql_fetch_row($sql_res);
$grpcnt[$gkey2]=$row[0];

}

 
function print_cat_name($key)
{
global $categories, $fntclr_1, $msg, $subcnmb, $getcityval,$popctgr, $indx_url, $ctcnt_m;

 

if ($ctcnt_m[$key]!=""){$cntctvl=$ctcnt_m[$key];} else {$cntctvl="0";}

$vhtml= "
<nobr><a href='".sturl_ct_top($key,$getcityval, "1")."' >
".$categories[$key][0]."</a> <font class='ct_count'>({$cntctvl})</font></nobr> <br>
";
return $vhtml;
}

function catname_adscnt()
{ 
global $table_ads, $schopt, $host_name, $db_user, $db_password, $db_name, $ctcnt_m, $_REQUEST;

if ($_REQUEST[$schopt]!=''){$wrvl="and $schopt='".$_REQUEST[$schopt]."'";};

global $sqlaflcl;
$sql_query="select catname, count(idnum) from $table_ads  where $sqlaflcl   visible=1 $wrvl group by catname ";
$sql_res=mysql_query("$sql_query"); 
while ($row = mysql_fetch_row($sql_res))
{$key=$row[0];  
$ctcnt_m[$key]=$row[1];
}
return $lmass;
}



function checkgetfld($value)
{
$value=ereg_replace(' ', '+', $value);
$value=ereg_replace('@', '%40', $value);
$value=ereg_replace('!', '%21', $value);
$value=ereg_replace("'", '%27', $value);
$value=ereg_replace("\"", '%27', $value);

return $value;
}


function get_total_count()
{
global $cat_fields, $table_ads, $ct, $page, $adsonpage, $html_header, 
$html_footer; 
 
global $sqlaflcl;

$sql_query="select count(idnum) from $table_ads where $sqlaflcl
visible=1 ";
if( !($sql_res=@mysql_query("$sql_query")))
{echo $html_header;
echo "
<center>
<font FACE='ARIAL, HELVETICA'  COLOR='#bb0000' size=-1><b>
Error in connecting to ads MySQL table <font color='#000099'>'$table_ads'</font>.
<br> Seems, this table is not created, 
<a href='createtb.php'>click here </a> to create this table.
</b></font></center>
";
echo $html_footer;
return;
}

$row=mysql_fetch_row($sql_res);
$count=$row[0];
return $count;
} 



?>