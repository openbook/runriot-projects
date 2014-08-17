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

    <?php if ($content['post_header_right'] || $content['post_header_left']) : ?>
    <div class="grid cf">

          <?php if ($content['post_header_left']) : ?>
          <div class="col grid-6col">

            <?php print $content['post_header_left']; ?>

          </div>
          <?php endif; ?>

          <?php if ($content['post_header_right']) : ?>
          <div class="col grid-6col">

            <?php print $content['post_header_right']; ?>

          </div>
          <?php endif; ?>

        </div>
    <?php endif; ?>

    <?php if ($content['full_post']) : ?>
      <?php print $content['full_post']; ?>
    <?php endif; ?>
  </div>

</section>

<?php if ($content['content']); ?>
<section id="" class="accordion-wrapper cf ">
      <div class="inner">
      <?php print $content['content']; ?>
      </div>
</section>

