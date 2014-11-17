    <section id="banner" class="cf">
      <div class="inner">
        <?php print $content['hero_image']; ?>
      </div>
    </section>


    <section id="sub-nav" class="cf">
      <div class="inner">
        <nav>
          <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#trainer">Trainer</a></li>
            <li><a href="#more-about">More about mindfulness</a></li>
            <li><a href="#course-faq">Course FAQs</a></li>
            <li><a class="sub-nav-button" href="#booking">Booking</a></li>
          </ul>
        </nav>
      </div>
    </section>

    <section id="about" class="bkg-white cf">
      <div class="inner">
        <?php print $content['about']; ?>
      </div>
    </section>


    <section id="courses" class="bkg-gray cf">
      <div class="inner">

        <?php print $content['course_header']; ?>

        <div id="course-options">
          <?php print $content['course_options']; ?>
        </div>

      </div>
    </section>


    <section id="trainer" class="bkg-white cf">
      <div class="inner">

        <h2>The Trainer</h2>

        <div class="trainer-avatar">
          <?php print $content['trainer_image']; ?>
        </div>

        <?php print $content['trainer_body']; ?>
      </div>

      <div class="inner">

        <h2 class="sub">Trainer in action</h2>

        <div id="in-action" class="cf">
          <?php print $content['trainer_media']; ?>
        </div>

      </div>


    </section>

    <header <?php if (strpos($content['more_about_header'], 'Download')) :?>class="title-with-download"<?php endif; ?>>
      <?php print $content['more_about_header']; ?>
    </header>

    <?php print $content['more_about']; ?>

    <!-- edited up to here -->

    <section id="more-about"  class="bkg-gray accordion-wrapper cf ">
      <div class="inner">
        <header <?php if (strpos($content['more_about_header'], 'Download')) :?>class="title-with-download <?php endif; ?>cf">
          <h2>More about mindfulness</h2>
          <p><a class="download" href="#">Download complete PDF</a></p>
        </header>

        <?php print $content['more_about']; ?>

      </div>
    </section>


    <section id="course-faq" class="bkg-white accordion-wrapper cf ">
      <div class="inner">

        <header <?php if (strpos($content['course_header'], 'Download')) :?>class="title-with-download <?php endif; ?>cf">
          <h2>Course FAQs</h2>
          <p><a class="download" href="#">Download complete PDF</a></p>
        </header>

        <?php print $content['course_body']; ?>

      </div>
    </section>



    <section id="booking" class="bkg-gray cf">
      <div class="inner">

        <h2>Booking<span class="icon-tickets"></span></h2>
        <p>The Art of Mindfulness is a not for profit venture. Any profits generated (beyond the costs of putting on the course) will be reinvested into the development of further courses.</p>


        <ul id="booking-options">

          <li><a name="booking-evening-course" class="anchor-offset"></a>
            <h2>Mindfulness evening courses (5-weeks)</h2>
            <p>A 5-week evening course designed to help you easily integrate Mindfulness practice into your daily life. <a href="#course-option-evening">More</a>.</p>

            <table>
              <thead>
                <tr>
                  <th class="bo-date">Date &amp; Time</th>
                  <th class="bo-group">Group size</th>
                  <th class="bo-location">Location</th>
                  <th class="bo-price">Price</th>
                  <th class="bo-concession"><span class="has-tooltip">Concessions <span class="tooltip"><span class="tooltip-icon">?</span> <span class="tooltip-message">We are offering a number of concessionary rate places for the unemployed and students, on a first come, first served basis.</span></span></span></th>
                  <th class="bo-book"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bo-date">30 Oct - 27 Nov 2014 <em>(10.30am-12:30pm)</em></td>
                  <td class="bo-group">16</td>
                  <td class="bo-location">Free Word Centre, 60 Farringdon Road,London EC1R, 3GA</td>
                  <td class="bo-price">-</td>
                  <td class="bo-concession">-</td>
                  <td class="bo-book"><span class="message">Sold out</span> <a class="cta" href="#">Join mailing list</a></td>
                </tr>
                <tr>
                  <td class="bo-date">22 Jan - 19 Feb 2015 <em>(7pm)</em></td>
                  <td class="bo-group">16</td>
                  <td class="bo-location">Free Word Centre, 60 Farringdon Road,London EC1R, 3GA</td>
                  <td class="bo-price">&pound;250</td>
                  <td class="bo-concession">-</td>
                  <td class="bo-book"><a class="btn" href="#">Book</a></td>
                </tr>
                <tr>
                  <td class="bo-date">24 Mar - 22 Apr 2015 <em>(7pm)</em></td>
                  <td class="bo-group">16</td>
                  <td class="bo-location">Free Word Centre, 60 Farringdon Road,London EC1R, 3GA</td>
                  <td class="bo-price">&pound;250</td>
                  <td class="bo-concession">&pound;180</td>
                  <td class="bo-book"><a class="btn" href="#">Book</a></td>
                </tr>
              </tbody>
            </table>
          </li>

          <li><a name="booking-taster-sessions" class="anchor-offset"></a>
            <h2>Mindfulness taster sessions</h2>
            <p>A short introduction to Mindfulness and the 5-week evening course. <a href="#course-option-taster">More</a>.</p>

            <table>
              <thead>
                <tr>
                  <th class="bo-date">Date &amp; Time</th>
                  <th class="bo-group">Group size</th>
                  <th class="bo-location">Location</th>
                  <th class="bo-price">Price</th>
                  <th class="bo-concession"><span class="has-tooltip">Concessions <span class="tooltip"><span class="tooltip-icon">?</span> <span class="tooltip-message">We are offering a number of concessionary rate places for the unemployed and students, on a first come, first served basis.</span></span></span></th>
                  <th class="bo-book"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="bo-date">13 Dec 2014 <em>(10.30am-12:30pm)</em></td>
                  <td class="bo-group">32</td>
                  <td class="bo-location">Free Word Centre, 60 Farringdon Road,London EC1R, 3GA</td>
                  <td class="bo-price">&pound;50</td>
                  <td class="bo-concession">&pound;20</td>
                  <td class="bo-book"><span class="message">Sold out</span> <a class="cta" href="#">Join mailing list</a></td>
                </tr>
                <tr>
                  <td class="bo-date">20 Jan 2015 <em>(7pm)</em></td>
                  <td class="bo-group">32</td>
                  <td class="bo-location">Free Word Centre, 60 Farringdon Road,London EC1R, 3GA</td>
                  <td class="bo-price">&pound;50</td>
                  <td class="bo-concession">&pound;20</td>
                  <td class="bo-book"><a class="btn" href="#">Book</a></td>
                </tr>
              </tbody>
            </table>
          </li>

        </ul>

      </div>
    </section>

