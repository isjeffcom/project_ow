/*
Function code for Project_OW

Main data query and html generator
Controllor for page logical level
Radar chart creator

Final edited: 2017.05.02
Created by JIANFENG WU
*/

var shc_clickStatus = 0;
var finalOAMarkP;

$(document).ready(function () {



    //get data from json type file by ajax from url
    $.ajax({
      url:"./services/data.php",
      dataType:"json",
      success: function(json){
        //start loop and read information
        for(i=0; i<json.length; i++){
          //Calculate pre-overall mark for every single hero sort by hero type
          //This is not the final mark.
          if(json[i].type == 'Support'){
            var oaMark = (parseFloat(json[i].eliminations) - parseFloat(json[i].deaths)) + parseFloat(json[i].healing) + parseFloat(json[i].solo_kills) + parseFloat(json[i].gold);
            //Exception for some hero is support but do not have healing skill
            if(oaMark<2000){
              oaMark = (parseFloat(json[i].eliminations) - parseFloat(json[i].deaths)) + parseFloat(json[i].damage) + parseFloat(json[i].solo_kills) + parseFloat(json[i].gold);
            }

            var oaMarkFix = oaMark.toFixed(2);
          }

          if(json[i].type == 'Offense' || json[i].type == 'Defense'){
            var oaMark = (parseFloat(json[i].eliminations) - parseFloat(json[i].deaths)) + parseFloat(json[i].damage) + parseFloat(json[i].solo_kills) + parseFloat(json[i].gold);
            var oaMarkFix = oaMark.toFixed(2);
          }

          if(json[i].type == 'Tank'){
            var oaMark = (parseFloat(json[i].eliminations) - parseFloat(json[i].deaths)) + parseFloat(json[i].blocked) + parseFloat(json[i].solo_kills) + parseFloat(json[i].gold);

            //Exception for some hero is Tank but do not have blocked skill
            if(oaMark<2000){
              oaMark = (parseFloat(json[i].eliminations) - parseFloat(json[i].deaths)) + parseFloat(json[i].damage) + parseFloat(json[i].solo_kills) + parseFloat(json[i].gold);
            }

            var oaMarkFix = oaMark.toFixed(2);

          }

          //Genarate the single hero select block and relative information
          $('.all_hero_container').append(
            "<div class='single_hero_container' data-filter-target-value='" + json[i].type + "'"
            + "data-value='" + json[i].name + "'"
            + "data-id='" + json[i].id + "' data-overall='"+ oaMarkFix +"'>"
            + "<div class='selector_hero_name'><a href='#'>" + json[i].name + "</a></div>"
            + "<img src='" + json[i].img + "'"
            + "alt='" + json[i].name + "'></a>"
            + "</div>"
          );
        }
      },
    });
});


//Click listener for sidebar icon, third level back to second level
$(document).on("click", ".sidebar_icon", function(){

  shc_clickStatus = 0;

  //delet data_compare and hct_container block
  $('.data_compare').nextAll().empty();
  $('.hct_container').empty();

  //Destory hero information block
  heroInfoDestory();

  var dataFilter = $(this).attr('data-filter-value');

  //display single hero select block by type filter
  heroTypeFilter(dataFilter);

  //filter function
  function heroTypeFilter(){
    $('.single_hero_container').each(function(){
      if($(this).attr('data-filter-target-value') != dataFilter){
        $(this).css({'display':'none'});
      }else{
        $(this).show({'display':'block'});
      }
    });
  }

});

//click listener for font page, first level to second level
$(document).on("click", ".top3_hero", function(){

  shc_clickStatus = 0;

  $('.data_compare').nextAll().empty();
  $('.hct_container').empty();
  heroInfoDestory();

  var dataFilter = $(this).attr('data-filter-value');

  heroTypeFilter(dataFilter);

  function heroTypeFilter(){
    $('.single_hero_container').each(function(){
      if($(this).attr('data-filter-target-value') != dataFilter){
        $(this).css({'display':'none'});
      }else{
        $(this).show({'display':'block'});
      }
    });
  }

});

