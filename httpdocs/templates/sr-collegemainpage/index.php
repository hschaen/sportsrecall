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

<script language="JavaScript" type="text/javascript">
function sendthis(form){var formid = form.id;}
</script>
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
              
              <!--  MAIN COMPONENT -->
                            <div class="college_front">
<!--  SR college -->
                            <div class="college_front">
                            <div id="collegetext">
                              <h1><?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = "- College - Sports Recall";
$replace = str_replace($exclude, "", $sr); 
 
$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,'SELECT * FROM Colleges WHERE SchoolName = "' . $replace . '" LIMIT 1');
while($row = mysqli_fetch_array($result))
  {
  echo $row['SchoolName']. '<br />' . $row['Initials'].' - '. $row['Name'];
  }
mysqli_close($con);
?></h1>
                            </div>
                            <div><?php

$doc = JFactory::getDocument();

$sr = $doc->getTitle();

$exclude = "- College - Sports Recall";

$replace = str_replace($exclude, "", $sr);

$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");
// Check connection

if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }


$result = mysqli_query($con,'SELECT * FROM Colleges_Videos WHERE SchoolName = "' . $replace . '" AND MensWomens = "M" LIMIT 1');

$result2 = mysqli_query($con,'SELECT * FROM Colleges_Videos WHERE SchoolName = "' . $replace . '" AND MensWomens = "W" LIMIT 1');


if ($row = mysqli_fetch_array($result)){ 

preg_match("~/embed/(.*?)'~", $row['EmbedURL'], $output);
echo '<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td valign="top"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td height="188" bgcolor="#000000" align="center" valign="middle"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['Title'] . '</td></tr></table></td>';
	  
  //echo '<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td valign="top"><table cellpadding="0" cellspacing="0" width="200" border="0"><tr><td height="188" bgcolor="#000000" valign="middle">' . $row['EmbedURL'] . '</td></tr><tr><td>' . $row['Title'] . '</td></tr></table></td>';
	  
  }
  else {
	  echo '<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td valign="top"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td height="188" bgcolor="#000000" valign="middle"><a href="http://www.sportsrecall.com/uploadavideo" ><img src="http://sportsrecall.com/images/up1.jpg"></a></tr></td></table></td>';
  }
  
  if ($row = mysqli_fetch_array($result2)){ 
preg_match("~/embed/(.*?)'~", $row['EmbedURL'], $output);
	echo '<td valign="top"><table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td valign="top"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td height="188" bgcolor="#000000" align="center" valign="middle"><a href="http://youtu.be/' . $output[1] . '" rel="prettyPhoto"><img src="http://i1.ytimg.com/vi/' . $output[1] . '/0.jpg" width="235" height="176"><p align="right" style="vertical-align:bottom; color:#ffffff; margin-right:10px; text-decoration:underline;">Play</p></a></td></tr><tr><td>' . $row['Title'] . '</td></tr></table></td></tr></table></td></tr></table>';  
 // echo '<td valign="top"><table cellpadding="0" cellspacing="0" width="200" border="0"><tr><td height="188" valign="middle" bgcolor="#000000">' . $row['EmbedURL'] . '</td></tr><tr><td>' . $row['Title'] . '</td></tr></table></td></tr></table>';
	  
  }
  else {
	  echo '<td valign="top"><table cellpadding="0" cellspacing="0" width="235" border="0"><tr><td height="188" bgcolor="#000000" valign="middle"><a href="http://www.sportsrecall.com/uploadavideo" ><img src="http://sportsrecall.com/images/up1.jpg"></a></td></tr></table></td></tr></table>';
  }
  


mysqli_close($con);
?></div>
                        
                           

 <?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = "- College - Sports Recall";
