<!doctype html>
<html class="no-js" lang="">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <!-- Place favicon.ico in the root directory -->


      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src="https://use.fontawesome.com/5f8859bdfc.js"></script>
      <script src="https://use.typekit.net/kot7gpi.js"></script>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body>
        <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
          <div class="fixed-position mobile-hidden">
            <div class="left-side pull-left">
              <div class="logo pull-left">
                <a href="http://www.d1baseball.com/">
                  <object data="img/logo.svg" type="image/svg+xml">
                    <img src="img/logo.png" alt="D1Baseball.com" data-rjs="2">
                  </object>
                </a>
              </div>

              <div class="select-control flex-container-center pull-left">
                <form action="/">
                  <select name="">
                    <option value="top-25">Top 25</option>
                  </select>
                  <div class="title">Today's Scores</div>
                </form>
              </div>
            </div>

            <div class="next flex-container-center pull-right" type="button">
              <span>&#9002;</span>
            </div>

            <div class="score-tables">
              <div class="slick-slider">

                <?php for ($i = 0; $i < 25; $i++) { ?>
                <div class="score-table">
                  <span class="score-status">Final</span>
                  <table>
                    <tr class="winner">
                      <td class="team-logo">
                        <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                      </td>
                      <td>
                        <span class="number">8</span>
                        LSU
                      </td>
                      <td class="score">
                        6
                      </td>
                      <td class="mark"></td>
                    </tr>
                    <tr>
                      <td class="team-logo">
                        <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                      </td>
                      <td>
                        <span class="number"></span>
                        ALA
                      </td>
                      <td class="score">
                        4
                      </td>
                      <td class="mark"></td>
                    </tr>
                  </table>
                </div>
                <?php } ?>

              </div>
            </div>
          </div>

          <div class="fixed-position mobile-visible">
            <div class="clearfix nav-main">
              <a id="nav-toggle" class="nav-toggle pull-left">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </a>
              <a href="#" class="pull-left logo">
                <img src="img/logo-mobile.png" alt="D1Baseball.com" data-rjs="2">
              </a>
              <a href="#" class="subscribe pull-right">Subscribe</a>
            </div>

            <nav class="mobile-visible">
              <a href="#">Scores</a>
              <a href="#">News</a>
              <a href="#">Latest</a>
              <a href="#" class="bold">Login</a>
            </nav>
          </div>


          <div id="mobile-menu" class="mobile-visible fixed-position">
            <form action="">
              <input type="text" id="search-field" name="search-field" value="">
              <label for="search-field">
                <i class="fa fa-search" aria-hidden="true"></i>
              </label>
            </form>

            <nav>
              <h3>Navigation</h3>
              <a href="#" class="semi-bold">Shop</a>
              <a href="#" class="semi-bold">Subscribe</a>
              <a href="#">Scores &gt;</a>
              <a href="#">Standings &gt;</a>
              <a href="#">Top 25</a>
              <a href="#">Forum</a>
              <a href="#">Prospects</a>
              <a href="#">Recruiting</a>
              <a href="#">Teams &gt;</a>
              <a href="#">Conferences &gt;</a>
              <a href="#">Player Search</a>
              <a href="#">Player Power Rankings &gt;</a>
              <a href="#">Kendall Rogers</a>
              <a href="#">Aaron Fitt</a>
            </nav>
          </div>

          <div class="ad">
            <a href="#"><img src="img/ad-728x90.png" alt="" data-rjs="2"/></a>
          </div>

          <div class="container mobile-hidden">
            <div class="clearfix">
              <nav class="nav-social pull-left">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
              </nav>

              <nav class="nav-account pull-right">
                <a href="#">Sign In / Register</a>
                <a href="#">My Account</a>
              </nav>
            </div>

            <nav id="sticker" class="nav-main clearfix">
              <div class="pull-left">
                <a href="#">Scores</a>
                <a href="#">Standings</a>
                <a href="#">Top 25</a>
                <a href="#">Forum</a>
                <a href="#">Prospects</a>
                <a href="#">Recruiting</a>
                <div class="dropdown">
                  <a href="#">Teams</a>
                  <div class="dropdown-content container">
                    <div class="clearfix">
                      <ul class="pull-left">
                        <li><a href="#">ACC</li>
                        <li><a href="#">America East</a></li>
                        <li><a href="#">American Athletic</a></li>
                        <li><a href="#">Atlantic 10</a></li>
                        <li><a href="#">Atlantic Sun</a></li>
                        <li><a href="#">Big Ten</a></li>
                        <li><a href="#">Big 12</a></li>
                        <li><a href="#">Big East</a></li>
                        <li><a href="#">Big South</a></li>
                        <li><a href="#">Big West</a></li>
                        <li><a href="#">Colonial</a></li>
                        <li><a href="#">Conference USA</a></li>
                        <li><a href="#">Horizon</a></li>
                        <li><a href="#">Independents</a></li>
                        <li><a href="#">Ivy</a></li>
                        <li><a href="#">Metro Atlantic</a></li>
                      </ul>
                      <ul class="pull-left">
                        <li><a href="#">Mid-American</a></li>
                        <li><a href="#">Mid-Eastern</a></li>
                        <li><a href="#">Missouri Valley</a></li>
                        <li><a href="#">Mountain West</a></li>
                        <li><a href="#">Northeast</a></li>
                        <li><a href="#">Ohio Valley</a></li>
                        <li><a href="#">Pac 12</a></li>
                        <li><a href="#">Patriot</a></li>
                        <li><a href="#">SEC</a></li>
                        <li><a href="#">Southern</a></li>
                        <li><a href="#">Southland</a></li>
                        <li><a href="#">Summit</a></li>
                        <li><a href="#">Sun Belt</a></li>
                        <li><a href="#">SWAC</a></li>
                        <li><a href="#">WAC</a></li>
                        <li><a href="#">West Coast</a></li>
                      </ul>
                      <div class="school pull-left">
                        <ul>
                          <li><a href="#">Alabama</a></li>
                          <li><a href="#">Arkansas</a></li>
                          <li><a href="#">Auburn</a></li>
                          <li><a href="#">Florida</a></li>
                          <li><a href="#">Georgia</a></li>
                          <li><a href="#">Kentucky</a></li>
                          <li><a href="#">LSU</a></li>
                          <li><a href="#">Missouri</a></li>
                          <li><a href="#">Mississippi State</a></li>
                          <li><a href="#">Ole Miss</a></li>
                          <li><a href="#">South Carolina</a></li>
                          <li><a href="#">Tennessee</a></li>
                          <li><a href="#">Texas A&M</a></li>
                          <li><a href="#">Vanderbilt</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#">
                  <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                </a>
              </div>
              <div class="pull-right">
                <a href="#">Shop</a>
                <a href="#">Subscribe</a>
              </div>
            </nav>
          </header>
        </div>
