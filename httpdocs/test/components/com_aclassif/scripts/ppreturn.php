<?php  require("../includes/alcl_conf.php"); include("pp_conf.php"); include("pp_funcs.php"); pp_hlt_ad(); ?>
<?php $tmpl_tp="msg"; global $layout_tmpl, $layoutnb; 

if(!defined('alcl_v_standalone')){echo "<html><body>";}

include($layout_tmpl[$layoutnb]['header']); ?>

<div style='padding:25px 20px 25px 20px;'>
<font class='stfnt'> 
<b> 
<a href='<?php echo alcl_link(""); ?>'><?php echo $msg['top']; ?></a>
</b></font>
</div>
<div style='padding:25px 20px 25px 20px; line-height: 2;'>
<font class='lrfnt'> 
<b>
<?php echo $msg['pp_Thank_you_for_payment']; ?>
</b></font>
</div>

<?php global $layout_tmpl, $layoutnb; include($layout_tmpl[$layoutnb]['footer']); 

if(!defined('alcl_v_standalone')){echo "</body></html>";}

?>