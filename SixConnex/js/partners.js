/*$(document).ready(function(){
    $('#Partner_slides').cycle({
    fx:'fade',
    timeout: 8000,
    pager: '#nav',
    pagerAnchorBuilder: function(idx, slide) {
      return '<a href="#">&nbsp;</a>'; // whatever markup you want
    }
  });
});*/


var partnerFeaturedCount = 5;
var partnerFeaturedCurrent = 1;
var partnerFeaturedTimer = null;

var partnerFeaturedlogo = ["/sites/all/themes/SixConnex/images/partners/EELGlobal.jpg", "/sites/all/themes/SixConnex/images/partners/live.jpg", "/sites/all/themes/SixConnex/images/partners/bigIdeas.jpg", "/sites/all/themes/SixConnex/images/partners/kaleidoscope.jpg", "/sites/all/themes/SixConnex/images/partners/masterreps.jpg"];
var partnerFeaturedText = ["<div class='featured-logo' id='featured-logo'><img id='partnerFeatured-logo' src='/sites/all/themes/SixConnex/images/partners/EELGlobal.jpg'></div><span class='partner-copy-title'>EEI Global</span><div class='partner-copy' style='margin:0;'>EEI Global is an award-winning experiential marketing firm that creates remarkable brand experiences, fostering customer engagement and driving measurable business value. With more than 25 years of experience serving clients in the U.S. and throughout the world, the agency blends strategic counsel and leading creative with full-service event production capabilities for clients in automotive, advanced manufacturing, brand marketing agencies, health care and emerging technologies.","<div class='featured-logo' id='featured-logo'><img id='partnerFeatured-logo' src='/sites/all/themes/SixConnex/images/partners/live.jpg'></div><span class='partner-copy-title'>Live Marketing</span><div class='partner-copy' style='margin:0;'>For over 35 years, Live Marketing&rsquo;s creative strategies and services have helped companies create and produce experiential marketing programs-bringing brands and messages to life at tradeshows, meetings, events, road shows, mobile tours and more. Leveraging the 6Connex Virtual Experience Platform, Live Marketing will now offer virtual technology event marketing solutions to its portfolio of services.","<div class='featured-logo' id='featured-logo'><img id='partnerFeatured-logo' src='/sites/all/themes/SixConnex/images/partners/bigIdeas.jpg'></div><span class='partner-copy-title'>BIG ideas inc.</span><div class='partner-copy' style='margin:0;'>With a wealth of live events and marcomms experience, BIG ideas inc. is ideally placed to understand and utilise the full potential of the 6Connex Virtual Experience Platform. Using the power of virtual experiences, BIG ideas inc. can enhance their clients ability to communicate more clearly, to more colleagues, customers and clients, across a wider geographical area. By &#145;joining the dots&#146; BIG ideas inc. offers the organisations it works with unlimited possibilities to interact and empower themselves and their own communities. For more information, visit <a class='whiteanchor' href='http://www.bigideasinc.co.uk'>http://www.bigideasinc.co.uk</a>.","<div class='featured-logo' id='featured-logo'><img id='partnerFeatured-logo' src='/sites/all/themes/SixConnex/images/partners/kaleidoscope.jpg'></div><span class='partner-copy-title'>Kaleidoscope</span><div class='partner-copy' style='margin:0;'>Kaleidoscope is a full service film and events production company that leverages the power of brand experiences for internal business and consumer audiences by creating immersive live events and media-rich environments. Leveraging the 6Connex Virtual Experience Platform, Kaleidoscope will offer virtual meeting technology solutions to their corporate clients, which include global leaders in the automotive, high tech, pharmaceutical, finance, consumer products and entertainment industries.","<div class='featured-logo' id='featured-logo'><img id='partnerFeatured-logo' src='/sites/all/themes/SixConnex/images/partners/masterreps.jpg'></div><span class='partner-copy-title'>MasterReps, LLC</span><div class='partner-copy' style='margin:0;'>MasterReps, LLC, established in 2004, is a media representation corporation located in Montville, NJ.  MasterReps, LLC specializes in professional sales representation to the publishing industry, serving both the b2b and the consumer marketplaces.  Leveraging the 6Connex Virtual Experience Platform, MasterReps, LLC will not only provide marketing, research, and new business development services, but also virtual technology marketing solutions to advertising agencies and software companies in the areas of technology, consumer electronics, healthcare, and other industries."];

function partnerFeaturedNav(to) {
    if(to == partnerFeaturedCurrent) {
		clearInterval(partnerFeaturedTimer);
		partnerFeaturedTimer = setInterval("partnerrotateFeatured()", 8000);
        return;
    }   
    var from = partnerFeaturedCurrent;
    document.getElementById("featured-logo").innerHTML = "<img id='partnerFeatured-logo' src='" + partnerFeaturedlogo[to - 1] + "'>";
    //document.getElementById("partnerFeatured-logo").src = partnerFeaturedlogo[to - 1];
    document.getElementById("partnerFeatured-bullet-"+from+"-on").style.display = "none";
    document.getElementById("partnerFeatured-bullet-"+from).style.display = "block";
    document.getElementById("partnerFeatured-bullet-"+to).style.display = "none";  
    document.getElementById("partnerFeatured-bullet-"+to+"-on").style.display = "block";
	document.getElementById("featuredText").innerHTML = partnerFeaturedText[to - 1];
    partnerFeaturedCurrent = to;
    clearInterval(partnerFeaturedTimer);
    partnerFeaturedTimer = setInterval("partnerrotateFeatured()", 8000);
}

function partnerrotateFeatured() {
    var from = partnerFeaturedCurrent;
    var to = (partnerFeaturedCurrent == partnerFeaturedCount) ? 1 : partnerFeaturedCurrent + 1;
    document.getElementById("featured-logo").innerHTML = "<img id='partnerFeatured-logo' src='" + partnerFeaturedlogo[to - 1] + "'>";
    document.getElementById("partnerFeatured-bullet-"+from+"-on").style.display = "none";
    document.getElementById("partnerFeatured-bullet-"+from).style.display = "block";
    document.getElementById("partnerFeatured-bullet-"+to).style.display = "none";  
    document.getElementById("partnerFeatured-bullet-"+to+"-on").style.display = "block";
	document.getElementById("featuredText").innerHTML = partnerFeaturedText[to - 1];
    partnerFeaturedCurrent = to;
    clearInterval(partnerFeaturedTimer);
    partnerFeaturedTimer = setInterval("partnerrotateFeatured()", 8000);
}