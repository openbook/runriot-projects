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
      <a href="#" id="navibar"><span>Menu</span> <i class="navmenu"></i></a>
      <ul>
        <li><a href="template-1-home.html">Home</a></li>
        <li><a href="template-2-learning.html">Learning</a></li>
        <li><a href="#">Creative</a></li>
        <li><a href="template-4-magazine.html">Magazine</a></li>
        <li><a href="template-5-about.html">About</a></li>
        <li><a href="#">Donate</a></li>
        <li><a href="template-6-contact.html">Contact</a></li>
      </ul>
  </nav>


  <nav id="nav-connect">
    <ul>
      <li id="nc-twitter"><a href="http://twitter.com/Run_Riot">Twitter</a></li>
      <li id="nc-facebook"><a href="http://www.facebook.com/run.riot.LDN">Facebook</a></li>
      <li id="nc-youtube"><a href="https://www.youtube.com/user/RUNRIOTTV/videos">YouTube</a></li>
      <li id="nc-joinus"><a href="#">Join us</a></li>
    </ul>
  </nav>

  <?php print render($page['header']); ?>

</header>

<div id="container" class="cf">

  <section id="content" class="column" role="main">
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
  </section>

  <section id="join" class="cf align-left bkg-white">
    <div class="inner">

      <h2>Join us</h2>

      <div class="grid cf">

        <div class="col grid-1col">
        </div>

        <div class="col grid-4col">
          <p>Hear about our Projects<br>
          Read our Magazine bulletins</p>
          <p>Join us <span class="r-arrow"></span></p>

        </div>

        <div class="col grid-2col">
        </div>

        <div class="col grid-4col">

          <form action="#" id="form-join">

            <label id="form-join-fname">
              <span>First name</span>
              <input type="text">
            </label>

            <label id="form-join-lname">
              <span>Last name</span>
              <input type="text">
            </label>

            <label id="form-join-email">
              <span>Email address</span>
              <input type="email">
            </label>

              <ul class="checkbox-columns cf">
                <li>
                  <input type="checkbox" id="form-join-chk-rrp">
                  <label for="form-join-chk-rrp">
                    <span>Run-Riot Projects</span>
                  </label>
                </li>
                <li>
                  <input type="checkbox" id="form-join-chk-rrm">
                  <label for="form-join-chk-rrm">
                    <span>Run-Riot Magazine</span>
                  </label>
                </li>
              </ul>

            <label id="form-join-submit">
              <input type="submit" value="Join us">
            </label>

          </form>

        </div>

        <div class="col grid-1col">
        </div>
      </div>

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
