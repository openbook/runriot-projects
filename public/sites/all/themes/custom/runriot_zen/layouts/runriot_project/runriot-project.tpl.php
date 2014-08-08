<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>

<section id="head" class="cf">
  <div class="inner">

    <header>
      <?php print $content['type']; ?>
      <?php print $content['title']; ?>
      <?php print $content['header']; ?>
    </header>

  </div>
</section>

<section id="slides" class="cf bkg-white">
  <div class="inner">
    <?php print $content['hero_image']; ?>
  </div>
</section>



<section id="course-desc" class="cf">
  <div class="inner">

    <div class="grid cf">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

        <?php print $content['post_hero_image']; ?>

        <ul id="course-detail">
          <li>
            <h3 id="course-detail-time">Time</h3>
            <?php print $content['post_hero_date']; ?>
          </li>
          <li>
            <h3 id="course-detail-location">Location</h3>
            <?php print $content['post_hero_location']; ?>
          </li>
          <li>
            <h3 id="course-detail-availability">Availability</h3>
            <?php print $content['post_hero_availability']; ?>
          </li>
          <li>
            <h3 id="course-detail-cost">Cost</h3>
            <?php print $content['post_hero_cost']; ?>
          </li>
        </ul>

      </div>

      <div class="col grid-2col">
      </div>
    </div>
  </div>
</section>

<section id="booknow" class="cf bkg-white">
  <div class="inner">

    <div class="grid cf">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

        <?php print $content['booknow']; ?>

      </div>


      <div class="col grid-2col">
      </div>

    </div>

  </div>
</section>


<section id="about-course" class="cf ">

  <div class="inner">

    <h2>About the course</h2>

    <div class="grid cf">

      <div class="col grid-6col">
        <?php print $content['about_course_left']; ?>
      </div>

      <div class="col grid-6col">
        <?php print $content['about_course_right']; ?>
      </div>

    </div>


    <div id="more-about-course">
      <header>
        <?php print $content['more_about_header']; ?>
      </header>
        <?php print $content['more_about']; ?>
    </div>

  </div>
</section>


<section id="trainer" class="cf bkg-white">
  <div class="inner">

    <header>
      <h2>The Trainer</h2>
      <?php print $content['trainer_intro']; ?>
    </header>


    <div class="grid cf" id="trainer-profile">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

        <div class="trainer-image">
          <?php print $content['trainer_image']; ?>
        </div>

        <?php print $content['trainer_body']; ?>
      </div>

      <div class="col grid-2col">
      </div>
    </div>


    <div class="grid cf" id="trainer-video">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

        <h2>Media</h2>

        <?php print $content['trainer_media']; ?>

      </div>

      <div class="col grid-2col">
      </div>
    </div>


  </div>
</section>


<section id="course-faq" class="cf ">
  <div class="inner">

    <header>
      <h2>Course FAQs</h2>
      <?php print $content['course_header']; ?>
    </header>

    <?php print $content['course_body']; ?>

  </div>
</section>

<section id="booknow-footer" class="cf bkg-white">
  <div class="inner">
    <div class="grid cf">
      <div class="col grid-2col"></div>
      <div class="col grid-8col"><?php print $content['booknow_footer']; ?></div>
      <div class="col grid-2col"></div>
    </div>
  </div>
</section>

<section class="cf">
  <div class="inner">

    <div class="grid cf">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

        <?php print $content['course_footer']; ?>
      </div>


      <div class="col grid-2col">
      </div>

    </div>

  </div>
</section>