//click listener for enter third level
$(document).on("click", ".single_hero_container",  function () {

  if(shc_clickStatus == 1){
    //do nothing
    return;
  }else{

    shc_clickStatus = 1;

    var heroId = $(this).attr('data-id');
    var herotype = $(this).attr('data-filter-target-value');
    var jsonId = heroId - 1;

    //get pre mark
    var preMark = $(this).attr('data-overall');


    //generate hero detail data
    heroDataDetail();
  }


  //Get Data from JSON and Render
  function heroDataDetail(){

      $.ajax({
        url: "./services/data.php",
        dataType:"json",
        success: function(json){
          $('.eliminationValue').html(json[jsonId].eliminations);
          $('.deathsValue').html(json[jsonId].deaths);
          $('.edratioValue').html(json[jsonId].ed_ratio);

          //display data by hero type
          if(json[jsonId].type == 'Support'){
            if(json[jsonId].healing == 0){
              $('#damageChange').html('DAMAGE: ');
              $('.damageValue').html(json[jsonId].damage);
            }else{
              $('#damageChange').html('HEALING: ');
              $('.damageValue').html(json[jsonId].healing);
            }

          }
          if(json[jsonId].type == 'Offense' || json[jsonId].type == 'Defense'){
            $('#damageChange').html('DAMAGE: ');
            $('.damageValue').html(json[jsonId].damage);
          }
          if(json[jsonId].type == 'Tank'){
            if(json[jsonId].blocked == 0){
              $('#damageChange').html('DAMAGE: ');
              $('.damageValue').html(json[jsonId].damage);
            }else{
              $('#damageChange').html('BLOCK: ');
              $('.damageValue').html(json[jsonId].blocked);
            }

          }

          $('.solokillValue').html(json[jsonId].solo_kills);
          $('.metalsValue').html(json[jsonId].medals);
          $('.goldsValue').html(json[jsonId].gold);

          //Display comparison data
          for(i=0;i<json.length;i++){

            if(json[jsonId].type == json[i].type){

              $('.hct_container').append(
                "<div class='hct_single'>"
                + "<img src='" + json[i].img + "'>"
                + "</div>"
              );

              $('#eli').append(
                "<div class='data_compare'>"
                + "<a class='data_compare_detail' data-value='" + json[i].eliminations + " 'data-id='" + json[i].id + " 'data-name='"+ json[i].name +"'>"
                + json[i].eliminations
                + "</a>"
                + "</div>"
              );

                $('#deaths').append(
                  "<div class='data_compare'>"
                  + "<a class='data_compare_detail' data-value='" + json[i].deaths + " 'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                  + json[i].deaths
                  + "</a>"
                  + "</div>"
                );

              $('#edratio').append(
                "<div class='data_compare'>"
                + "<a class='data_compare_detail' data-value='" + json[i].ed_ratio + " 'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                + json[i].ed_ratio
                + "</a>"
                + "</div>"
              );

              if(json[i].type == 'Support'){

                if(json[jsonId].healing == 0){
                  $('#damage').append(
                    "<div class='data_compare'>"
                    + "<a class='data_compare_detail' data-value='" + json[i].damage + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                    + json[i].damage
                    + "</a>"
                    + "</div>"
                  );
                }else{
                  $('#damage').append(
                    "<div class='data_compare'>"
                    + "<a class='data_compare_detail' data-value='" + json[i].healing + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                    + json[i].healing
                    + "</a>"
                    + "</div>"
                  );
                }


              }

              if(json[jsonId].type == 'Offense' || json[jsonId].type == 'Defense'){

                $('#damage').append(
                  "<div class='data_compare'>"
                  + "<a class='data_compare_detail' data-value='" + json[i].damage + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                  + json[i].damage
                  + "</a>"
                  + "</div>"
                );
              }

              if(json[jsonId].type == 'Tank'){

                if(json[jsonId].blocked == 0){
                  $('#damage').append(
                    "<div class='data_compare'>"
                    + "<a class='data_compare_detail' data-value='" + json[i].damage + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                    + json[i].damage
                    + "</a>"
                    + "</div>"
                  );
                }else{
                  $('#damage').append(
                    "<div class='data_compare'>"
                    + "<a class='data_compare_detail' data-value='" + json[i].blocked + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                    + json[i].blocked
                    + "</a>"
                    + "</div>"
                  );
                }


              }


              $('#solokill').append(
                "<div class='data_compare'>"
                + "<a class='data_compare_detail' data-value='" + json[i].solo_kills + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                + json[i].solo_kills
                + "</a>"
                + "</div>"
              );

              $('#medals').append(
                "<div class='data_compare'>"
                + "<a class='data_compare_detail' data-value='" + json[i].medals + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                + json[i].medals
                + "</a>"
                + "</div>"
              );

              $('#golds').append(
                "<div class='data_compare'>"
                + "<a class='data_compare_detail' data-value='" + json[i].gold + "'data-id='" + json[i].id + "'data-name='"+ json[i].name +"'>"
                + json[i].gold
                + "</a>"
                + "</div>"
              );

            }
          }

          //Cal overall mark

          var eliAll = [];
          var edAll = [];
          var metalAll = [];
          var kaAll = [];
          var soloAll = [];

          //put all data into an array for calculate
          $('#eli').find('.data_compare_detail').each(function(i ,dom){
              eliAll[i] = $(this).text();
          });

          $('#edratio').find('.data_compare_detail').each(function(i ,dom){
              edAll[i] = $(this).text();
          });

          $('#medals').find('.data_compare_detail').each(function(i ,dom){
              metalAll[i] = $(this).text();
          });

          $('#damage').find('.data_compare_detail').each(function(i ,dom){
              kaAll[i] = $(this).text();
          });

          $('#solokill').find('.data_compare_detail').each(function(i ,dom){
              soloAll[i] = $(this).text();
          });

          //output final mark and make it presentage
          var eliMark = pt(overallByMinMax(eliAll, json[jsonId].eliminations));
          var edMark = pt(overallByMinMax(edAll, json[jsonId].ed_ratio));
          var metalMark = pt(overallByMinMax(metalAll, json[jsonId].medals));

          if(json[jsonId].type == 'Support'){
            if(json[jsonId].healing == 0){
              var kaMark = pt(overallByMinMax(kaAll, json[jsonId].damage));
            }else{
              var kaMark = pt(overallByMinMax(kaAll, json[jsonId].healing));
            }
          }
          if(json[jsonId].type == 'Offense' || json[jsonId].type == 'Defense'){
            var kaMark = pt(overallByMinMax(kaAll, json[jsonId].damage));
          }
          if(json[jsonId].type == 'Tank'){
            if(json[jsonId].blocked == 0){
              var kaMark = pt(overallByMinMax(kaAll, json[jsonId].damage));
            }else{
              var kaMark = pt(overallByMinMax(kaAll, json[jsonId].blocked));
            }

          }

          var soloMark = pt(overallByMinMax(soloAll, json[jsonId].solo_kills));

          overallCal(preMark, herotype);

          radarCreator(finalOAMarkP, eliMark, edMark, metalMark, kaMark, soloMark);
          //console.log(eliMark, edMark, metalMark, kaMark, soloMark);



        },
      });


    }


});

