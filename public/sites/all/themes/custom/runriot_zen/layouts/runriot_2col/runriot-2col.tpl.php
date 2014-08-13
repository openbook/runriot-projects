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

<section id="head" class="contact align-left cf">
  <div class="inner">

    <header class="full-width">
      <?php print $content['header']; ?>
    </header>

<div class="grid cf">

          <div class="col grid-6col">

            <?php print $content['post_header_left']; ?>

          </div>

          <div class="col grid-6col">

            <?php print $content['post_header_right']; ?>

          </div>
        </div>

  </div>

</section>
