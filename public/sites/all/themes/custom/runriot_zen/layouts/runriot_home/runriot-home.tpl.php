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
      <?php print $content['header']; ?>
    </header>

    <div class="grid cf">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

          <?php if (!empty($content['post_header'])) : ?>
            <?php print $content['post_header']; ?>
          <?php endif; ?>
      </div>

      <div class="col grid-2col">
      </div>
    </div>


  </div>

</section>

<?php if ($content['slides']) : ?>
<section id="slides" class="cf">
  <div class="inner">
    <?php print $content['slides']; ?>
  </div>
</section>
<?php endif; ?>

<?php if ($content['content']) : ?>
<section id="featured" class="h2-no-margin-bottom no-padding-bottom rule-bottom cf">
  <div class="inner">
    <?php print $content['content']; ?>
  </div>
</section>
<?php endif; ?>

<?php if ($content['latestprojects']) : ?>
<section id="latestprojects" class="cf">
  <div class="inner">
    <?php print $content['latestprojects']; ?>
  </div>
</section>
<?php endif; ?>

