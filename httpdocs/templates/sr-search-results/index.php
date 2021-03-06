<?php

/**

* @copyright  Copyright (C) 2012 - JoomSpirit. All rights reserved.

*/



defined('_JEXEC') or die('Restricted access');



$path = $this->baseurl.'/templates/'.$this->template;

$width_right = $this->params->get('width_right');

$width_left = $this->params->get('width_left');

$width = $this->params->get('width');

$user1_width = $this->params->get('user1_width');

$user3_width = $this->params->get('user3_width');

$user4_width = $this->params->get('user4_width');

$user6_width = $this->params->get('user6_width');

$color_theme = $this->params->get('color_theme');

$general_background = $this->params->get('general_background');

$min_height = $this->params->get('min_height');

$font = $this->params->get('font');

$font_content = $this->params->get('font_content');

$text_social_icons = $this->params->get('text_social_icons');

$google1 = $this->params->get('google1');

$responsive = $this->params->get('responsive');

$js='<div class="js" ><a class="jslink" target="_blank" href="http://www.dgcstudios.com" title="">DGCSTUDIOS</a></div>';



if ($this->params->get('fontSize') == '') 

{ $fontSize ='0.75em'; } 

else { $fontSize = $this->params->get('fontSize'); }



JHtml::_('behavior.framework', true);

?>



<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >



<head>



<jdoc:include type="head" />



<?php if ($responsive == 'yes') : ?>

<meta name="viewport" content="initial-scale=1" />

<?php endif; ?>



<!--  Google fonts  -->

<?php if ( ($font != 'Josefin') && ($font != 'Arial') && ($font != 'Verdana') && ($font != 'Trebuchet')  && ($font != 'Georgia')  && ($font != 'Times new roman')  && ($font != 'Tahoma')  ) : ?>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $font ; ?>" />

<?php endif; ?>

<!--  Font face  -->

<?php if ( ($font == 'Josefin') ) : ?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/font-<?php echo $font ; ?>.css" type="text/css" media="all" />

<?php endif; ?>



<!-- style sheet links -->

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/nav.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/dynamic_css.php&#63;font=<?php echo $font ; ?>&amp;font_content=<?php echo $font_content ; ?>&amp;width=<?php echo $width ; ?>&amp;width_left=<?php echo $width_left ; ?>&amp;width_right=<?php echo $width_right ; ?>" media="all" />



<?php if ($responsive == 'yes') : ?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/media_queries.css" type="text/css" media="screen" />

<?php else : ?>

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/media_queries_no_responsive.php&#63;width=<?php echo $width ; ?>" media="screen" />

<?php endif; ?>



<?php if ( ($general_background == 'black') ) : ?>

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/black_background.css" type="text/css" media="all" />

  <?php if ($responsive == 'yes') : ?>

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/black_background_responsive.css" type="text/css" media="screen" />

  <?php endif; ?>

<?php endif; ?>



<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/theme_<?php echo $color_theme ; ?>.css" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/print.css" type="text/css" media="print" />



<!--[if lte IE 9]>

<style type="text/css">

  .gradient {

    filter: none;

    }

</style>

<![endif]-->



<!--[if lte IE 8]>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/html5.js"></script>

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/lib/js/css3-mediaqueries.js"></script>  

<![endif]-->



<!--[if lte IE 7]>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" />

<![endif]-->



</head>

<body <?php echo ('style="font-size:'.$fontSize.';"');?> class="<?php echo $general_background ; ?>">



  <div class="site">

  

    <div class="border_top_header">

    </div>

    

    <div class="wrapper-site">

    

      <header class="header-site">

      

        <?php if($this->countModules('translate')) : ?>

        <div id="translate">

          <jdoc:include type="modules" name="translate" style="xhtml" />

        </div>  

        <?php endif; ?>    



        <?php if($this->countModules('top_menu')) : ?>

        <nav class="top_menu">

          <jdoc:include type="modules" name="top_menu" style="joomspirit" />

        </nav>  

        <?php endif; ?>

        

        <?php if($this->countModules('logo')) : ?>

        <div class="logo" >

          <jdoc:include type="modules" name="logo" style="joomspirit" />

        </div>

        <?php endif; ?>

        

        <div class="clr"></div>

    

      </header>

      

      

      <aside class="main_menu_box">

        <div>

          <?php if($this->countModules('menu')) : ?>

          <nav class="main_menu">

            <jdoc:include type="modules" name="menu" style="joomspirit" />

          </nav>  

          <?php endif; ?>

          

          <?php if ($this->countModules( 'search' )) : ?>

          <div class="search-module visible-desktop" >

            <jdoc:include type="modules" name="search" style="xhtml" />

          </div>  

          <?php endif; ?>        

          

          <div class="clr"></div>

        </div>  

      </aside>  <!-- enf of main menu box  -->

  

      

      

      

      <div class="middle-site" style="min-height : <?php echo $min_height ; ?>px ;">

      

        <?php if($this->countModules('breadcrumb')) : ?>

        <nav class="breadcrumb">

          <jdoc:include type="modules" name="breadcrumb" style="xhtml" />

        </nav>  

        <?php endif; ?>

            

            

        <?php if($this->countModules('top')) : ?>

        <div class="top" >

          <jdoc:include type="modules" name="top" style="joomspirit" />

        </div>

        <div class="clr"></div>

        <?php endif; ?>  

        

          

        <?php if($this->countModules('left')) : ?>

        <div class="left_column visible-desktop" >
        
