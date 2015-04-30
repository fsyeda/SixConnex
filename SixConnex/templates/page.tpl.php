<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>
<!--[if lte IE 6]>
	<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/SixConnex/css/ie6.css" />
	<script src="/sites/all/themes/SixConnex/js/minmax.js"></script>
	<script src="/sites/all/themes/SixConnex/js/DD_belatedPNG_0.0.7a-min.js"></script>
	<script>
	  DD_belatedPNG.fix('#logo-title img,.articleImg,.ciscoImg,.POVImg,.WhitepaperImg,.videosImg,.govt,.tech,.healthcare,.views-field-field-imagepath-value img,.dropdown dt');
	</script>
<![endif]-->
<?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
<div id="page">
  <div id="header">
	<div id="top_head"><div style="clear:both;"></div>
	    <div class="icons"><a class="facebook" href="http://www.facebook.com/pages/6Connex/232235000719" target="_blank"></a><a class="twitter" href="http://twitter.com/6connex" target="_blank"></a><a target="_blank" href="http://www.linkedin.com/companies/405960" style="float: left;" class="linkedin"></a><a class="rss" href="/rss-feed" target="_blank"></a> </div>
	    <div class="login">
		<dl class="dropdown">
		    <dt id="one-ddheader" onmouseover="ddMenu('one',1)" onmouseout="ddMenu('one',-1)"></dt>
		    <dd id="one-ddcontent" onmouseover="cancelHide('one')" onmouseout="ddMenu('one',-1)">
		      <ul>
			<li><a href="http://support.6connex.com" class="underline">Support</a></li>
			<li><a href="http://support.6connex.com" class="underline">Partners</a></li>
			<li><a href="http://virtualsolutions.6connex.com/portal/knowledgecenter/login" class="underline">Social Collaboration Network</a></li>
		      </ul>
		    </dd>
		</dl>
	    </div>
	</div>
	    <div id="logo-title">
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
	      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
	      </a>
	    </div>
	<div id="navigation" class="menu with-main-menu">
	  <?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); ?>
	  <?php print $search_box; ?>
	  <div class="clear"></div>
	</div>
	<div class="clear"></div>
  </div>
  <div id="content">
	<div id="left_content">
	  <?php if ($left) {print $left;} ?>
	</div>
	<div id="content-inner" <?php if(empty($right)){ print "class=\"wide\""; }?>> 
	      <?php if (!empty($tabs)) {print $tabs;} ?>
	  <div class="breadcrumb-title"> 
	    <div class="hd">
	      <div class="breadcrumb">
	      <?php print url_breadcrumb($breadcrumb); ?>
	      </div>
	    </div>
	  </div>
	  <div style="clear:both;"></div>
	  <?php if (!empty($pre_content)) { print $pre_content; } ?>
	  <?php print $content; ?>
    </div>
    <?php if ($right) : ?>
    <div id="right_content">
      <?php print $right; ?>
    </div>
    <?php endif; ?>
    <div class="clear"></div>
  </div>
  <div id="footer">
	<?php print $footer_message; ?>
	<?php print $footer_block; ?>
	<?php print $footer; ?>
  </div>
</div>
<?php print $closure; ?>
</body>
</html>
