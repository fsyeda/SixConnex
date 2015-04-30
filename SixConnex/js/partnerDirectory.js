$(function() {
  $('#sortby').change( function() {
    switch ($('#sortby :selected').text()) {
      case 'alphabetical':
        $('#block-views-9aa83a71db31af7d1c96acee2641b925').css('display','none');
        $('#block-views-partnerDirectory-block_2').css('display','block');
      break;
      case 'industry':
        $('#block-views-partnerDirectory-block_2').css('display','none');
        $('#block-views-9aa83a71db31af7d1c96acee2641b925').css('display','block');
      break;
    }
  });
});