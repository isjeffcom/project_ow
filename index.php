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
        <div class='sidebar_icon' data-filter-value='Tank'>
          <a href='#'><img src='./asset/img/sidebar_icon_3.png'></a>
        </div>
        <div class='sidebar_icon' data-filter-value='Support'>
          <a href='#'><img src='./asset/img/sidebar_icon_2.png'></a>
        </div>
      </div>
    </div>

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
        <div class='top3_hero'>
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

        <div class='top3_hero'>
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

        <div class='top3_hero'>
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

    <div class='hero_selector_container'>
      <div class='all_hero_container'>

        <!--div class='single_hero_container' data-filter-target-value="offense" data-value='Genji' data-id='2'>
          <div class='selector_hero_name'>
            <a href='#'>GENJI</a>
          </div>
          <a href='#'><img src='./asset/img/heros/gj.png' alt='genji'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Mccree' data-id='5'>
          <div class='selector_hero_name'>
            <a href='#'>MCCREE</a>
          </div>
          <a href='#'><img src='./asset/img/heros/mc.png' alt='hero'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Pharah' data-id='9'>
          <div class='selector_hero_name'>
            <a href='#'>PHARAH</a>
          </div>
          <a href='#'><img src='./asset/img/heros/fj.png' alt='hero'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Reaper' data-id='18'>
          <div class='selector_hero_name'>
            <a href='#'>REAPER</a>
          </div>
          <a href='#'><img src='./asset/img/heros/dg.png' alt='hero'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Soldier76' data-id='7'>
          <div class='selector_hero_name'>
            <a href='#'>SOLDIER 76</a>
          </div>
          <a href='#'><img src='./asset/img/heros/76.png' alt='hero'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Sombra' data-id='23'>
          <div class='selector_hero_name'>
            <a href='#'>SOMBRA</a>
          </div>
          <a href='#'><img src='./asset/img/heros/ha.png' alt='hero'></a>
        </div>

        <div class='single_hero_container' data-filter-target-value="offense" data-value='Tracer' data-id='16'>
          <div class='selector_hero_name'>
            <a href='#'>TRACER</a>
          </div>
          <a href='#'><img src='./asset/img/heros/tc.png' alt='hero'></a>
        </div-->

      </div>
    </div>

    <!--HERO DETAIL-->
    <!--HERO DETAIL-->
    <!--HERO DETAIL-->

    <div class='hero_detail_container' id='hd'>
      <div class='hero_compare_top'>
        <div class='hct_container'>

          <div class='hct_single'>
            <img src='./asset/img/heros/mc.png'>
          </div>

          <div class='hct_single'>
            <img src='./asset/img/heros/fj.png'>
          </div>

          <div class='hct_single'>
            <img src='./asset/img/heros/dg.png'>
          </div>

          <div class='hct_single'>
            <img src='./asset/img/heros/76.png'>
          </div>

          <div class='hct_single'>
            <img src='./asset/img/heros/ha.png'>
          </div>

          <div class='hct_single'>
            <img src='./asset/img/heros/tc.png'>
          </div>

        </div>
      </div>

      <div class='hero_profile'>
        <ul class='hero_info'>
          <li class='hero_info_li' id='eli'>
            <a>Elimination:  </a>
            <a data-value='14.03' class='eliminationValue'> 14.30</a>
              <div class='data_compare'>
                <a data-value='14.03'>14.30</a>
                <a data-value='14.03'>14.30</a>
                <a data-value='14.03'>14.30</a>
                <a data-value='14.03'>14.30</a>
                <a data-value='14.03'>14.30</a>
                <a data-value='14.03'>14.30</a>
              </div>
          </li>

          <li class='hero_info_li' id='deaths'>
          <a>DEATHS:  </a>
          <a data-value='6.55' class='deathsValue'> 6.55</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>

          <li class='hero_info_li' id='edratio'>
          <a>E.D RATIO:  </a>
          <a data-value='2.14' class='edratioValue'> 2.14</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>

          <li class='hero_info_li' id='damage'>
          <a>DAMAGE:  </a>
          <a data-value='5184' class='damageValue'> 5184</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>

          <li class='hero_info_li' id='solokill'>
          <a>SOLO KILL:  </a>
          <a data-value='3.11' class='solokillValue'> 3.11</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>

          <li class='hero_info_li' id='metals'>
          <a>METALS:  </a>
          <a data-value='2.42' class='metalsValue'> 2.42</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>

          <li class='hero_info_li' id='golds'>
          <a>GOLDS:  </a>
          <a data-value='0.80' class='goldsValue'> 0.80</a>
            <div class='data_compare'>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
              <a data-value='14.03'>14.30</a>
            </div>
          </li>
        </ul>
      </div>


    </div>

    <script src='./js/hero.js'/></script>
    <script src='./js/query.js'/></script>
  </body>

</html>
