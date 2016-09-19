<?php require 'header.php'; ?>

<div id="wrap" class="container scores">
  <main>
    <div class="content">
      <hgroup>
        <h1>Today's Scores</h1>
        <a href="#" class="mobile-visible">&#9664;</a>
        <h3>Tuesday, March 22, 2016</h3>
        <a href="#" class="mobile-hidden">&#9664;</a>
        <a href="#">&#9658;</a>
      </hgroup>

      <section class="filters">
        <form>
          <label for="filter">Filter</label>
          <div class="select-style">
            <select name="filter">
              <option selected="true" value="all">All</option>
              <option value="ranked">Top 25</option>
              <option value="1">ACC</option>
              <option value="2">America East</option>
              <option value="3">American</option>
              <option value="4">Atlantic 10</option>
              <option value="5">Atlantic Sun</option>
              <option value="6">Big Ten</option>
              <option value="7">Big 12</option>
              <option value="8">Big East</option>
              <option value="9">Big South</option>
              <option value="32">Big West</option>
              <option value="10">Colonial</option>
              <option value="11">Conference USA</option>
              <option value="12">Horizon</option>
              <option value="13">Independents</option>
              <option value="14">Ivy League</option>
              <option value="15">Metro Atlantic</option>
              <option value="16">Mid-American</option>
              <option value="17">Mid-Eastern</option>
              <option value="18">Missouri Valley</option>
              <option value="19">Mountain West</option>
              <option value="20">Northeast</option>
              <option value="21">Ohio Valley</option>
              <option value="22">PAC 12</option>
              <option value="23">Patriot</option>
              <option value="24">SEC</option>
              <option value="25">Southern</option>
              <option value="26">Southland</option>
              <option value="27">Summit</option>
              <option value="28">Sun Belt</option>
              <option value="29">Southwestern Athletic</option>
              <option value="30">Western Athletic</option>
              <option value="31">West Coast</option>
            </select>
          </div>
          <div class="date">
            <label for="filter">Pick a Date</label>
            <div class="select-style">
              <select name="month" class="matchups-select month-select" required="">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option selected="true" value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>

            <div class="select-style">
              <select name="day" class="matchups-select day-select" required="">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option selected="true" value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>

            <div class="select-style">
              <select name="year" class="matchups-select year-select" required="">
                <option>Select Year</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option selected="true" value="2016">2016</option>
              </select>
            </div>
          </div>
        </form>
      </section>

      <section class="score-set">
        <h3>D1 Baseball Top 25</h3>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
            <div class="note">
              In Jackson, MS
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
            <div class="note">
              In Jackson, MS
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="score-set">
        <h3>ACC</h3>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
            <div class="note">
              In Jackson, MS
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead class="red">
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
            <div class="note">
              In Jackson, MS
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>

          <div class="score-set-item pull-left fourth">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Final</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="winner">
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20LSUSEC.png" alt=""/>
                    </td>
                    <td>8 LSU</td>
                    <td>1</td>
                    <td class="mark"></td>
                  </tr>
                  <tr>
                    <td>
                      <img src="img/team-logos/Kendall%20Rogers%20-%20AlabamaSEC.png" alt=""/>
                    </td>
                    <td>Alabama</td>
                    <td>0</td>
                    <td class="mark"></td>
                  </tr>
                </tbody>
              </table>
              <div class="footer clearfix">
                <div class="pull-left">
                  <a href="#">Recap</a>
                  <a href="#">Box Score</a>
                </div>
                <div class="pull-right">
                  <a href="#">SECN</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <div class="clearfix"></div>
</div>

<?php require 'footer.php'; ?>
