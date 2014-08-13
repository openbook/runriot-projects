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

<?php if ($content['aboutus']) : ?>
<section id="about-us" class="p-med cf">
  <div class="inner">

    <div class="grid cf">

      <div class="col grid-1col">
      </div>

      <div class="col grid-10col">

        <?php print $content['aboutus']; ?>

      </div>

      <div class="col grid-1col">
      </div>
    </div>

  </div>
</section>
<?php endif; ?>

<?php if ($content['howwework']) : ?>
<section id="how-work" class="cf align-left p-med bkg-white">
  <div class="inner">

    <h2 id="h2-how-we-work">How we work</h2>

    <ul id="how-we-work" class="cf">
      <li id="how-we-work-inspire">
        <div class="about-thumb">
        </div>
        <h3>Inspire</h3>
        <p>We inspire artists and audiences by showcasing progressive culture</p>
      </li>
      <li id="how-we-work-highlight">
        <div class="about-thumb">
        </div>
        <h3>Highlight</h3>
        <p>We highlight pioneering work and progressive thinkers</p>
      </li>
      <li id="how-we-work-empower">
        <div class="about-thumb">
        </div>
        <h3>Empower</h3>
        <p>We empower artists and audiences to speak their truth</p>
      </li>
      <li id="how-we-work-challenge">
        <div class="about-thumb">
        </div>
        <h3>Challenge</h3>
        <p>We challenge the status quo, campaigning creatively for a better world</p>
      </li>
      <li id="how-we-work-unite">
        <div class="about-thumb">
        </div>
        <h3>Unite</h3>
        <p>We unite great minds, to form a collective force for positive change.</p>
      </li>
    </ul>



    <div class="grid cf">

      <div class="col grid-2col">
      </div>

      <div class="col grid-8col">

      <?php print $content['howwework']; ?>

      </div>

      <div class="col grid-2col">
      </div>
    </div>


  </div>
</section>
<?php endif; ?>

<?php if ($content['collaboration']) : ?>
<section id="collaboration" class="p-med cf">
  <div class="inner">

    <h2>collaboration</h2>

    <div class="grid cf">

      <div class="col grid-1col">
      </div>

      <div class="col grid-10col">

        <?php print $content['collaboration']; ?>

      </div>

      <div class="col grid-1col">
      </div>
    </div>


  </div>
</section>
<?php endif; ?>


