<!DOCTYPE HTML>
<?php

/**
* Created by JIANFENG WU
* Connect to Database
* Date:2017.02.20
*/
require_once('header.php');
?>


  <body>

    <!--SIDEBAR-->
    <!--SIDEBAR-->
    <!--SIDEBAR-->

    <div class='sidebar'>
      <div class='sidebar_container'>
        <div class='sidebar_icon_home' id='b2home'>
          <a href='#'><img src='./asset/img/sidebar_icon_1.png'></a>
        </div>
        <div class='sidebar_icon' data-filter-value='Offense'>
          <a href='#'><img src='./asset/img/sidebar_icon_5.png'></a>
        </div>
        <div class='sidebar_icon' data-filter-value='Defense'>
          <a href='#'><img src='./asset/img/sidebar_icon_4.png'></a>
        </div>
        <div class='sidebar_icon' data-filter-value='Support'>
          <a href='#'><img src='./asset/img/sidebar_icon_3.png'></a>
        </div>
        <div class='sidebar_icon' data-filter-value='Tank'>
          <a href='#'><img src='./asset/img/sidebar_icon_2.png'></a>
        </div>
      </div>
    </div>

    <!--TITLE-->
    <!--TITLE-->
    <!--TITLE-->

    <div class='title'>
      <img src='./asset/img/title_fixed.png'>
    </div>

    <div class='home_title'>
      <img src='./asset/img/home_title.png'>
    </div>

    <div class='logo'>
      <img src='./asset/img/logo.png'>
    </div>

    <!--INDEX PAGE-->
    <!--INDEX PAGE-->
    <!--INDEX PAGE-->

    <div class='home_content_container'>
      <!--CONTENT CONTAINER START-->
      <div class='top3'>
        <div class='top3_hero' data-id='1' data-value='Mercy' data-filter-value='Support' data-filter-target-value='Support'>
          <div class='top3_hero_img'>
            <a href='#'><img src='./asset/img/mercy.png' alt='mercy'></a>
          </div>

          <div class='top3_hero_title'>
            <a href='#'>macree</a>
          </div>

          <div class='top_data'>
            <a>7.38%</a><br>
            <a>POPULARITY</a>
          </div>
        </div>

        <div class='top3_hero' data-id='2' data-value='Genji' data-filter-value='Offense' data-filter-target-value='Offense'>
          <div class='top3_hero_img'>
            <a href='#'><img src='./asset/img/genji.png' alt='genji'></a>
          </div>

          <div class='top3_hero_title'>
            <a href='#'>mercy</a>
          </div>

          <div class='top_data'>
            <a>13.87</a><br>
            <a>ELIMINATION</a>
          </div>
        </div>

        <div class='top3_hero' data-id='3' data-value='Roadhog' data-filter-value='Tank' data-filter-target-value='Tank'>
          <div class='top3_hero_img'>
            <a href='#'><img src='./asset/img/roadhog.png' alt='roadhog'></a>
          </div>

          <div class='top3_hero_title'>
            <a href='#'>roadhog</a>
          </div>

          <div class='top_data'>
            <a>17.73%</a><br>
            <a>ON FIRE</a>
          </div>
        </div>

      </div>
    </div>

    <!--HERO SELECTOR-->
    <!--HERO SELECTOR-->
    <!--HERO SELECTOR-->

    <!--area for all heroe-->
    <div class='hero_selector_container'>
      <canvas id="radarChart" width="500" height="500"></canvas>
      <div class='all_hero_container'></div>


    <!--HERO DETAIL-->
    <!--HERO DETAIL-->
    <!--HERO DETAIL-->

    <div class='hero_detail_container' id='hd'>
      <div class='hero_compare_top'>
        <div class='hct_container'>
          <!--area for comparison hero image-->
        </div>
      </div>

      <!--area for comparison value-->
      <div class='hero_profile'>
        <ul class='hero_info'>
          <li class='hero_info_li' id='eli'>
              <a>Elimination:  </a>
              <a data-value='14.03' class='eliminationValue'> 14.30</a>
              <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='deaths'>
            <a>DEATHS:  </a>
            <a data-value='6.55' class='deathsValue'> 6.55</a>
            <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='edratio'>
            <a>E.D RATIO:  </a>
            <a data-value='2.14' class='edratioValue'> 2.14</a>
            <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='damage'>
            <a id='damageChange'>DAMAGE:  </a>
            <a data-value='5184' class='damageValue'> 5184</a>
            <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='solokill'>
            <a>SOLO KILL:  </a>
            <a data-value='3.11' class='solokillValue'> 3.11</a>
            <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='medals'>
            <a>METALS:  </a>
            <a data-value='2.42' class='metalsValue'> 2.42</a>
            <!--Control by Query.js-->
          </li>

          <li class='hero_info_li' id='golds'>
            <a>GOLDS:  </a>
            <a data-value='0.80' class='goldsValue'> 0.80</a>
            <!--Control by Query.js-->
          </li>
        </ul>
        <div class='overallMark_container'>
          <a id='oaMark_title'>OVERALL EXPERIENCE: </a>
          <a id='oaMark_mark'></a>
        </div>

        <!--canvas area for bar chart-->
        <canvas id="comChart" width="400" height="400"></canvas>
      </div>


    </div>

    <script src='./js/query.js'/></script>
    <script src='./js/hero.js'/></script>

  </body>

</html>
