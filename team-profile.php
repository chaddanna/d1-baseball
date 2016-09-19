<?php require 'header.php'; ?>

<?php
  $team_color = "rgba(70, 29, 124, 1.0)";
  $team_logo = "img/team-logos/lsu-logo.png";
?>
<div id="wrap" class="container team-profile">
  <div class="team-header" style="background: <?php echo $team_color; ?>;">
    <img class="mobile-hidden" src="<?php echo $team_logo; ?>" alt="" data-rjs="2">
    <div class="clearfix">
      <div class="team-header-left">
        <h1 class="team-title">LSU</h1>
        <h3>45-21 (19-11 SEC)</h3>
        <nav class="mobile-hidden">
          <a href="#">Schedule</a>
          <a href="#">Statistics</a>
          <a href="#">Standings</a>
          <a href="#">Rankings</a>
          <a href="#">By The Numbers</a>
        </nav>
      </div>
      <div class="team-header-right pull-right">
        <div class="score-board pull-left">
          <div class="rpi"><span>RPI</span>9</div>
          <div class="sos"><span>SOS</span>6</div>
          <div class="t25"><span>T25</span>7</div>
        </div>

        <div class="team-logo pull-right">
          <img src="<?php echo $team_logo; ?>" alt="" data-rjs="2">
        </div>

        <div class="clearfix"></div>
        <div class="cite">
          <span>Powered by <span>WarrenNolan.com</span></span>
        </div>
      </div>
    </div>
    <nav class="mobile-visible">
      <a href="#">Schedule</a>
      <a href="#">Statistics</a>
      <a href="#">Standings</a>
      <a href="#">Rankings</a>
      <a href="#">By The Numbers</a>
    </nav>
  </div>

  <?php require 'sidebar.php'; ?>

  <main>
    <div class="content">

      <section class="data-table schedule">
        <section class="filters">
          <h3>Schedule</h3>
          <div class="select-style">
            <select name="filter">
              <option selected="true" value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
            </select>
          </div>
        </section>
        <div>
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Loc</td>
                <td class="mobile-hidden">Opp RPI</td>
                <td>Opponent</td>
                <td class="mobile-hidden">Record</td>
                <td>Results</td>
                <td class="mobile-hidden">Notes</td>
              </tr>
            </thead>
          </table>
        </div>
        <div>
          <table>
            <tbody>
              <tr>
                <td class="date">Fri. Feb 19</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Fri. Feb 20</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Fri. Feb 21</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Wed. Feb 24</td>
                <td>at</td>
                <td class="mobile-hidden">64</td>
                <td><img src="img/team-logos/lamar-logo.png" alt="" data-rjs="2"/> Lamar</td>
                <td class="mobile-hidden">35-19</td>
                <td class="result lose">11-2</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="special-tournament">
          <table>
            <tbody>
              <tr>
                <td class="date">Sat. Mar 5</td>
                <td>vs</td>
                <td class="mobile-hidden">225</td>
                <td><img src="img/team-logos/ballstate-logo.png" alt="" data-rjs="2"/> Ball State</td>
                <td class="mobile-hidden">32-26</td>
                <td class="result win">11-2</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Sun. Mar 6</td>
                <td>vs</td>
                <td class="mobile-hidden">225</td>
                <td><img src="img/team-logos/ballstate-logo.png" alt="" data-rjs="2"/> Ball State</td>
                <td class="mobile-hidden">32-26</td>
                <td class="result win">11-2</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Tues. Mar. 8</td>
                <td>vs</td>
                <td class="mobile-hidden">77</td>
                <td><img src="img/team-logos/neworleans-logo.png" alt="" data-rjs="2"/> New Orleans</td>
                <td class="mobile-hidden">31-26</td>
                <td class="result win">11-2</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <table>
            <tbody>
              <tr>
                <td class="date">Fri. Feb 19</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Fri. Feb 20</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Fri. Feb 21</td>
                <td>vs</td>
                <td class="mobile-hidden">57</td>
                <td><img src="img/team-logos/bearcat-logo.png" alt="" data-rjs="2"/> Cincinnati</td>
                <td class="mobile-hidden">26-30-1</td>
                <td class="result win">6-5</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
              <tr>
                <td class="date">Wed. Feb 24</td>
                <td>at</td>
                <td class="mobile-hidden">64</td>
                <td><img src="img/team-logos/lamar-logo.png" alt="" data-rjs="2"/> Lamar</td>
                <td class="mobile-hidden">35-19</td>
                <td class="result lose">11-2</td>
                <td class="mobile-hidden">[+]</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="data-table">
        <section class="filters">
          <h3>By The Numbers</h3>
        </section>

        <div class="pull-left half">
          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Record</td>
                    <td></td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>Overall</td>
                    <td>45-21</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Home</td>
                    <td>28-12</td>
                  </tr>
                  <tr>
                    <td>Away</td>
                    <td>13-8</td>
                  </tr>
                  <tr>
                    <td>Neutral</td>
                    <td>4-1</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Conference</td>
                    <td>19-11</td>
                  </tr>
                  <tr>
                    <td>Non-Conf</td>
                    <td>20-6</td>
                  </tr>
                  <tr>
                    <td>Postseason</td>
                    <td>6-4</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Predictions</td>
                    <td></td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>Overall</td>
                    <td>45-21</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Conference</td>
                    <td>28-12</td>
                  </tr>
                  <tr>
                    <td>RPI</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>SOS</td>
                    <td>6</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Runs Per Game</td>
                    <td></td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>Offense</td>
                    <td>6.5</td>
                  </tr>
                  <tr>
                    <td>Defense</td>
                    <td>4.5</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Margin</td>
                    <td>+2.0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="pull-left half">
          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Rankings</td>
                    <td>Rank</td>
                    <td>Value</td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>RPI</td>
                    <td>9</td>
                    <td>0.5950</td>
                  </tr>
                  <tr>
                    <td>Non-Conf RPI</td>
                    <td>17</td>
                    <td>0.5950</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>SOS</td>
                    <td>6</td>
                    <td>0.5950</td>
                  </tr>
                  <tr>
                    <td>Non-Conf SOS</td>
                    <td>32</td>
                    <td>0.5462</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>NPI</td>
                    <td>32</td>
                    <td>78.580</td>
                  </tr>
                  <tr>
                    <td>Elo-Chess</td>
                    <td>8</td>
                    <td>1745.0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>vs. RPI/NPI Teams</td>
                    <td>RPI</td>
                    <td>NPI</td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>1-50</td>
                    <td>14-14</td>
                    <td>12-14</td>
                  </tr>
                  <tr>
                    <td>51-100</td>
                    <td>9-3</td>
                    <td>10-3</td>
                  </tr>
                  <tr>
                    <td>101-200</td>
                    <td>17-4</td>
                    <td>21-4</td>
                  </tr>
                  <tr>
                    <td>201+</td>
                    <td>5-0</td>
                    <td>2-0</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="table-group">
            <div>
              <table>
                <thead>
                  <tr>
                    <td>Current Streaks</td>
                    <td></td>
                  </tr>
                </thead>
              </table>
            </div>
            <div>
              <table>
                <tbody>
                  <tr>
                    <td>Overall Streak</td>
                    <td>2 Losses</td>
                  </tr>
                  <tr>
                    <td>Home Streak</td>
                    <td>2 Losses</td>
                  </tr>
                  <tr>
                    <td>Road Streak</td>
                    <td>1 Loss</td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Last 10</td>
                    <td>6-4</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <div class="clearfix"></div>
</div>


<?php require 'footer.php'; ?>