$replace = str_replace($exclude, "", $sr);
$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,'SELECT * FROM Colleges WHERE SchoolName = "' . $replace . '" AND MensWomens = "M" LIMIT 1');
while ($row = mysqli_fetch_array($result)) {
      if ($result == '') {
	  }
	  else {
	   echo ' <hr><div class="mens" >
  <h2>Men</h2><ul class="collegesportslist">';
      if ($row['ACROBATICSTUMBLING'] == '0') 
        {
          // do something
        } 
      else 
        {
		session_start();
        $sports = $row['ACROBATICSTUMBLING'];
		echo '<form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post">';
		echo '<a onClick="submit()">' . $sports . '</a></form>';
        }
        
        if ($row['ARCHERY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ARCHERY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BADMINTON'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BADMINTON'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        
      
      if ($row['BASEBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
			session_start();
		$sports = $row['BASEBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        
    
        
        
      if ($row['BASKETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BASKETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BEACHVOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BEACHVOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BMX'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BMX'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
  
     
        
        if ($row['BOXING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BOXING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
      if ($row['CANOE'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CANOE'];
		echo '<form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post">';
		echo '<a onClick="submit()">' . $sports . "</a></form>>";
        }
        
        
        
        if ($row['CREW'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CREW'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['CRICKET'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CRICKET'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
  
      if ($row['CROSSCOUNTRY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['CROSSCOUNTRY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['CYCLING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CYCLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        if ($row['DIVE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['DIVE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['DRAGRACING'] == '0') 
        {
          // do something
        } 
      else 
        {
      session_start();
		$sports = $row['DRAGRACING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['EQUESTRIAN'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['EQUESTRIAN'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FENCING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FENCING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FIELDHOCKEY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FIELDHOCKEY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FOOTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FOOTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['GOLF'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['GOLF'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['GYMNASTICS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['GYMNASTICS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
		
        
        if ($row['HANDBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['HANDBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['ICEHOCKEY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ICEHOCKEY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['LACROSSE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['LACROSSE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['JUDO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['JUDO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['Kayak'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['Kayak'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['Motorsportsstock'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['Motorsportsstock'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['MotorsportsModified'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['MotorsportsModified'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['OLYMPICS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['OLYMPICS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['PISTOL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['PISTOL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['POLO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['POLO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RACQUETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RACQUETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RIDING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['RIDING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RIFLE'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RIFLE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RODEO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RODEO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['ROWING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ROWING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RUGBY'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RUGBY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SAILING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SAILING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SANDVOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SANDVOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SCULLING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SCULLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SHOOTING'] == '0') 
        {
          // do something
        } 
      else 
        {
      session_start();
		$sports = $row['SHOOTING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SKIING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SKIING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SNOWBOARDING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SNOWBOARDING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SOCCER'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SOCCER'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SOFTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SOFTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SPRINTFOOTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SPRINTFOOTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SYNCHRONIZEDSWIMMING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SYNCHRONIZEDSWIMMING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SYNCHRONIZEDSKATING'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['SYNCHRONIZEDSKATING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['TABLETENNIS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TABLETENNIS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TENNIS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TENNIS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRACK'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TRACK'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRACKFIELD'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TRACKFIELD'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRIATHLON'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['TRIATHLON'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['ULTIMATEFRISBEE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ULTIMATEFRISBEE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['VOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['VOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['WATERPOLO'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['WATERPOLO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['WATERSKI'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['WATERSKI'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['WHEELCHAIRBASKETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['WHEELCHAIRBASKETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['WRESTLING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['WRESTLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
       
    }
  echo '</ul></div>';
}
mysqli_close($con); 
?>

<?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = "- College - Sports Recall";
$replace = str_replace($exclude, "", $sr);
$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,'SELECT * FROM Colleges WHERE SchoolName = "' . $replace . '" AND MensWomens = "F" LIMIT 1');
while ($row = mysqli_fetch_array($result)) {
      if ($result == '') {
	  }
	  else {
	   echo '<div class="womens" >
  <h2>Women</h2><ul class="collegesportslist">';
      if ($row['ACROBATICSTUMBLING'] == '0') 
        {
          // do something
        } 
      else 
        {
		session_start();
        $sports = $row['ACROBATICSTUMBLING'];
		echo '<form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post">';
		echo '<a onClick="submit()">' . $sports . '</a></form>';
        }
        
        if ($row['ARCHERY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ARCHERY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BADMINTON'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BADMINTON'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        
      
      if ($row['BASEBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
			session_start();
		$sports = $row['BASEBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        
    
        
        
      if ($row['BASKETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BASKETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BEACHVOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BEACHVOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['BMX'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BMX'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
  
     
        
        if ($row['BOXING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['BOXING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
      if ($row['CANOE'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CANOE'];
		echo '<form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post">';
		echo '<a onClick="submit()">' . $sports . "</a></form>>";
        }
        
        
        
        if ($row['CREW'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CREW'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['CRICKET'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CRICKET'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
  
      if ($row['CROSSCOUNTRY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['CROSSCOUNTRY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['CYCLING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['CYCLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        if ($row['DIVE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['DIVE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['DRAGRACING'] == '0') 
        {
          // do something
        } 
      else 
        {
      session_start();
		$sports = $row['DRAGRACING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['EQUESTRIAN'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['EQUESTRIAN'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FENCING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FENCING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FIELDHOCKEY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FIELDHOCKEY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['FOOTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['FOOTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['GOLF'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['GOLF'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['GYMNASTICS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['GYMNASTICS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
		
        
        if ($row['HANDBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['HANDBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['ICEHOCKEY'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ICEHOCKEY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['LACROSSE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['LACROSSE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['JUDO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['JUDO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['Kayak'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['Kayak'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['Motorsportsstock'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['Motorsportsstock'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['MotorsportsModified'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['MotorsportsModified'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['OLYMPICS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['OLYMPICS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['PISTOL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['PISTOL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['POLO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['POLO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RACQUETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RACQUETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RIDING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['RIDING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RIFLE'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RIFLE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RODEO'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RODEO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['ROWING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ROWING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['RUGBY'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['RUGBY'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SAILING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SAILING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SANDVOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SANDVOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SCULLING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SCULLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SHOOTING'] == '0') 
        {
          // do something
        } 
      else 
        {
      session_start();
		$sports = $row['SHOOTING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SKIING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SKIING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SNOWBOARDING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SNOWBOARDING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SOCCER'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SOCCER'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SOFTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['SOFTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SPRINTFOOTBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SPRINTFOOTBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SYNCHRONIZEDSWIMMING'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SYNCHRONIZEDSWIMMING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['SYNCHRONIZEDSKATING'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['SYNCHRONIZEDSKATING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['TABLETENNIS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TABLETENNIS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TENNIS'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TENNIS'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRACK'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TRACK'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRACKFIELD'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['TRACKFIELD'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['TRIATHLON'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['TRIATHLON'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['ULTIMATEFRISBEE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['ULTIMATEFRISBEE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['VOLLEYBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['VOLLEYBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['WATERPOLO'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['WATERPOLO'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['WATERSKI'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['WATERSKI'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
          if ($row['WHEELCHAIRBASKETBALL'] == '0') 
        {
          // do something
        } 
      else 
        {
         session_start();
		$sports = $row['WHEELCHAIRBASKETBALL'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
        if ($row['WRESTLING'] == '0') 
        {
          // do something
        } 
      else 
        {
       session_start();
		$sports = $row['WRESTLING'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
       
    }
  echo '</ul></div>';
}
mysqli_close($con); 
?>

<?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = "- College - Sports Recall";
$replace = str_replace($exclude, "", $sr);
$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,'SELECT * FROM Colleges WHERE SchoolName = "' . $replace . '" AND MensWomens = "F" LIMIT 1');
while ($row = mysqli_fetch_array($result)) {
	$ch = $row["CHEER"];
	$da = $row["DANCE"];
	$ss = $row["SPIRITSQUAD"];
	$st = $row["STUNT"];
	$yc = $row["YELLCREW"];
      if (($ch == '0') && ($da == '0') && ($ss == '0') && ($st == '0') && ($yc == '0')) {
	  }
	  else {
	   echo '<div class="collegesportsmore" >
  <h2>More</h2><ul class="collegesportlist">';
        if ($row['CHEER'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['CHEER'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
		
		if ($row['DANCE'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['DANCE'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
		if ($row['SPIRITSQUAD'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['SPIRITSQUAD'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
		if ($row['STUNT'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['STUNT'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
        
      
        
        if ($row['YELLCREW'] == '0') 
        {
          // do something
        } 
      else 
        {
        session_start();
		$sports = $row['YELLCREW'];
		echo '<li class="collegesportlist"><form action="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" method="post"><a href="index.php?option=com_content&view=article&id=1136&Itemid=1257&college='.$row['SchoolName'].'&sport=' . $sports . '" onClick="submit()">' . $sports . '</a></form></li>';
        }
	  }
	  echo '</ul></div>';
	  }
mysqli_close($con); 
?>
<div class="related" ><hr>
  <h2>Related</h2>
    <jdoc:include type="modules" name="related" style="joomspirit" />
  <p>&nbsp;</p>
</div>
<div class="rep" >
  <h2><jdoc:include type="modules" name="rep_school" style="joomspirit" />
  </h2>
  <p><a href="http://www.sportsrecall.com/contactus"><img src="http://www.sportsrecall.com/images/rep.jpg" width="250" height="174" alt="Rep Your School!" /></a></p>

</div>
<div class="links" >
<hr>
  <h2>Your School's official links</h2>
  <?php
$doc = JFactory::getDocument();
$sr = $doc->getTitle();
$exclude = " - College - Sports Recall";
$replace = str_replace($exclude, "", $sr);
$con=mysqli_connect("localhost","sRECALL013test","Tgcstudios24!","sRECALL013test");// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,'SELECT * FROM Colleges WHERE SchoolName = "' . $replace . '" LIMIT 1');
while($row = mysqli_fetch_array($result))
  {
	  if ($row['WebsiteSchoolURL'] == '0') {
		  }
		  else {
  echo "<a target='_blank' href='http://" . $row['WebsiteSchoolURL'] . "'>" . $row['WebsiteSchoolURL'] .  "</a>\n<br>";
		  }
		    if ($row['WebsiteSportsURL'] == '0') {
		  }
		  else {
  echo "<a target='_blank' href='http://" . $row['WebsiteSportsURL'] . "'>" . $row['WebsiteSportsURL'] .  "</a>\n<br>";
		  } 
		  if ($row['Youtube'] == '0') {
		  }
		  else { echo "<a target='_blank' href='http://www.youtube.com/" . $row['Youtube'] . "'>youtube.com/" . $row['Youtube'] .  "</a>\n<br>"; 
		  }
		  if ($row['TwitterMain'] == '0') {
		  }
		  else { echo "<a target='_blank' href='http://www.twitter.com/" . $row['TwitterMain'] . "'>twitter.com/" . $row['TwitterMain'] .  "</a>\n<br>";}
		  if ($row['TwitterAlt'] == '0') {
		  }
		  else { echo "<a target='_blank' href='http://www.twitter.com/" . $row['TwitterAlt'] . "'>twitter.com/" . $row['TwitterAlt'] .  "</a>\n<br>"; } 
		  if ($row['FacebookMain'] == '0') {
		  }
		  else { echo "<a target='_blank' href='http://www.facebook.com/" . $row['FacebookMain'] . "'>facebook.com/" . $row['FacebookMain'] .  "</a>\n<br>"; }
		  if ($row['FacebookSports'] == '0') {
		  }
		  else { echo "<a target='_blank' href='http://www.facebook.com/" . $row['FacebookSports'] . "'>facebook.com/" . $row['FacebookSports'] .  "</a>\n<br>";
  }
		  }
mysqli_close($con);
?>
  <p>&nbsp;</p>
</div>
                           
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