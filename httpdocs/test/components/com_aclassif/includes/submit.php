<?php
require("funcs2.php");

function edit_ad()
{
global $ed_passw, $ed_id, $table_ads, $moderating,$ppactv, $adphotos,  $sndadmnotif, $adm_passw, $admcookpassw;

if(!check_fields()){return;}

$sql_query="select passw from $table_ads where idnum=$ed_id";
$sql_res=mysql_query("$sql_query");
$row = mysql_fetch_array ($sql_res);
 
global $lgneditd; if(defined('alcl_v_joomla')){$usrnam1=gt_usrname();}
if (($lgneditd=="yes") and (($row['login']!=$usrnam1) or ($usrnam1=="" ))) 
{
if ($adm_passw!="$ed_passw")
{
if($admcookpassw != $adm_passw)
{
global $jloginfo;
echo "
<html>
<body>
incorrect password !
<p>
$jloginfo
</body>
</html>
";
exit;
}
}
}

if ($lgneditd!="yes" and $row['passw']!="$ed_passw")
{
if ($adm_passw!="$ed_passw")
{
if($admcookpassw != $adm_passw)
{
echo "incorrect password";
exit;
}
}
}


#del_edtfl($ed_id);
save_photos($ed_id);

$db_entry=form_sql_entry($ed_id);
$db_entry['idnum']="";
$db_entry['adphotos']=$adphotos;
$db_entry['time']="";
$db_entry['exptime']="";

# if (($moderating=='yes') and ($ppactv!='yes')) {$db_entry['visible']="3";}

$db_entry['catname']="";
$sql_string="";
foreach ($db_entry as $db_key =>$db_value)
{
 
if ($db_entry[$db_key]!=""){
$sql_string=$sql_string."$db_key='$db_entry[$db_key]', ";
}

global $cat_fields;
if (($db_entry[$db_key]=="") and ($cat_fields[$db_key][0]!=""))
{$sql_string=$sql_string."$db_key='', ";}

}

global $flattchext;
if ($flattchext!=""){$sql_string=$sql_string.updflattv($ed_id);}

$sql_string=corr_sqlstring($sql_string);

global $kwsrchfrm;
if ($kwsrchfrm=="yes"){delete_kw_ad($ed_id);}

$sql_query="update $table_ads set $sql_string where idnum=$ed_id";
mysql_query("$sql_query");

if ($kwsrchfrm=="yes"){insert_kw_ad($ed_id);}


if ( $sndadmnotif=="yes" )
{
include("admml.php"); eml_to_adm($ed_id,"edit");
}

print_subm_ad($ed_id,'editad');
return;
}

