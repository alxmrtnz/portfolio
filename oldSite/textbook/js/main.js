$(document).ready(function() {/*
  $('body').addClass('js');
  console.log("yupaaas");
  var $menu = $('#menu'),
    $menulink = $('.iconBurger'),
    $wrap = $('#wrap');
    $nav = $('.navContainer');
  
  $menulink.click(function() {
    $menulink.toggleClass('active');
    $wrap.toggleClass('active');
    $nav.toggleClass('active');
    return false;
	});*/



  console.log("something");
    var toTop = $('#return_to_top');

    $(window).scroll(function(){
      var scroll = $(window).scrollTop();

      if (scroll > 50) {
        console.log("more than 50!");
        toTop.addClass('show');
      }
      if (scroll < 50){

        console.log(scroll);
        toTop.removeClass('show');
      }

    });

  $("a#return_to_top").click(function(){
           
           $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
       });

  $("div#content div.styleSelection#serif").click(function(){
           $("div#content div.styleSelection#sansSerif").removeClass('selectedStyle');
           $("div#content div.styleSelection#serif").addClass('selectedStyle');
           $("div.readingContent p").removeClass('sansSerif');
           $("div.readingContent p").addClass('serif');
           console.log("serif yo");
   });

  $("div#content div.styleSelection#sansSerif").click(function(){
           $("div#content div.styleSelection#serif").removeClass('selectedStyle');
           $("div#content div.styleSelection#sansSerif").addClass('selectedStyle');
           $("div.readingContent p").removeClass('serif');
           $("div.readingContent p").addClass('sansSerif');
           console.log("sansSerif yo");
   });


  //font sizer
  $(function() {
      var aFontsSizeArray = new Array('12', '14', '16', '18', '20', '22', '24', '26');
      $('#slider').slider({
          value: 4,
          min: 1,
          max: 7,
          step: 1,
          slide: function(event, ui) {
              var sFontSizeArray = aFontsSizeArray[ui.value];
              $('#font_size').val(sFontSizeArray + ' px');
              $('div.readingContent p').css('font-size', sFontSizeArray + 'px' );
              var lineHeight = parseInt(sFontSizeArray) + 12;
              $('div.readingContent p').css('line-height', lineHeight + 'px' );
          }
      });
      $('#font_size').val((aFontsSizeArray[$('#slider').slider('value')]) + ' px');
  });



  $("div.textSizer").click(function(){
    $("div.textSizer").toggleClass('active');
    $("div.textExpanded").toggleClass('hidden');
  });

  $("div#heroInfo").click(function(){
    $("div#heroInfoCard").toggleClass('show');
    $("div#heroTitle h1.hero").toggleClass('hide');
  });
  

  //off canvas menu
  $(".iconBurger").click(function(){
    $(".page-wrap").toggleClass('peek');
    $(".main-nav").toggleClass('show');
    console.log("ASDF");
  });

  $("#pageContent").click(function(){
    if($('.page-wrap').hasClass('peek')){
      $('.page-wrap').removeClass('peek');
    }
  });

  //desktop menu activation

  $("a.iconBook").click(function(){
    $("div#mainMenu").toggleClass('show');
    $("a.iconBook").toggleClass('active');
    $("div#pageContent").toggleClass('showContent');
    $(".main-nav").toggleClass('showNav');
    $("footer").toggleClass('showFooter');
 
  });




});
