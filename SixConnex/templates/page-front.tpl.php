<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<title>6Connex</title>
<link rel="shortcut icon" href="/sites/default/files/SixConnex_favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" media="all" href="/modules/system/defaults.css" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/SixConnex/css/base.css" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/SixConnex/css/foot.css" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/SixConnex/css/home.css" />
<!--[if lte IE 6]>
        <link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/SixConnex/css/ie6.css" />
        <script src="/sites/all/themes/SixConnex/js/DD_belatedPNG_0.0.7a-min.js"></script>
        <script>
        DD_belatedPNG.fix('#logo-title img,.dropdown dt,#ss1 a,#ss2 img,#ss3 img');
        </script>
<![endif]-->
<head>
<?php print $scripts; ?>
<script>
$(document).ready(function() {
        $('#cycleArea').cycle({containerResize: false, fx: 'fade', speed: 800, timeout: 15000});
        $('#ss0').cycle({containerResize: false, fx: 'fade', speed: 800, timeout: 9000, next: '.row1slide .next', prev: '.row1slide .prev', pager: '.row1slide .pager', pagerAnchorBuilder: function(idx, slide) {return '<a href="#">&nbsp;</a>';}});
        $('.tallshow').cycle({containerResize: false, fx: 'fade', speed: 800, timeout: 43000, next: '#col2 .next', prev: '#col2 .prev'});
        $('.tallshow2').cycle({containerResize: false, fx: 'fade', speed: 800, timeout: 8000, pager: '#col4 .pager', pagerAnchorBuilder: function(idx, slide) {return '<a href="#">&nbsp;</a>';}});	 
	 
  $('#VS').cycle({containerResize: false,fx:'fade',timeout: 8000,next:'#col2 .next', prev:'#col2 .prev', pagerAnchorBuilder: function(idx, slide) {return '<a href="#">&nbsp;</a>';}});

});
</script>

<body>
<!-- START Background Images -->
	<div id="cycleArea">
		<div id="bg1" class="hero"></div>
		<div id="bg2" class="hero" style="display: none;"></div>
		<div id="bg3" class="hero" style="display: none;"></div>
		<div id="bg4" class="hero" style="display: none;"></div>
	</div>
