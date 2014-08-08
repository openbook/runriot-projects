<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<header id="masthead">

  <div id="branding">
    <a href="/"><img src="<?php print $base_path . path_to_theme(); ?>/images/run-riot-projects.png" alt="Run Riot Projects" /></a>
  </div>

  <nav id="nav-main">
    <a href="#" id="navibar">Menu <i class="navmenu"></i></a>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </nav>


  <nav id="nav-connect">
    <ul>
      <li id="nc-twitter"><a href="#">Twitter</a></li>
      <li id="nc-facebook"><a href="#">Facebook</a></li>
      <li id="nc-youtube"><a href="#">YouTube</a></li>
      <li id="nc-joinus"><a href="#">Join us</a></li>
    </ul>
  </nav>

  <?php print render($page['header']); ?>

</header>

<div id="container" class="cf">

  <section id="content" class="column" role="main">
    <?php print render($page['highlighted']); ?>
    <?php print $breadcrumb; ?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </section>




  <?php
    // Render the sidebars to see if there's anything in them.
    $sidebar_first  = render($page['sidebar_first']);
    $sidebar_second = render($page['sidebar_second']);
  ?>

  <?php if ($sidebar_first || $sidebar_second): ?>
    <aside class="sidebars">
      <?php print $sidebar_first; ?>
      <?php print $sidebar_second; ?>
    </aside>
  <?php endif; ?>

</div>

<?php print render($page['footer']); ?>

<?php print render($page['bottom']); ?>
