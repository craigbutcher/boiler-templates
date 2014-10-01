// jQuery
//============================================================

$(function(){

  // Only fade-in landing page once
  if( $('.landing-page-wrap').length && !docCookies.hasItem('seenLandingPage')){
    docCookies.setItem("seenLandingPage", true, new Date(2020, 5, 12));
  }


  // Fastclick - eliminates 300ms delay on taps
  // ++++++++++++++++++++++++++++++++++++++++++
  window.addEventListener('load', function() {
      new FastClick(document.body);
  }, false);


  // Mobile menu
  // ++++++++++++++++++++++++++++++++++++++++++
  $('.toggle-nav').on('click', function(){
    $('.primary-nav').toggleClass('is-visible');
  });


});