function get_idnum()
{

global $id_count, $table_ads, $ct;
$sql_query="select idnum from $table_ads 
order by idnum desc limit 1";
$sql_res=mysql_query("$sql_query");
$row=mysql_fetch_row($sql_res);
$id_count=$row[0];
$id_count++;

 
return $id_count;

}


 function check_fields()
{
global $db_entry, $visible_val, $cat_fields, $email, $_POST, $photos_count, $phptomaxsize, $userfile,
$incl_prevphoto, $incl_mtmdfile, $mtmdfile_maxs, $userfile_name, $select_text, $msg2;



if(!get_magic_quotes_gpc())
{

foreach ($_POST as $key5 => $value )
{
$_POST[$key5]=addslashes($_POST[$key5]);
}
}

foreach ( $cat_fields as $key => $value )
{
$_POST[$key]=ereg_replace('<', '&#060;', $_POST[$key]);
$_POST[$key]=ereg_replace('>', '&#062;', $_POST[$key]);

if ($cat_fields[$key][2]=="minmax")
{ $_POST[$key]=ereg_replace(',', '', $_POST[$key]); 

$_POST[$key]=preg_replace ('/[A-Za-z]|\$|,|\?|\+/', "", $_POST[$key]);

}

if ($cat_fields[$key][4]=="date")
{ 
$key_d=$key."_dd"; $key_m=$key."_mm"; $key_y=$key."_yy";
$_POST[$key]=$_POST[$key_y]."-".$_POST[$key_m]."-".$_POST[$key_d];

if (($_POST[$key_m] > 12)  or ($_POST[$key_m] < 1) or
($_POST[$key_d] > 31) or ($_POST[$key_d] < 1) 
or ($_POST[$key_y] < 1))
{
$message="
<center>
<font class='msgf2' >
  ".$msg2['incorr_date_f']."  ".$cat_fields[$key][0]."  </font>
</center>
"; 
output_message($message);
return false;
}

 
}

if ($cat_fields[$key][4]=="checkbox")
{
$aa5=split('<option>',$cat_fields[$key][7]);
$i_aa5=0;
foreach ($aa5 as $value1)
{
$i_aa5++;
$namechbx=$key.$i_aa5;
if ($_POST[$namechbx]!="")
{$_POST[$key]=$_POST[$key].$_POST[$namechbx]."; ";}
}
}


$str_length1=strlen($_POST[$key]);
$aa4=split(':',$cat_fields[$key][3]);
$fmaxsize=$aa4[1];
if ($aa4[2]!="") $fmaxsize=$aa4[2];

global $charsetcd; if ($charsetcd=='utf-8' or $charsetcd=='UTF-8'){$fmaxsize=2*$fmaxsize;}

if ( $str_length1 > $fmaxsize)
{
$message="
<center>
<font class='msgf2' >
  ".$msg2['Ad_info_in_field']." <font class='msgf1' >".$cat_fields[$key][0]." </font> ".$msg2['is_too_large_inf']."</font>
</center>
";
output_message($message);
return false;
}

if ($_POST[$key]==$select_text)
{$_POST[$key]="";}

if ($cat_fields[$key][5]=='1')
{
if (( $_POST[$key]=="") or ( $_POST[$key]=="http://"))
{
$message="
<center>
<font class='msgf2' >
  ".$msg2['Ad_field_c']." <font class='msgf1' > ".$cat_fields[$key][0]." </font> ".$msg2['was_mising_on_form']."</font>
</center>
";
output_message($message);
return false;
}
}
}
if ($cat_fields['email'][5]=='1'){
$_POST['email']=check_email($_POST['email']);
}

for ($i=1; $i<=$photos_count; $i++)
{
$i1=$i-1;
if (file_exists($userfile[$i1])){
if (filesize($userfile[$i1]) > $phptomaxsize)
{
$phptomaxsize1=$phptomaxsize/1000000;
$message="
<center>
<font class='msgf2' >
  ".$msg2['Your_photo_n']." $i  ( ".$userfile_name[$i1]." )  ".$msg2['is_too_large_ph']." < $phptomaxsize1 
".$msg2['mbyte_v'].".
</font></font>
</center>
";
output_message($message);
return false;
}

global $ch_pht_tp;
if ( ($ch_pht_tp=='yes') and 
!($im1 = @imagecreatefromjpeg($userfile[$i1])) and 
!($im1 = @ImageCreateFromGIF ($userfile[$i1])) and !($im1 = @imagecreatefrompng ($userfile[$i1])) )
{
$message="
<center>
<font class='msgf2' >
  ".$msg2['Your_photo_n']." $i  ( ".$userfile_name[$i1]." )  ".$msg2['photo_incorr_type']."  
</font></font>
</center>
";

output_message($message);
return false;
} 

}
}
 

if ($incl_mtmdfile=="yes")
{
$i1++;
if (file_exists($userfile[$i1])){
if (filesize($userfile[$i1]) > $mtmdfile_maxs)
{
$mtmdfile_maxs1=$mtmdfile_maxs/1000000;
$message="
<center>
<font class='msgf2' >
  ".$msg2['Your_multimedia_file']." ".$userfile_name[$i1]."
 ".$msg2['is_too_large_mmf']." < $mtmdfile_maxs1 ".$msg2['mbyte_v'].".
</font></font>
</center>
";

output_message($message);
return false;
}
}
}

return true;
}
 
