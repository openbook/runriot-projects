<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<header id="masthead" class="cf">

  <div class="inner cf">

    <nav id="nav-main">
      <a href="#" id="navibar"><span>Menu</span> <i class="navmenu"></i></a>
      <ul>
        <li id="branding"><a href="/">Home</a></li>
        <?php foreach ($custom_header_menu as $item) : ?>
        <?php if ($item['link']['hidden']) continue; ?>
        <li><?php print l($item['link']['link_title'], $item['link']['link_path']); ?></li>
        <?php endforeach; ?>
      </ul>
    </nav>


    <nav id="nav-connect">
      <ul>
        <li id="nc-twitter"><a href="http://twitter.com/Run_Riot">Twitter</a></li>
        <li id="nc-facebook"><a href="http://www.facebook.com/run.riot.LDN">Facebook</a></li>
        <li id="nc-youtube"><a href="https://www.youtube.com/user/RUNRIOTTV/videos">YouTube</a></li>
        <li id="nc-joinus"><a href="#join">Join us</a></li>
      </ul>
    </nav>
  </div>

<?php print render($page['header']); ?>

</header>

<div id="container" class="cf">

    <?php print render($page['highlighted']); ?>
    <?php //print $breadcrumb; ?>
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


  <section id="join" class="join-course cf">
    <div class="inner">

      <h2>Hear about our projects. Read our magazine bulletins.</h2>

      <a name="signup" />
      <?php print drupal_render(drupal_get_form("runriot_mailinglist_footer_signup_form")); ?>

    </div>
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