<!-- END #header -->
<div id="outerContainer">
	<div id="innerContainer">
		<!-- START #header -->
		<div id="header">
			<div id="top_head">
				<div style="clear:both;"></div>
				<div class="icons">
					<a class="facebook" href="http://www.facebook.com/pages/6Connex/232235000719" target="_blank"></a><a class="twitter" href="http://twitter.com/6connex" target="_blank"></a><a target="_blank" href="http://www.linkedin.com/companies/405960" style="float: left;" class="linkedin"></a><a class="rss" href="/rss-feed" target="_blank"></a> </div>
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
			<div id="header-region">
				<?php print $header; ?>
			</div>
			<div id="navigation" class="menu with-main-menu">
				<?php print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); ?>
				<?php print $search_box; ?>
			</div>           
		</div>
        <!-- END #header -->
       
        <!-- START #content -->
		<div id="content">
                <a class="solutions" href="/contact" alt="solutions">&nbsp;</a>
                <div class="row1slide">
                        <div class="controls">
                                <div class="prev"></div>
                                <div class="next"></div>
                        </div>
                        <div id="ss0">
                                <div id="ss1"><img src="/sites/all/themes/SixConnex/images/front/Cisco_Admin.jpg"></div>
                                <div id="ss2" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Cisco_Leadership.jpg"></div>
                                <div id="ss3" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Cisco_Data.jpg"></div>
                                <div id="ss4" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Cisco_Experience.jpg"></div>
                                <div id="ss5" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Cisco_Global.jpg"></div>
                                <div id="ss6" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Computer_Taipei.jpg"></div>
                                <div id="ss7" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/HP.jpg"></div>
                                <div id="ss8" style="display: none;"><img src="/sites/all/themes/SixConnex/images/front/Siemens.jpg"></div>
                        </div>
                </div>
		<div class="clear"></div>
                <div id="secnavi">
                        <ul>
                                <li class="first"><a href="/solutions/type/sales-conference">Virtual Solutions</a></li>
                                <li class="second"><a href="/solutions/type/sales-conference">Sales Conference</a></li>
                                <li class="third"><a href="/solutions/type/training-center">Training Center</a></li>
                                <li class="fourth"><a href="/solutions/type/tradeshow">Tradeshow</a></li>
                                <li class="fifth"><a href="/solutions/type/recruiting-fair">Recruiting Fair</a></li>
                                <li class="sixth"><a href="/solutions/type/partners-conference">Partners Conference</a></li>
                                <li class="seventh"><a href="/solutions/type/knowledge-center">Knowledge Center</a></li>
                        </ul>
                        <div class="clear"></div>
                </div>
               
                <div class="col" id="col1">
                                <h2>Quick References</h2>
                                <?php $block = module_invoke('block', 'block', 'view', 11); ?>
                                <?php print $block['content']; ?>
                        <div id="row2">
                                <div id="video-popup"><div id="swf"></div></div>
                                <div class="videodemo_all" onClick="openFlash('/sites/all/themes/SixConnex/js/video/6connex_quicktour_5_013_604.flv');"><img src="/sites/all/themes/SixConnex/images/blocks/tour.png"/></div>
                        </div>
                </div>
               
                <div class="col" id="col2">
		   <h2>Virtual Experiences</h2>
			<div class="controls2">
                                <div class="prev"></div>
                                <div class="next"></div>
                        </div>
                        <div id="VS">
                                <div><a href="/solutions/example/kaiser-permanente"><img title="sky" src="/sites/all/themes/SixConnex/images/front/Airway_Management.jpg" /></a></div>
                                <div id="VS1" style="display: none;"><a href="/solutions/example/cisco"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/Cisco_Datacenter.jpg" /></a></div>
                                <div id="VS2"style="display: none;"><a href="/solutions/example/att"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/Cisco_leadership_bottom.jpg" /></a></div>
                                <div id="VS3"style="display: none;"><a href="/solutions/example/att"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/FISHERUNITECH.jpg" /></a></div>
                                <div id="VS4"style="display: none;"><a href="/solutions/example/webex"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/GE.jpg" /></a></div>
                                <div id="VS5"style="display: none;"><a href="/solutions/example/webex"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/HP_bottom.jpg" /></a></div>
                                <div id="VS6"style="display: none;"><a href="/solutions/example/fisher/unitech"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/Kaiser.jpg" /></a></div>
                                <div id="VS7"style="display: none;"><a href="/solutions/example/kaiser-permanente"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/MXPO.jpg" /></a></div>
                                <div id="VS8"style="display: none;"><a href="/solutions/example/navistar"><img title="taxsaver" src="/sites/all/themes/SixConnex/images/front/Navistar.jpg" /></a></div>
                        </div>
                </div>
                <div class="col" id="col3">
                        <h2>Latest News</h2>
                        <?php
                        $viewName = 'press_release_feed';
                        print views_embed_view($viewName);
                        ?>
                </div>
                <div class="col" id="col4">
                        <h2>What's New</h2>
                        <div class="pager"></div>
                        <div class="content tallshow2">
                                <div class="tallshow2-1"><a href="/sites/default/files/Solutions/Cisco_SLO_Case_Study_08_09_09.pdf"><img src="/sites/all/themes/SixConnex/images/front/tallshow2-1.png"></a></div>
                                <div class="tallshow2-2" style="display: none;"><a href="/sites/default/files/6connex_Version_5_GA_Announcement_v5.pdf"><img src="/sites/all/themes/SixConnex/images/front/tallshow2-2.png"></a></div>
                                <div class="tallshow2-3" style="display: none; cursor:pointer;" onClick="openFlash('/sites/all/themes/SixConnex/js/video/Tech_Talk_v7.flv');"><img src="/sites/all/themes/SixConnex/images/front/tallshow2-3.png"></div>
                                <div class="tallshow2-4" style="display: none; cursor:pointer;" onClick="openFlash('/sites/all/themes/SixConnex/js/video/Carbone_Social_Networking_3.flv');"><img src="/sites/all/themes/SixConnex/images/front/tallshow2-4.png"></div>
                        </div>
                </div>
                <div class="clear"></div>
        </div>
        <!-- END #content -->
       
        <!-- START #footer -->
		<div id="footer">
			<div id="footMenu">
				<?php print $footer; ?>
			</div>
		</div>
        <!-- END #footer -->
	</div>
</div>
</body>
       
</html>