<!--  left COLUMN frontpage-->


<jdoc:include type="modules" name="left" style="joomspirit" />

        </div>

        <?php endif; ?>

        

    

        <!--  RIGHT COLUMN -->

        <div class="right_column">          

            

          <!--  USER 1, 2, 3 -->

          <?php if($this->countModules('user1') || $this->countModules('user2') || $this->countModules('user3')) : ?>

          <aside class="users_top">

                                

            <?php if($this->countModules('user1')) : ?>

            <div class="user1" <?php echo ('style="width:'.$user1_width.'%;"');?>>

              <jdoc:include type="modules" name="user1" style="joomspirit" />

            </div>

            <?php endif; ?>

                      

            <?php if($this->countModules('user3')) : ?>

            <div class="user3" <?php echo ('style="width:'.$user3_width.'%;"');?>>

              <jdoc:include type="modules" name="user3" style="joomspirit" />

            </div>

            <?php endif; ?>

          

            <?php if($this->countModules('user2')) : ?>

            <div class="user2">

              <jdoc:include type="modules" name="user2" style="joomspirit" />

            </div>

            <?php endif; ?>

          

            <div class="clr"></div>

                      

          </aside>

          <?php endif; ?>  <!--  END OF USERS TOP  -->

          

          <div id="main_component" >

          

            <?php if($this->countModules('right')) : ?>

            <aside class="right-module-position visible-desktop" >

              <jdoc:include type="modules" name="right" style="joomspirit" />

            </aside>

            <?php endif; ?>        

          

            <div class="main-content">

             <div> </div>

              <!--  MAIN COMPONENT -->

                            <div class="front-page">

<!--  SR frontpage -->

                            <div class="front-page">
							<div><jdoc:include type="component" /></div>
                            <div><jdoc:include type="modules" name="featured_video"  /></div>

<!--  SR search action -->
                            <div id="video_results" >
<?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = "- Sports Recall";
$replace = str_replace($exclude, "", $sr);
$boom = $_SERVER['REQUEST_URI'];
$parts = parse_url($boom);
parse_str($parts['query'], $query);
$keyword = $query['keyword'];