//overall mark calculator
function overallCal(preMark, herotype){
  //get all mark sort by this same type
  var markAll = [];
  var markAllCount = 0; //counter

  //input all mark into markAll array
  $('.all_hero_container').find('.single_hero_container').each(function(){
      if($(this).attr('data-filter-target-value') == herotype){
        markAll[markAllCount] = parseFloat($(this).attr('data-overall'));
        markAllCount++;
      }
  });

  //Calculator mark by overallByMinMax function and display integer presentage number
  var finalOAMark = overallByMinMax(markAll, preMark);

  //Adjust mark, top mark is 99%
  finalOAMarkP = pt(finalOAMark) - 1;

  //display mark to page
  $('#oaMark_mark').html(finalOAMarkP + '%');

  return finalOAMarkP;

}

function heroInfoDestory() {
  $('.hero_info_li').find('.data_compare').remove();
}


//Create Radar Chart
function radarCreator(finalOAMarkP, eliMark, edMark, metalMark, kaMark, soloMark){
  var radarCtx = $("#radarChart");

  //Init data for chart
  var data = {
    labels: ["Overall", "Kill", "Kill : Death", "Preformance", "Output/Healing", "Skills"],
    datasets: [
        {
            label: "Comprehensive attributes score (compare with same type heros)",
            backgroundColor: "rgba(250,156,30,0.3)",
            fontColor: '#fa9c1e',
            borderColor: "rgba(250,156,30,0.9)",
            pointBackgroundColor: "rgba(250,156,30,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [finalOAMarkP, eliMark, edMark, metalMark, kaMark, soloMark]
        },
        /*{
            label: "My Second dataset",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [28, 48, 40, 19, 96, 27, 100]
        }*/
    ]
  };

  //Create chart
  var radarChart = new Chart(radarCtx, {
    type: 'radar',
    data: data,
    options: {
      responsive: false,
      defaultFontColor:'#fa9c1e',
      legend: {
            display: true,
            labels: {
                fontColor: '#fa9c1e',
            },
      },
      title:{
        display: true,
        fontColor: "#fa9c1e",
      },
      tooltips:{
        titleFontColor:"#fa9c1e",
        bodyFontColor:"#fa9c1e",
        footerFontColor:"#fa9c1e",

      },

      scale: {
          reverse: false,
          fontColor: "#fa9c1e",
          gridLines: {
            display: true ,
            color: "rgba(250,250,250,0.2)",
            fontColor: "#fa9c1e",
          },
          ticks: {
            max:100,
            min:0,
            showLabelBackdrop: false,
            backdropColor: "rgba(0,0,0,0)",
            fontColor: "#fa9c1e",
            fontSize:5,
          },

      }
    },
  });
}

//Math method
function overallByMinMax(dataArray, thisData){
  var max = Math.max.apply(null, dataArray);
  var min = Math.min.apply(null, dataArray);
  var result = thisData / max;
  //var result = (thisData - min) / (max - min);
  return result;
}

function pt(perData){
  var final = parseInt(perData * 100);
  return final;
}

function overallExMark(){

}
