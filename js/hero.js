/*
Function code for Project_OW

Main controllor for page logical level
Bar chart creator

Final edited: 2017.05.02
Created by JIANFENG WU
*/

$(document).ready(function () {

    //Set single hero container open status for logic level
    var shc_clickStatus = 0;


    $(document).on("click", ".single_hero_container", function () {

      if(shc_clickStatus == 1){
        //do nothing
        return;
      }else{

        shc_clickStatus = 1;

        $(this).animate({
          width: "360px",
          height: "594px",
        },{ duration: 20, queue: false });

        $(this).find('img').animate({
          width: "360px",
        },{ duration: 20, queue: true });

        $(this).children().animate({
          width: "360px",
        },{ duration: 20, queue: true });
        $(this).css("left","-478px");
        $(this).css("opacity","1");
        $(this).siblings().css('display', 'none');
        $('#hd').css('display', 'block');
      }






    });


    $(document).on("click", "#b2home", function () {

      shc_clickStatus = 0;
      console.log('status after b2home: ' + shc_clickStatus);

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

      radarChartRecreate();
    });

    $(document).on("click", ".sidebar_icon, .top3_hero", function () {

      shc_clickStatus = 0;

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

      //radar chart recreate
      radarChartRecreate();

    });

  //set a mouse over event for display data when hover
  $(document).on("mouseenter", ".hero_info_li", function(){
      //get compare data and push to an array
      var allData = [];
      var allIds = [];
      var allNames = [];
      var pushData = $(this).find('.data_compare_detail').each(function(i ,dom){
          allData[i] = $(this).text();
          allIds[i] = $(this).attr('data-id');
          allNames[i] = $(this).attr('data-name');
      })

      if($('#comChart')){
        chartCreator(allData, allIds, allNames);
      }else{
        console.log('Com chart do not exist')
      }



      //hide radar chart
      $('#radarChart').hide();

      //Animation and logic action
      $(this).find('div').animate({
        opacity:1,
      }, { duration: 20, queue: false });

      $(this).css({
        borderBottom: "3px solid #fa9c1e",
      });

      $('.hero_compare_top').css({
        opacity: "1",
      });


  });

  $(document).on("mouseleave", ".hero_info_li", function(){

    //Destory Chart
    chartDestory();
    $('#radarChart').show();
    //heroInfoDestory();
  });

  $(document).on("touchstart", ".hero_info_li", function(){
      $(this).find('div').animate({
        opacity:1,
      }, { duration: 20, queue: false });

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
      }, { duration: 20, queue: false });

      $(this).css({
        borderBottom: "none",
      });

      $('.hero_compare_top').css({
        opacity: "0",
      });
  });

  //alert('Hi! Click or use mouse hover to see the detail data.');

});

//Destory Bar Chart
function chartDestory(){
  $('.chartjs-hidden-iframe').remove();
  $('#comChart').hide();
  //$('.hero_profile').append("<canvas id='comChart' width='100' height='100'><canvas>");

}

function radarChartRecreate(){
  $('#radarChart').remove();
  $('.hero_selector_container').append(
    "<canvas id='radarChart' width='500' height='500'></canvas>"
  );
}

//Create Bar Chart
function chartCreator(allData, allIds, allNames){

  $('#comChart').show();
  var ctx = $("#comChart");
  var options = {
    responsive: true,
    maintainAspectRatio: true,
    barThickness:30,
  }

  //Init data for chart
  var data = {
    labels: allNames,
    datasets: [
                {
                    label: "Hero Compare",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 0.5,
                    data: allData,
                }
              ]
  };

  //Create chart
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options:options
  });
}
