$(function() {
  $('#slideshow1').before('<ul id="navImgs">').cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    pager:  '#navImgs', 
     
    // callback fn that creates a thumbnail to use as pager anchor 
    pagerAnchorBuilder: function(idx, slide) { 
        return '<li><a href="#"><img src="' + slide.src + '" width="60" height="35" /></a></li>';
        //return '<li><a href="#">&nbsp;</a></li>';
  }
});
}); 