if (isset($keyword)) {
	echo '<h2>Showing Videos Matching: ' . $keyword . '</h2>';
	$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");
	// Check connection
	if (mysqli_connect_errno())
		{
 			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$result = mysqli_query($con,'SELECT * FROM Mens_Boxing_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" LIMIT 4');
	
	$result2 = mysqli_query($con,'SELECT * FROM Womens_Boxing WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" LIMIT 4');

	$result3 = mysqli_query($con,'SELECT * FROM Mens_Tennis_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" OR TAG5 = "' . $keyword . '" OR TAG6 = "' . $keyword . '" OR TAG7 = "' . $keyword . '" OR TAG8 = "' . $keyword . '" OR TAG9 = "' . $keyword . '" LIMIT 4');
	
	$result4 = mysqli_query($con,'SELECT * FROM Womens_Tennis_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" OR TAG5 = "' . $keyword . '" OR TAG6 = "' . $keyword . '" OR TAG7 = "' . $keyword . '" LIMIT 4');
	
	$result5 = mysqli_query($con,'SELECT * FROM Mens_Golf_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" OR TAG5 = "' . $keyword . '" OR TAG6 = "' . $keyword . '" OR TAG7 = "' . $keyword . '" OR TAG8 = "' . $keyword . '" OR TAG9 = "' . $keyword . '" LIMIT 4');
	
	$result6 = mysqli_query($con,'SELECT * FROM Womens_Golf_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" LIMIT 4');
	
	$result7 = mysqli_query($con,'SELECT * FROM Hockey_TeamPage_Videos WHERE TAG = "' . $keyword . '" OR TAG2 = "' . $keyword . '" OR TAG3 = "' . $keyword . '" OR TAG4 = "' . $keyword . '" OR TAG5 = "' . $keyword . '" OR TAG6 = "' . $keyword . '" OR TAG7 = "' . $keyword . '" OR TAG8 = "' . $keyword . '" LIMIT 4');
	
	$result8 = mysqli_query($con,'SELECT * FROM Colleges_Videos WHERE Tag = "' . $keyword . '" OR Tag2 = "' . $keyword . '" LIMIT 4');
	
	$row_cnt_bx = $result->num_rows;
	$row_cnt_bxw = $result2->num_rows;
	$row_cnt_tn = $result3->num_rows;
	$row_cnt_tnw = $result4->num_rows;
	$row_cnt_gl = $result5->num_rows;
	$row_cnt_glw = $result6->num_rows;
	$row_cnt_ho = $result7->num_rows;
	$row_cnt_co = $result8->num_rows;



	/*Womens Boxing*/
	if (($row_cnt_tn == 0) && ($row_cnt_tnw == 0) && ($row_cnt_gl == 0) && ($row_cnt_glw == 0) && ($row_cnt_ho == 0) && ($row_cnt_co == 0))  {
		while($row = mysqli_fetch_array($result2)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	
	}
	/*Mens Tennis*/
	 else if (($row_cnt_bx == 0) && ($row_cnt_bxw == 0) && ($row_cnt_gl == 0) && ($row_cnt_glw == 0) && ($row_cnt_ho == 0) && ($row_cnt_co == 0))  {
	while($row = mysqli_fetch_array($result3)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
	
	/*Womens Tennis*/
	 else if (($row_cnt_bx == 0) && ($row_cnt_bxw == 0) && ($row_cnt_gl == 0) && ($row_cnt_glw == 0) && ($row_cnt_ho == 0) && ($row_cnt_co == 0))  {
	while($row = mysqli_fetch_array($result4)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
	
	/*Mens Golf*/
	 else if (($row_cnt_bx == 0) && ($row_cnt_bxw == 0) && ($row_cnt_tn == 0) && ($row_cnt_tnw == 0) && ($row_cnt_ho == 0) && ($row_cnt_co == 0))  {
	while($row = mysqli_fetch_array($result5)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
	
	/*Womens Golf*/
	 else if (($row_cnt_bx == 0) && ($row_cnt_bxw == 0) && ($row_cnt_tn == 0) && ($row_cnt_tnw == 0) && ($row_cnt_ho == 0) && ($row_cnt_co == 0))  {
	while($row = mysqli_fetch_array($result6)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
	
	/*Mens Hockey*/
		 else if ($row_cnt_co >= 1)  {
	while($row = mysqli_fetch_array($result7)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
	
	/*College Videos*/
		 else if ($row_cnt_co >= 1)  {
			 
	while($row = mysqli_fetch_array($result8)){
		preg_match("~/embed/(.*?)'~", $row['EmbedURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['Title'] . '</td></tr></table></div>';
	  }	
	}
	
	/*Mens Boxing*/
	else { 
	while($row = mysqli_fetch_array($result)){
		preg_match("~/embed/(.*?)'~", $row['VIDEOURL'], $output);
		echo '<div style="display:inline-block; padding:9px; width:235px; vertical-align:top;" width="235"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td align="center" valign="middle" height="188" bgcolor="#000000"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['TITLE'] . '</td></tr></table></div>';
	  }	
	}
mysqli_close($con);
}
?>
<div class="alcl_ts5"><table width="300" cellpadding="10" cellspacing="10">
<form action="http://sportsrecall.com/thesportsmall/index.php?option=com_aclassif&amp;" method="get" id="fs">
<tbody><tr><td>
<input type="hidden" name="md" value="browse">
<input type="hidden" name="mds" value="search">
<input type="hidden" name="ct" value="">
<input type="hidden" name="fsearch" value="1">

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td width="50">
<input type="text" style="width:300px;" id="srchstrf" class="kwfsrch" name="keyword" value="">
</td><td width="50">
<input type="submit" value="Search" class="kwfsrch"> 
</td></tr></tbody></table></form>
</td></tr></tbody></table></div>
                          
                                       
                            <!--<jdoc:include type="modules" name="video_results"  />-->
                            
                            </div>
                            <div id="sportsmall_results" ><jdoc:include type="modules" name="sportsmall_results"  /></div>
                            <div id="search_bar" ><jdoc:include type="modules" name="search_bar"  /></div>
                            
                            



                           

                            </div>

                            

              <jdoc:include type="message" />

              

                        

            </div>

                          

            <div class="clr"></div>

              

          </div>

          

          <!--  USER 4, 5, 6 -->

          <?php if($this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6')) : ?>

          <aside class="users_bottom">

                                

            <?php if($this->countModules('user4')) : ?>

            <div class="user4" <?php echo ('style="width:'.$user4_width.'%;"');?>>

              <jdoc:include type="modules" name="user4" style="joomspirit" />

            </div>

            <?php endif; ?>

                      

            <?php if($this->countModules('user6')) : ?>

            <div class="user6" <?php echo ('style="width:'.$user6_width.'%;"');?>>

              <jdoc:include type="modules" name="user6" style="joomspirit" />

            </div>

            <?php endif; ?>

          

            <?php if($this->countModules('user5')) : ?>

            <div class="user5">

              <jdoc:include type="modules" name="user5" style="joomspirit" />

            </div>

            <?php endif; ?>

          

            <div class="clr"></div>

                      

          </aside>

          <?php endif; ?>  <!--  END OF USERS BOTTOM  -->

          

          <div class="clr"></div>

    

        </div>    <!--  END OF RIGHT COLUMN   -->  

          

        <!-- important for left column -->

        <div class="clr"></div>

        

        <?php if($this->countModules('bottom')) : ?>

        <div class="bottom" >

          <jdoc:include type="modules" name="bottom" style="joomspirit" />

        </div>

        <?php endif; ?>

        

        <?php if($this->countModules('left')) : ?>         <!-- Left and right column are duplicate to modify the order on mobiles devices   -->

        <div class="left_column hidden-desktop" >

          <jdoc:include type="modules" name="left" style="joomspirit" />

        </div>

        <?php endif; ?>

        

        <?php if($this->countModules('right')) : ?>

        <aside class="right-module-position hidden-desktop" >

          <jdoc:include type="modules" name="right" style="joomspirit" />

        </aside>

        <?php endif; ?>        



        

        <?php if ($this->countModules( 'search' )) : ?>

        <div class="search-module hidden-desktop" >

          <jdoc:include type="modules" name="search" style="xhtml" />

        </div>  

        <?php endif; ?>

          

      </div>      <!--  END OF MIDDLE SITE  -->

  

    

      <footer class="bottom-site">

        

        <!--  SOCIAL LINKS  -->

        <?php if( ($google1 == 'yes') || ($this->params->get('twitter') != '') || ($this->params->get('blogger') != '') || ($this->params->get('delicious') != '') || ($this->params->get('flickr') != '') || ($this->params->get('facebook') != '') || ($this->params->get('digg') != '') || ($this->params->get('rss') != '') || ($this->params->get('linkedin') != '') || ($this->params->get('myspace') != '') || ($this->params->get('youtube') != '') || ($this->params->get('vimeo') != '') || ($this->params->get('picasa') != '') || ($this->params->get('stumbleupon') != '') || ($this->params->get('technorati') != '') || ($this->params->get('tumblr') != '') || ($this->params->get('yahoo') != '') ) : ?>

        <div id="social-links">

          <ul>

            

            <?php if ($text_social_icons != '') : ?>

            <li class="text_social_icons"><span><?php echo $text_social_icons ; ?></span></li>

            <?php endif; ?>

            

          

            <?php if ($google1 == 'yes') : ?>

            <li><g:plusone  size="small" count="false"></g:plusone></li>

            <?php endif; ?>

            

            <?php if ($this->params->get('twitter') != '') : ?>

            <li><a target="_blank" id="twitter" title="Twitter" href="<?php echo $this->params->get('twitter') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/twitter-bird3.png" alt="" /></a></li>

            <?php endif; ?>    

            <?php if ($this->params->get('blogger') != '') : ?>

            <li><a target="_blank" id="blogger" title="Blogger" href="<?php echo $this->params->get('blogger') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/blogger.png" alt="" /></a></li>

            <?php endif; ?>

        

            <?php if ($this->params->get('delicious') != '') : ?>

            <li><a target="_blank" id="delicious" title="Delicious" href="<?php echo $this->params->get('delicious') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/delicious.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('facebook') != '') : ?>

            <li><a target="_blank" id="facebook" title="Facebook" href="<?php echo $this->params->get('facebook') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/facebook-logo.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('rss') != '') : ?>

            <li><a target="_blank" id="rss" title="RSS" href="<?php echo $this->params->get('rss') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/rss-badge.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('linkedin') != '') : ?>

            <li><a target="_blank" id="linkedin" title="Linkedin" href="<?php echo $this->params->get('linkedin') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/linkedin-logo.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('myspace') != '') : ?>

            <li><a target="_blank" id="myspace" title="Myspace" href="<?php echo $this->params->get('myspace') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/myspace-logo.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('yahoo') != '') : ?>

            <li><a target="_blank" id="yahoo" title="Yahoo" href="<?php echo $this->params->get('yahoo') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/yahoo.png" alt="" /></a></li>

            <?php endif; ?>

        

            <?php if ($this->params->get('flickr') != '') : ?>

            <li><a target="_blank" id="flickr" title="Flickr" href="<?php echo $this->params->get('flickr') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/flickr.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('youtube') != '') : ?>

            <li><a target="_blank" id="youtube" title="Youtube" href="<?php echo $this->params->get('youtube') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/you-tube1.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('vimeo') != '') : ?>

            <li><a target="_blank" id="vimeo" title="Vimeo" href="<?php echo $this->params->get('vimeo') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/vimeo.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('digg') != '') : ?>

            <li><a target="_blank" id="digg" title="Digg" href="<?php echo $this->params->get('digg') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/digg.png" alt="" /></a></li>

            <?php endif; ?>

            <?php if ($this->params->get('picasa') != '') : ?>

            <li><a target="_blank" id="picasa" title="Picasa" href="<?php echo $this->params->get('picasa') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/picasa.png" alt="" /></a></li>

            <?php endif; ?>  

            <?php if ($this->params->get('stumbleupon') != '') : ?>

            <li><a target="_blank" id="stumbleupon" title="Stumbleupon" href="<?php echo $this->params->get('stumbleupon') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/stumbleupon.png" alt="" /></a></li>

            <?php endif; ?>  

            <?php if ($this->params->get('technorati') != '') : ?>

            <li><a target="_blank" id="technorati" title="Technorati" href="<?php echo $this->params->get('technorati') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/technorati-logo.png" alt="" /></a></li>

            <?php endif; ?>  

            <?php if ($this->params->get('tumblr') != '') : ?>

            <li><a target="_blank" id="tumblr" title="Tumblr" href="<?php echo $this->params->get('tumblr') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons<?php if ( ($general_background == 'black') ) : ?>-blacktheme<?php endif; ?>/tumblr.png" alt="" /></a></li>

            <?php endif; ?>

            

            

          </ul>

        </div>       <!--   end of Website icons     -->

        <?php endif; ?>

        

        

        <?php if($this->countModules('address')) : ?>

        <div class="address">

          <jdoc:include type="modules" name="address" style="joomspirit" />

        </div>

        <?php endif; ?>

        

        <!--  bottom nav  -->

        <?php if ($this->countModules( 'bottom_menu' )) : ?>

        <nav class="bottom_menu <?php if( ($google1 == 'yes') || ($this->params->get('twitter') != '') || ($this->params->get('blogger') != '') || ($this->params->get('delicious') != '') || ($this->params->get('flickr') != '') || ($this->params->get('facebook') != '') || ($this->params->get('digg') != '') || ($this->params->get('rss') != '') || ($this->params->get('linkedin') != '') || ($this->params->get('myspace') != '') || ($this->params->get('youtube') != '') || ($this->params->get('vimeo') != '') || ($this->params->get('picasa') != '') || ($this->params->get('stumbleupon') != '') || ($this->params->get('technorati') != '') || ($this->params->get('tumblr') != '') || ($this->params->get('yahoo') != '') ) : ?>with_social_icons<?php endif; ?>">

          <jdoc:include type="modules" name="bottom_menu" style="joomspirit" />

        </nav>

        <?php endif; ?>

        

        

        <div class="clr"></div>

        

      </footer>      <!--  END OF FOOTER SITE    -->    

        

    </div>           <!--  END OF WRAPPER SITE   -->  

  

  <?php echo $js ; ?>

  </div>            <!--  END OF SITE         -->

  

  <div class="background-site"></div>

  

  <?php if ($google1 == 'yes') : ?>

  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

  <?php endif; ?>



</body>

</html>