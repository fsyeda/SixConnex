function openFlash(videoPath)   {
    
    $('#video-popup').css("display","block"); 

    var so = new SWFObject( "/sites/all/themes/SixConnex/js/video/videoplayer.swf", "VideoPlayer", "730", "514", "9", "#EBE1E0"  );
    so.addParam( "allowScriptAccess","sameDomain" );
    so.addParam("allowFullScreen", "true");
    so.addParam( "wmode", "transparent" );  
    so.addVariable( "videoSource",videoPath);
    so.write( "swf" );
}

function closeFlash() {
	$('#video-popup').css("display","none"); 
}

$(function() {
$(".tooltip a").tooltip({
	bodyHandler: function() {
		return $($(this).attr("tooltip")).html();
	},
	showURL: false
});
});