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

<?php if ($content['events']) : ?>
<section id="events" class="cf bkg-white">
  <div class="inner">
  <h2 id="h2-events" class="with-icon">Selected events</h2>
    <?php print $content['events']; ?>
  <p class="pane-wrapper-more"><a class="btn" href="http://www.run-riot.com">See all events</a></p>
  </div>
</section>
<?php endif; ?>

<?php if ($content['blogs']) : ?>
<section id="blog" class="cf">
  <div class="inner">
    <h2 id="h2-blog" class="with-icon">Fresh from our blog</h2>
    <?php print $content['blogs']; ?>
    <p class="pane-wrapper-more"><a class="btn" href="http://www.run-riot.com/articles/blogs">See all articles</a></p>
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

