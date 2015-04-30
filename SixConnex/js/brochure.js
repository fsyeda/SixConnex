$(function() {
  $('#slideshow').cycle({
    fx: 'fade',
    pager: '#nav',
    fastOnEvent: true,
    timeout: 10000,
    pagerAnchorBuilder: function(idx, slide) {
      return '<a href="#">&nbsp;</a>'; // whatever markup you want
    }
  });
});