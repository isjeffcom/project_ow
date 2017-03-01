$(document).ready(function () {

    $(document).on("click", ".single_hero_container", function () {

      $(this).animate({
        width: "360px",
        height: "594px",
      },{ duration: 50, queue: false });

      $(this).find('img').animate({
        width: "360px",
      },{ duration: 50, queue: false });

      $(this).children().animate({
        width: "360px",
      },{ duration: 50, queue: false });
      $(this).css("left","-478px");
      $(this).css("opacity","1");
      $(this).siblings().css('display', 'none');
      $('#hd').css('display', 'block');

    });

    $(document).on("click", "#b2home", function () {
      $(".home_content_container").css({
        display:"block",
      });

      $(".hero_selector_container").css({
        display:"none",
      })

      $(".hero_detail_container").css({
        display:"none",
      })

      $(".home_title").css({
        display:"block",
      });
    });

    $(document).on("click", ".sidebar_icon", function () {
      $(".home_content_container").css({
        display:"none",
      });

      $(".hero_selector_container").css({
        display:"block",
      });

      $(".home_title").css({
        display:"none",
      });

      $(".single_hero_container").css({
        opacity: "0.7",
        left: "0px",
        width: "180px",
        height: "297px",
      });

      $(".single_hero_container").children().animate({
        width:'180px',
      });

      $(".single_hero_container").find("img").animate({
        width:"180px",
      });

      $(".selector_hero_name").css({
        width: "180px",
      });

      $('#hd').css('display', 'none');

    });

  $(document).on("mouseenter", ".hero_info_li", function(){
      $(this).find('div').animate({
        opacity:1,
      }, { duration: 100, queue: false });

      $(this).css({
        borderBottom: "3px solid #fa9c1e",
      });

      $('.hero_compare_top').css({
        opacity: "1",
      });
  });


  $(document).on("mouseleave", ".hero_info_li", function(){
      $(this).find('div').animate({
        opacity:0,
      }, { duration: 100, queue: false });

      $(this).css({
        borderBottom: "none",
      });

      $('.hero_compare_top').css({
        opacity: "0",
      });
  });



});
