$(document).ready(function () {

    $.ajax({
      url:"./services/data.php",
      dataType:"json",
      success: function(json){
        for(i=0; i<json.length; i++){
          $('.all_hero_container').append(
            "<div class='single_hero_container' data-filter-target-value='" + json[i].type + "'"
            + "data-value='" + json[i].name + "'"
            + "data-id='" + json[i].id + "'>"
            + "<div class='selector_hero_name'><a href='#'>" + json[i].name + "</a></div>"
            + "<img src='" + json[i].img + "'"
            + "alt='" + json[i].name + "'></a>"
            + "</div>"
          );
        }
      },
    });
});

$(document).on("click", ".sidebar_icon", function(){

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

$(document).on("click", ".single_hero_container", function () {

  var heroId = $(this).attr('data-id');
  var jsonId = heroId - 1;

  heroDataDetail();
  //Get Data from JSON and Render
  function heroDataDetail(){

      $.ajax({
        url: "./services/data.php",
        dataType:"json",
        success: function(json){
          $('.eliminationValue').html(json[jsonId].eliminations);
          $('.deathsValue').html(json[jsonId].deaths);
          $('.edratioValue').html(json[jsonId].ed_ratio);
          $('.damageValue').html(json[jsonId].damage);
          $('.solokillValue').html(json[jsonId].solo_kills);
          $('.metalsValue').html(json[jsonId].metals);
          $('.goldsValue').html(json[jsonId].gold);
          console.log('Return ' + JSON.stringify(json[jsonId].name) + ' id: ' + jsonId);
        },
      });
    }


});
