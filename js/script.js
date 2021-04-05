$(document).ready(function () {
  $(".phone").mask("+38 (099) 999-99-99");

  /* #region scroll to section */
  $(".scrollToServices").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#services").offset().top - 170,
      },
      2000
    );
  });
  $(".scrollToWorks").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#works").offset().top - 70,
      },
      2000
    );
  });
  $(".scrollToReviews").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#reviews").offset().top - 70,
      },
      2000
    );
  });
  $(".scrollToContacts").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#footer").offset().top - 70,
      },
      2000
    );
  });
  $(".scrollToMain").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#main").offset().top - 70,
      },
      2000
    );
  });
  /* #endregion */

  /* #region upper btn when scroll down */
  jQuery(function ($) {
    var $win = $(window);
    var winH = $win.height(); // Get the window height.

    $win
      .on("scroll", function () {
        if ($(this).scrollTop() > winH) {
          $(".upper").addClass("upper_fixed");
          $(".upper__btn").addClass("upper_fixed");
        } else {
          $(".upper").removeClass("upper_fixed");
          $(".upper__btn").removeClass("upper_fixed");
        }
      })
      .on("resize", function () {
        // If the user resizes the window
        winH = $(this).height(); // you'll need the new height value
      });
  });

  $('.chat').click(function(){
    if(!$(this).hasClass('hidden')){
      $(this).addClass('hidden');
      $(this).next().removeClass('hidden');
    }    
  });
  $('.closeImg').click(function(){
    if(!$(this).hasClass('hidden')){
      $(this).addClass('hidden');
      $('.chat').removeClass('hidden');
    }    
  });
  // $('.js-upper').click(function(){
  //     window.scrollTo({ top: 0, behavior: 'smooth' });
  // })
  /* #endregion */

  /* #region sticky header */
  let header = document.querySelector("#header");
  if (header) {
    window.onscroll = function () {
      let sticky = header.offsetHeight;
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        if (!header.classList.contains("fixed-top"))
          header.classList.add("fixed-top");
        $(".upper").addClass("upper_fixed");
        $(".upper__btn").addClass("upper_fixed");
        // $(".navbar").removeClass("navbar-dark");
        // $(".navbar").addClass("navbar-light");
        if (window.innerWidth > 575) {
          $(".logoImg").css("width", "100");
          $(".navbar-nav li").css("font-size", "22px");
          $("#header").css("padding", "8px 0");
        }
      } else {
        header.classList.remove("sticky");
        $(".upper").removeClass("upper_fixed");
        $(".upper__btn").removeClass("upper_fixed");
        // $(".navbar").removeClass("navbar-light");
        // $(".navbar").addClass("navbar-dark");
        if (window.innerWidth > 575) {
          $(".logoImg").css("width", "150");
          // $(".navbar-nav li").css("font-size", "28px");
          $("#header").css("padding", "15px 0");
        }
      }
    };
  }

  if (window.innerWidth <=1199) {
    $('.tel').removeClass('hidden');
    let fixed = document.querySelector('#header');
    let btn = document.querySelector('.navbar-toggler');
        if(fixed){
            btn.addEventListener('click', function(){
                if(!fixed.classList.contains('sticky')){
                    fixed.classList.remove('fixed-top');
                    fixed.classList.add('sticky');             
                    // document.querySelector('.navbar').classList.remove('navbar-dark');
                    // document.querySelector('.navbar').classList.add('navbar-light');
                }
                // else{
                //     fixed.classList.add('fixed-top');
                //     fixed.classList.remove('sticky');             
                //     document.querySelector('.navbar').classList.add('navbar-dark');
                //     document.querySelector('.navbar').classList.remove('navbar-light');
                // }
            });
    
        }
    }
  /* #endregion */

  $(".menu-btn").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("menu-btn_active");
    $(".menu-nav").toggleClass("menu-nav_active");
  });

  $('.play').click(function(){    
    $(this).hide();  
    $(this).next('.video').removeClass('hidden');
    let videoId = $(this).next('.video').attr('id');
    document.getElementById(videoId).play();
    $(this).parent().css('background', 'none');
  });

  $(".triangle_js").on("click", function (e) {    
    let answer_id = $(this).parent().next('.answer').attr('id');
    var growDiv = document.getElementById(answer_id);
    if (growDiv.clientHeight) {
      growDiv.style.height = 0;
    } else {
      var wrapper = document.querySelector('.measuringWrapper');
      if (window.innerWidth <= 575)
        growDiv.style.height = wrapper.clientHeight+50 + "px";
      else
        growDiv.style.height = wrapper.clientHeight+30 + "px";
    }    
  })

  var cw = $('#footer.container-fluid').width();
  $("#header").width(cw);
//   if (window.innerWidth < 1199) {
//     $(window).resize(function() {
//         var cw = $('#footer').width();
//         $("#header").width(cw);
//     });    
//     var cw = $('#footer.container-fluid').width();
//     $("#header").width(cw);        
// }
});
