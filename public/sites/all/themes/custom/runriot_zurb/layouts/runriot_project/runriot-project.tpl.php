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
<div class="row intro-copy">

  <div class="project-category large-12 medium-12 small-12 columns">
    <?php print $content['type']; ?>
  </div>

  <div class="project-title large-12 medium-12 small-12 columns">
    <?php print $content['title']; ?>
  </div>

  <div class="project-intro info large-12 medium-12 small-12 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['header']; ?>
  </div>

</div>

<div class="project-hero" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
   <?php print $content['hero_image']; ?>
</div>

<div class="row project-dates">

  <div class="large-12 medium-12 small-12 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['post_hero_image']; ?>
  </div>

  <div class="large-6 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['post_hero_left']; ?>
  </div>
  <div class="large-6 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['post_hero_right']; ?>
  </div>

</div>

<div class="row project-trainer">

  <div class="large-12 medium-12 small-12 columns">
    <h4>The Trainer</h4>
    <?php print $content['trainer_intro']; ?>
  </div>

  <div class="large-6 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['trainer_info_left']; ?>
  </div>
  <div class="large-6 columns" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['trainer_info_right']; ?>
  </div>

  <div class="large-12 medium-12 small-12 columns project-video" <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
    <?php print $content['post_trainer_info']; ?>
  </div>

</div>


<div class="row project-venu">

  <div class="large-12 medium-12 small-12 columns">
    <h4>The Venue</h4>
  </div>

  <div class="large-3 columns">
    <?php print $content['venue_info_left']; ?>
  </div>
  <div class="large-9 columns">
    <?php print $content['venue_info_right']; ?>
  </div>

</div>
