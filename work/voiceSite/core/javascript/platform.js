$(document).ready(function(){

  var menu = $('#platformNav');
  var mobileMenu = $('#navigation');
  var jumpMenu = $('#jumpTo');

  $(window).scroll(function(e){
    fixMenu($(window));
    highlightMenu($(window));
    recognizeMenuOver();
  });

 /* Begin Smoothscroll Script */
      $('ul#tenantLinks a').smoothScroll();
      $('p.subnav a').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });
      
      $('ul#mobilePlatformLinks a').smoothScroll();
      $('p.subnav a').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });
  /* End Smoothscroll Script */

$("#jumpOpen").click(function(){
    $("#mobilePlatformLinks").toggleClass("mobile2");
    $("#mobileNavHeaderBottomBar").toggleClass("bar2");
});

$("#whiteBars1").click(function(){
    $("#mobilePlatformLinks").toggleClass("mobile2");
    $("#mobileNavHeaderBottomBar").toggleClass("bar2");
});

$(".mobileLink").click(function(){
    $("#mobilePlatformLinks").toggleClass("mobile2");
    $("#mobileNavHeaderBottomBar").toggleClass("bar2");
});



$(window).scroll(function() {
    if ($(this).scrollTop() > 510) {
        mobileMenu.show();
    } else {
        mobileMenu.hide();
    }
});

/* Change Position of Menu */
  function fixMenu(x){
    if (x.scrollTop() > 500 && menu.css('position') == 'absolute'){
      $('#platformNav').css({'position': 'fixed'});
    } else if (x.scrollTop() < 500 && menu.css('position') == 'fixed') {
      $('#platformNav').css({'position': 'absolute'});
    }
  }

  function highlightMenu(x){
    console.log(x.scrollTop());
    $('#tenantLinks').children('li').removeClass('platformSelected');

    if ((x.scrollTop() >= 504) && (x.scrollTop() <= 1756)) {
      $('#tenantLinks li:nth-child(2)').addClass('platformSelected');
    } else if ((x.scrollTop() >= 2021) && (x.scrollTop() <= 3271)) {
      $('#tenantLinks li:nth-child(3)').addClass('platformSelected');
    } else if ((x.scrollTop() >= 3429) && (x.scrollTop() <= 5646)) {
      $('#tenantLinks li:nth-child(4)').addClass('platformSelected');
    } else if ((x.scrollTop() >= 5659) && (x.scrollTop() <= 6962)) {
      $('#tenantLinks li:nth-child(5)').addClass('platformSelected');
    } else if (x.scrollTop() >= 7117) {
      $('#tenantLinks li:nth-child(6)').addClass('platformSelected');
    }
  }

/* Recognize if Menu is over platform tenants */
  function recognizeMenuOver(){
    var menuPos = menu.offset();

    var diversity = $('#diversity');
    var diversityPosition = diversity.offset();
    var diversityEnd = diversityPosition.top + diversity.height();

    var studentVoice = $('#studentVoice');
    var studentVoicePosition = studentVoice.offset();
    var studentVoiceEnd = studentVoicePosition.top + studentVoice.height();

    var forwardVoice = $('#forwardVoice');
    var forwardVoicePosition = forwardVoice.offset();
    var forwardVoiceEnd = forwardVoicePosition.top + forwardVoice.height();

    var affordability = $('#affordability');
    var affordabilityPosition = affordability.offset();
    var affordabilityEnd = affordabilityPosition.top + affordability.height();

    if ((menuPos.top >= diversityPosition.top - 210) && (menuPos.top <= diversityEnd + 30)){
      jumpMenu.css({'background' : '#DD7C1B'});
    } else if ((menuPos.top >= studentVoicePosition.top - 210) && (menuPos.top <= studentVoiceEnd + 30)){
      jumpMenu.css({'background' : '#DD7C1B'});
    } else if ((menuPos.top >= forwardVoicePosition.top - 210) && (menuPos.top <= forwardVoiceEnd + 30)){
      jumpMenu.css({'background' : '#DD7C1B'});
    } else if ((menuPos.top >= affordabilityPosition.top - 210) && (menuPos.top <= affordabilityEnd + 30)){
      jumpMenu.css({'background' : '#DD7C1B'});
    } else {
      jumpMenu.css({'background' : '#FF9933'});
    }
  }

});