function checknusrads()
{
global $cat_fields, $table_ads, $ct, $page, $adsonpage,
$html_header, $html_footer, $usrads_chcktime, $usrads_max, $categories,$ch_nmusr,
$REMOTE_ADDR, $msg2, $msg, $templ; 

$timech1=time() - $usrads_chcktime*86400;
$sql_query="select count(idnum) from $table_ads where
 ipaddr1='$REMOTE_ADDR' and time > $timech1";
$sql_res=mysql_query("$sql_query");
$row=mysql_fetch_row($sql_res);
$count=$row[0];

if ($count >= $usrads_max)
{
$message="
<font class='msgf2'>
<center> 
".$msg2['exceeded_max_n_ads']." ($usrads_max) ".$msg2['allowed_per_time_p']." ($usrads_chcktime ".$msg2['days_v']." 
<p>
<font class='stfnt'>
<a href='".alcl_link("md=browse&ipaddr1=$REMOTE_ADDR&visunvis=1")."'>".$msg2['Click_here_v']." </a>
".$msg2['to_see_your_ads']." 
</font>
 
</center>
</font>
";

$thtml= "
<center><table width='400'><tr><td>
<font class='stfntb'>
<b><a href='".alcl_link("")."'>".$msg['top'].":</a></b></font>
&nbsp; 
<font class='stfntb'> 
<b>&nbsp; 
<a href='".alcl_link("ct=$ct")."'>".$categories[$ct][0]."
</b></a> 
</font> 
<hr size='1'><p>
$message
<p><hr size='1'>
</tr></td></table>
</center>
";
 
include($templ['msg']);
return false;
}

return true;
}

function check_duplication()
{
global $pradsdupl, $_POST, $table_ads, $msg2, $ct;

 

if ($pradsdupl=='yes'){

$email_d=$_POST['email'];
$title_d=$_POST['title'];

$dupl_k="0";

$time1=time() - 1000;
$sql_query="select idnum from $table_ads where title='$title_d' and  email='$email_d' 
and catname='$ct' and (time > $time1)";
$sql_res=mysql_query("$sql_query");
while ($row = mysql_fetch_array ($sql_res))
{
$dupl_id=$row['idnum']; $dupl_k="1";
}

if ($dupl_k=="1"){
global $moderating;
$title_d=stripslashes($title_d);
if ($moderating!="yes"){
$ttlad1="<a href='".alcl_link("md=details&ct=$ct&id=$dupl_id")."'>$title_d (ID# $dupl_id)</a>";
}
else {$ttlad1="<font color='#000077'>$title_d (ID# $dupl_id)</font>";}

$message="
<center>
<font FACE='ARIAL, HELVETICA' COLOR='#880000' >
 <b> ".$msg2['tried_duplicate_ad']." <br>
 $ttlad1
</font></b></font>
</center>
";

output_message($message);
return false;
}

}

return true;
}

function submit_ad()
{
global $db_entry, $visible_val, $cat_fields, $email, $_POST, $ch_nmusr,
 $photo_url, $photo_path, $id_count, 
$userfile, $userfile_name, $visible_val, $html_header, $html_footer, $msg, $msg2, $paymgtw,
$photos_url, $photos_path, $photos_count, $moderating, $ad_idnum, $sndadmnotif,$use_spmg, $templ;

global $actadoptv; if($actadoptv=="yes"){$moderating="yes"; include_once("actlink.php");}

global $usevrfcode;
if ($usevrfcode=="yes"){include_once("vrfuncs.php"); if(!ch_vrcode()){return;}  }

if ($ch_nmusr=="yes"){if(!checknusrads()){return;}}

if (file_exists($userfile[$photos_count])){
$fl_mss1=split("\.",$userfile_name[$photos_count]); 
if ($fl_mss1[1]!=""){foreach ($fl_mss1 as $value){$multimext1=".".$value;}}
if(!check_fl_ext($multimext1)){return;}
}

if(!check_fields()){return;}

if(!check_duplication()){return;}

$visible_val="1";
if ($moderating=='yes') {$visible_val="0";} 

if ($use_spmg == 'yes'){
include("spamgrd.php"); $spmresult=check_spamw();
if ($spmresult == "1") {$visible_val="4";}
}

$idnum=get_idnum();
save_photos($idnum);
$sql_query=add_sql_entry($idnum);

if( !(@mysql_query("$sql_query")))
{ 
$thtml= "
<center> 
<font class='stfntb'><b>
".$msg2['Error_subm_new_ad']."
</b></font></center>
";
include($templ['msg']); 
return;
}

global $kwsrchfrm;
if ($kwsrchfrm=="yes"){insert_kw_ad($idnum);}

if ( $sndadmnotif=="yes" )
{
include("admml.php"); eml_to_adm($idnum,"add");
}

print_subm_ad($ad_idnum,'submitad');
return;
}

function save_photos($id_cnt)
{
global $photo_url, $photo_path,  
$userfile, $userfile_name, $_POST, 
$photos_url, $photos_path, $photos_count, $moderating, $ad_idnum, $adphotos,
$incl_prevphoto, $incl_mtmdfile, $multimedia_path, $previewphoto_path,$savepherr,
$md; 

global $resphdb, $maxpixph;

get_jpg_path($id_cnt);

$savepherr="0";
for ($i=1; $i<=$photos_count; $i++)
{
 $i1=$i-1;

if (($md=="submitad")  and (file_exists($photo_path[$i])))
{unlink($photo_path[$i]); }

if (($userfile_name[$i1]=="d")  and (file_exists($photo_path[$i])))
{ unlink($photo_path[$i]);}

$chbphdl="chdlpht".$i;
if (($_POST[$chbphdl]=="1")  and (file_exists($photo_path[$i])))
{ unlink($photo_path[$i]);}


if (file_exists($userfile[$i1])){ 
if (($userfile_name[$i1] !="") and ($userfile_name[$i1] !="d")){
 copy($userfile[$i1], $photo_path[$i]) ;

if ($resphdb=="yes"){phtresize($photo_path[$i], $maxpixph);} 

}
}
}

if ($incl_prevphoto=="yes")
{
$i1++;

 
if (( $userfile_name[$i1]=="d") and (file_exists($previewphoto_path)))
{unlink($previewphoto_path);}

if (file_exists($userfile[$i1])){
if (($userfile_name[$i1] !="") and ($userfile_name[$i1] !="d")){
 copy($userfile[$i1], $previewphoto_path) ;
}
}
 
}

if ($incl_mtmdfile=="yes")
{
$i1++;
get_att_path($id_cnt); 
if (($md=="submitad")  and (file_exists($multimedia_path)))
{unlink($multimedia_path); }

if (($userfile_name[$i1]=="d") and (file_exists($multimedia_path))) 
 { unlink($multimedia_path);}

if (($_POST['chdlmmf']=="1") and (file_exists($multimedia_path))) 
 { unlink($multimedia_path);}

if (file_exists($userfile[$i1])){
if (($userfile_name[$i1] !="" ) and ($userfile_name[$i1] !="d")){
 copy($userfile[$i1], $multimedia_path) ;
}
} 

}


$adphotos="no";
for($i=1; $i<=$photos_count; $i++)
{
if (file_exists($photo_path[$i])){$adphotos="yes";} 
}
}


function phtresize($photofile, $maxpix)
{

if ($ph_size = @getimagesize($photofile) )
{
$width = $ph_size[0]; 
$height = $ph_size[1]; 

$vsz_width=$width/$maxpix;
$vsz_height=$height/$maxpix;


if ($vsz_width > $vsz_height) {$vsz=$vsz_width;} else {$vsz=$vsz_height;}

if ($vsz > 1)
{ 
$new_width=$width/$vsz;
$new_height=$height/$vsz;

if(  $im1 = @imagecreatefromjpeg($photofile) )
{  
$im2 = imagecreatetruecolor($new_width,$new_height); 
@imagecopyresized($im2, $im1, 0, 0, 0, 0, $new_width,$new_height,$width,$height); 
imagejpeg($im2, $photofile); 
imagedestroy($im1); 
imagedestroy($im2);
} 

else {

if(  $im1 = @ImageCreateFromGIF ($photofile) )
{  
$im2 = imagecreatetruecolor($new_width,$new_height); 
@imagecopyresized($im2, $im1, 0, 0, 0, 0, $new_width,$new_height,$width,$height); 
imagegif($im2, $photofile); 
imagedestroy($im1); 
imagedestroy($im2);
} 

if  ($im1 = @imagecreatefrompng ($photofile) )
{  
$im2 = imagecreatetruecolor($new_width,$new_height); 
@imagecopyresized($im2, $im1, 0, 0, 0, 0, $new_width,$new_height,$width,$height); 
imagegif($im2, $photofile); 
imagedestroy($im1); 
imagedestroy($im2);
} 

}

}
}
}



function print_photos1($idnum, $row)
{
global  $photos_url, $photos_path, $photo_path, $photo_url, $photos_count,
$multim_link, $msg2, $msg;
$pho1="";
get_jpg_path($idnum);
for($i=1; $i<=$photos_count; $i++)
{
if (file_exists($photo_path[$i])){$pho1="1";} 
 
}
 
if ($pho1==""){return;}

$html="
<center>
<table width='100%' bgcolor='#eeeeee'>
<tr><td> 
<font class='lrfnt'>
<b> ".$msg['photo_gallery']." </b> </font>
</td></tr></table>
</center>
";
$timepho=time();
for($i=1; $i<=$photos_count; $i++)
{
if (file_exists($photo_path[$i])){
$photokey="photocaption$i";
$photocapt=$row[$photokey];

global $maximgswith; $imgsize1=GetImageSize($photo_path[$i]);
$imgwidth1=""; if ($imgsize1[0] > $maximgswith){ $imgwidth1="width='$maximgswith'";}


$html=$html."
<font class='stfntb'>
<font size='-2'>".$msg['photo_d']." $i</font>
<center>
<img src='$photo_url[$i]?$timepho' $imgwidth1> <br> $photocapt
</center>
";
}
}
return $html;
}

function print_multimed1($idnum)
{
global $incl_mtmdfile,$multimedia_path, $multimedia_url, $multim_link, $msg, $row;
$mm_link="";  
if ($incl_mtmdfile=='yes')
{
get_att_path($idnum);

if (file_exists($multimedia_path)) 
{
$attflsz1=round(filesize($multimedia_path)/1000);
if ($attflsz1==0){$attflsz1=1;}
$mm_link="
<p><li>".$msg['multimedia_file'].": 
<a href='$multimedia_url'>".$row['attfltl']." (".$row['attflext'].", ".$attflsz1."Kb)</a></li>
";
 
}

if (($row['flsrvur1']!="") and ($row['flsrvur1']!="http://")){
$mm_link=$mm_link."<p><b>
<li><a href='".$row['flsrvur1']."'>".$row['flsrvtl1']."</a></li>
</b>";
}

if (($row['flsrvur2']!="") and ($row['flsrvur2']!="http://")){
$mm_link=$mm_link."<p><b>
<li><a href='".$row['flsrvur2']."'>".$row['flsrvtl2']."</a></li>
</b>";
}
if ($row['embdcod']!=""){$mm_link=$mm_link."<p> ".$row['embdcod'];}
}

 $mm_link="
<table width='400'><tr><td>$mm_link</td></tr></table>
";
return  $mm_link;
}





function print_subm_ad($ad_idnum,$ed_subm)
{
global $cat_fields, $photos_count, $html_header, $html_footer, $id, $md,
$ct, $categories, $ad_second_width, $left_width_sp, $exp_period, $incl_prevphoto,
$prphotolimits, $pr_lim_width, $pr_lim_height, $previewphoto_path, $previewphoto_url,
$moderating, $savepherr, $visible_val, $msg2, $msg,$evnt_cat, $templ, $ppactv, $pp_sett,$ppkey, $row, $exp_perdhlt;

$sdtpcol="#ffffff";
$sdtpcol1="#ffcccc";

$row=get_edit_info($ad_idnum);
$row=check_row($row);

$time1=$row['time'];
$date_posted=get_date($time1); 
$time2=$time1+$exp_period*86400;
if ($row['adrate'] > 0){$time2=$time1+$exp_perdhlt*86400;}
$expire_date=get_date($time2);

if ($ed_subm=='editad') 
{ $info11=$msg2['ad_edited_successfuly'];
}

if ($ed_subm=='submitad') 
{ $info11=$msg2['ad_submitted_successfuly'];
}

global $actadoptv; if ($actadoptv=='yes' and $md!='edit'){
$info11=$info11."
<br> ".$msg2['to_activate_ad_click_link']."
";
send_conf_email($row['idnum'],$row['email'],$row['title']);
}

if ((($moderating=='yes') and ($ppactv!='yes') and ($actadoptv!="yes") ) or ($visible_val=="4"))
{
$info11=$info11."
<br> ".$msg2['will_appear_as_possible']."
";
}

 


global $hltadsf;
if (($hltadsf=="yes")  and (($row['adrate'] < 1) or ($row['adrate']=="")))
{$lnhledview="<a href='".alcl_highlight_url."?id=".$row['idnum']."' target='_blank'>".$msg2['Highlight_this_ad']."</a> &nbsp;  &nbsp; ";}
$lnhledview=$lnhledview."$hltadstxt <a href='".alcl_link("edit_delete=edit&ed_id=".$row['idnum']."&md=editform&ed_passw=".$row['passw'])."' 
>".$msg['edit_ad']."</a>";
if ($moderating!='yes'){
$lnhledview=$lnhledview."&nbsp; &nbsp; <a href='".alcl_link("md=details&ct=$ct&id=".$row['idnum'])."'  >".$msg2['view_ad1']."</a>";
}
$lnhledview="<p><b><font class='stfntb'> $lnhledview </font> </b><p>";


if (($ppactv=="yes")  and  ($moderating=='yes') and ($md!='edit')){$info11="";} 
 
if ($savepherr=="1")
{ $info11=$info11."
<br>
<font class='stfntb'>
".$msg2['photos_not_saved']."
</font>
";
}

$thtml_top="
<table style='width:650; margin:10px; padding:10px;'><tr><td>
<font class='stfntb'>
<b><a href='".alcl_link("")."'>".$msg['top'].":</a></b> 
&nbsp; 
 
<b>&nbsp; 
<a href='".alcl_link("ct=$ct")."'>".$categories[$ct][0]."</a>
</b> 
</font> 
<div style='padding-top:25px;'>
<font class='msgf1'> 
 $info11  </font>
</div>
";
 
$thtml="
<div style='padding:15px;'>
$lnhledview
</div>
<table style='width:630px;' >
<tr>
<td class='dtb1'>
<font class='df1'>
  &nbsp; ".$row['title']."</font>
</td>
</tr>
</table>
<table  style='width:630px;'>
<tr><td style='margin:5px;padding:5px;'>
<font class='smallg'> 
&nbsp;&nbsp;".$msg['adsid']." : </font><font class='smallr'>
".$row['idnum']."
</font>; 
&nbsp;
<font class='smallg'>
   ".$msg['date_posted_d']." : </font> <font class='smallr' >
 $date_posted </font>;
&nbsp;
";
if ($evnt_cat[$ct] !="yes"){
$thtml=$thtml. "
<font class='smallg' >".$msg['expire_date_d']." : </font>
<font class='smallr' > $expire_date </font>;
</font>

";
}

$thtml=$thtml. "
<table   style='margin:5px;padding:5px; width:615px;'>
"; 

foreach ( $cat_fields as $key => $value )
{

if (($key != 'title') and !($key=='initialad' and $row[$key]=='--'))
{ 
$thtml=$thtml. "
<tr><td bgcolor='$sdtpcol' class='frmtb3' style='BORDER-BOTTOM: #bbbbee 1px solid;'>
<font class='stfnt'>
&nbsp; ".$cat_fields[$key][0].":</font>
</td><td bgcolor='$sdtpcol'  class='frmtb3a' style='BORDER-BOTTOM: #bbbbee 1px solid;'>
<font class='stfntb'>
 ".$row[$key]." &nbsp; </td></tr>
";
} 
}

$thtml=$thtml. "
</table></td></tr></table>
";

if ($incl_prevphoto=='yes')
{
get_jpg_path($row['idnum']);
 
$phlimitinfo="";
if ($prphotolimits=='yes'){
if ($pr_lim_height==""){
$phlimitinfo="width='$pr_lim_width'";
}
else{
$phlimitinfo="width='$pr_lim_width' height='$pr_lim_height'";
}
}
 
if (file_exists($previewphoto_path)){

$thtml=$thtml. "
<center>
<font class='stfnt'>
".$msg['preview_photo'].": 
<img src='$previewphoto_url' $phlimitinfo hspace='6' align='center'> 
</font>
</center>
";
}
}
 
$thtml=$thtml. "
<p>
<center>
<font class='stfnt'>
".print_multimed1($row['idnum'])."
</font>
</center>
<p>
";

$thtml=$thtml. print_photos1($row['idnum'], $row)."
</tr></td></table>
";

include($templ['sbm']);
return;
}

function form_sql_entry($idnum)
{
global $ct,  $table_ads, $visible_val, $cat_fields,
$_POST, $moderating, $adphotos, $cook_login;

$db_entry['login']=$cook_login;

$time_now=time();
 
$db_entry['idnum']=$idnum;

$db_entry['exptime']=$time_now + $expperiod*86400;
$db_entry['time']=$time_now;

$db_entry['catname']=$ct;

global $gr_categories;
if ($gr_categories[$ct]=="g"){echo "incorrect categories"; return;}
$db_entry['gctname']=$gr_categories[$ct];

$db_entry['visible']=$visible_val;
$db_entry['adphotos']= $adphotos;

global $fb_intrfc; if($fb_intrfc=="yes"){
$fb_submfld=fb_submitfld(); if ($fb_submfld){$db_entry=$db_entry+$fb_submfld;}
}

foreach ($cat_fields as $key => $value)
{
 
$db_entry[$key]=$_POST[$key];

}
 
return $db_entry;
}
 
function add_sql_entry($idnum)
{
global $ct, $db_entry, $table_ads, $visible_val, $cat_fields,
$_POST, $ad_idnum, $oldvrsn, $REMOTE_ADDR, $_REQUEST;

 
$ad_idnum=$idnum;
$db_entry=form_sql_entry($idnum);

$db_entry['cntemll']="0";
$db_entry['cntvstr']="0";
$db_entry['ratevtcn']="0";
$db_entry['ratevtrt']="0";
$db_entry['adcommkey']=0;

if ($_POST['replidf'] !=""){
$db_entry['replyid']=$_POST['replidf'];
$db_entry['adcommkey']=1;
}
 
$db_sql_string="";
$db_sql_var="";
foreach ($db_entry as $db_key => $db_value)
{

if ($db_key !="")
{
if ($db_entry[$db_key] == "" )
{
$db_sql_string=$db_sql_string."NULL, ";
}
else{
$db_sql_string=$db_sql_string."'$db_entry[$db_key]', ";
}
$db_sql_var=$db_sql_var."$db_key, ";
}
}
$db_sql_string=$db_sql_string."'$REMOTE_ADDR', ";
$db_sql_var=$db_sql_var."ipaddr1, "; 

global $flattchext;
if ($flattchext!=""){
$db_sql_var=$db_sql_var.flattsbf(); 
$db_sql_string=$db_sql_string.flattsbv(); 
};

$db_sql_string=corr_sqlstring($db_sql_string);
$db_sql_var=corr_sqlstring($db_sql_var);
$sql="insert into $table_ads ( $db_sql_var ) values( $db_sql_string )";

return $sql;

} 

?>
