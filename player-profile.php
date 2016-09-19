<?php require 'header.php'; ?>

<div id="wrap" class="container player-profile">
  <div class="player-header">
    <div class="team-logo pull-left">
      <img src="img/team-logos/lsu-logo.png" alt="" data-rjs="2">
    </div>
    <div class="team-header-left">
      <h1 class="team-title">Alex Lange</h1>
      <h3>Pitcher</h3>
      <div>
        <div class="player-info">
          <div class="row">
            <div class="info-item">
              <span class="info-label">Team:</span>
              <span class="info">LSU Tigers</span>
            </div>
            <div class="info-item">
              <span class="info-label">Year:</span>
              <span class="info">Sophomore</span>
            </div>
          </div>
          <div class="row">
            <div class="info-item">
              <span class="info-label">Height:</span>
              <span class="info">6’3”</span>
            </div>
            <div class="info-item">
              <span class="info-label">Weight:</span>
              <span class="info">201lbs</span>
            </div>
          </div>
        </div>
        <select name="team" class="mobile-hidden">
          <option value="lsu">LSU Players</option>
        </select>
      </div>
    </div>
    <div class="team-header-right pull-right">
      <div class="score-board pull-right">
        <section class="title">
          2016 Stats
        </section>
        <div class="era"><span>ERA</span>3.79</div>
        <div class="wl"><span>W-L</span>8-4</div>
        <div class="so"><span>SO</span>125</div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>

  <?php require 'sidebar.php'; ?>

  <main>
    <div class="content">
      <section class="filters mobile-visible">
      <select name="team" class="mobile-visible">
        <option value="lsu">LSU Players</option>
      </select>
    </section>

      <section class="data-table mobile-hidden">
        <section class="filters">
          <h3 class="mobile-hidden">Pitching Statistics</h3>
        </section>
        <div>
          <table>
            <thead>
              <tr>
                <td>Year</td>
                <td>Team</td>
                <td>W</td>
                <td>L</td>
                <td>ERA</td>
                <td>APP</td>
                <td>GS</td>
                <td>CG</td>
                <td>SHO</td>
                <td>SV</td>
                <td>IP</td>
                <td>H</td>
                <td>R</td>
                <td>ER</td>
                <td>BB</td>
                <td>SO</td>
                <td>WP</td>
                <td>HP</td>
                <td>OBA</td>
              </tr>
            </thead>
          </table>
        </div>
        <div>
          <table>
            <tbody>
              <tr>
                <td class="year">2015</td>
                <td>LSU</td>
                <td>8</td>
                <td>4</td>
                <td>3.79</td>
                <td>17</td>
                <td>17</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>111.2</td>
                <td>92</td>
                <td>50</td>
                <td>47</td>
                <td>49</td>
                <td>125</td>
                <td>18</td>
                <td>9</td>
                <td>.226</td>
              </tr>
              <tr>
                <td class="year">2016</td>
                <td>LSU</td>
                <td>8</td>
                <td>4</td>
                <td>3.79</td>
                <td>17</td>
                <td>17</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>111.2</td>
                <td>92</td>
                <td>50</td>
                <td>47</td>
                <td>49</td>
                <td>125</td>
                <td>18</td>
                <td>9</td>
                <td>.226</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section>
        <h3>Player Notes</h3>
        <div class="notes">
          <div class="note-item">
            <p>
              Lange hasn't shown great command so far this season, but stuff still very much electric. Sat 93-94, and up to 95 mph, consistently, against Texas A&M. Showcased a mid-80s changeup and an 81-84 mph power curve with good depth and wipeout ability. Command needs to get better, but stuff is still there.
            </p>
            <span class="byline">Kendall Rogers - March 16, 2016</span>
          </div>
          <div class="note-item">
            <p>
              Lange hasn't shown great command so far this season, but stuff still very much electric. Sat 93-94, and up to 95 mph, consistently, against Texas A&M. Showcased a mid-80s changeup and an 81-84 mph power curve with good depth and wipeout ability. Command needs to get better, but stuff is still there.
            </p>
            <span class="byline">Kendall Rogers - March 16, 2016</span>
          </div>
        </div>
      </section>

      <section>
        <h3>Player Wire</h3>
        <div class="wire clearfix">
          <div class="half pull-left">
            <div>
              <h5>Rogers: Toasting To Vintage Lange</h5>
              <span class="byline">Kendall Rogers - March 16, 2016</span>
            </div>
            <div>
              <h5>LSU’s Lange, UF’s Puk Magical</h5>
              <span class="byline">Kendall Rogers - March 16, 2016</span>
            </div>
            <div>
              <h5>D1Baseball’s Dream Draft</h5>
              <span class="byline">D1 Baseball Staff - March 16, 2016</span>
            </div>
          </div>
          <div class="half pull-left">
            <div>
              <h5>May 13 Top Performers</h5>
              <span class="byline">D1 Baseball Staff - March 16, 2016</span>
            </div>
            <div>
              <h5>Ten Thoughts: Friday, April 29</h5>
              <span class="byline">Kendall Rogers - March 16, 2016</span>
            </div>
            <div>
              <h5>Stat Roundup: April 29 Top Performers</h5>
              <span class="byline">D1 Baseball Staff - March 16, 2016</span>
            </div>
          </div>
        </div>

        <div class="button-container">
          <a href="#" class="read-more">Read More</a>
        </div>
      </section>
      <section>
        <h3>Player Photos</h3>
        <div class="slider-container">
          <span class="arrow prev pull-left">&#9001;</span>
          <span class="arrow next pull-right">&#9002;</span>
          <div class="clearfix"></div>
          <div class="slick-slider-img">
            <div class="slide">
              <img src="img/alex-lange.png" alt="" data-rjs="2"/>
              <span class="caption">Alex Lange (Photographer Name Here)</span>
            </div>

            <div class="slide">
              <img src="img/alex-lange.png" alt="" data-rjs="2"/>
              <span class="caption">Alex Lange (Photographer Name Here)</span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <div class="clearfix"></div>
</div>

<?php require 'footer.php'; ?>
