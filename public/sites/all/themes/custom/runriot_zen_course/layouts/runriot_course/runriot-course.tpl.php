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

        <?php print $content['course_option_header']; ?>

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

    <!-- edited up to here -->

    <section id="more-about"  class="bkg-gray accordion-wrapper cf ">
      <div class="inner">
      <a name="more" />
        <header <?php if (strpos($content['more_about_header'], 'Download')) :?>class="title-with-download <?php endif; ?>cf">
          <?php print $content['more_about_header']; ?>
        </header>

        <?php print $content['more_about']; ?>

      </div>
    </section>


    <section id="course-faq" class="bkg-white accordion-wrapper cf ">
      <div class="inner">
        <header class="title-with-download cf">
        <h2>Course FAQs</h2>
        <?php print $content['course_header']; ?>
      </header>

    <?php print $content['course_body']; ?>

      </div>
    </section>



    <section id="booking" class="bkg-gray cf">
      <div class="inner">

        <h2>Booking<span class="icon-tickets"></span></h2>
        <?php print $content['booking_header']; ?>

        <?php print $content['booking_body']; ?>

      </div>
    </section>

