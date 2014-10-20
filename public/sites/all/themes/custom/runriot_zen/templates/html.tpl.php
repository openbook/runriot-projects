<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=1000">
  <?php endif; ?>
  <meta http-equiv="cleartype" content="on">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script>
    <![endif]-->
  <?php elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="wrapper <?php print $classes; ?>" <?php print $attributes;?>>
  <div id="wrapper">

    <?php if ($skip_link_text && $skip_link_anchor): ?>
      <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
      </p>
    <?php endif; ?>
    <?php print $page_top; ?>
    <?php print $page; ?>



  <!-- footer -->
  <footer>
    <div class="inner">
      <nav id="nav-sitemap">
        <ul>
          <li><a href="<?php print url('node/23'); ?>">About</a></li>
          <li><a href="<?php print url('node/26'); ?>">Learning</a></li>
          <li><a href="<?php print url('node/27'); ?>">Magazine</a></li>
          <li class="secondary"><a href="<?php print url('node/108'); ?>">Terms &amp; Privacy</a></li>
        </ul>
      </nav>

      <div id="footer-contact">
        <h2>Contact us</h2>
        <p>Run Riot Projects<br>
        Platform 1<br>
        Village Underground<br>
        54 Holywell Lane<br>
        London EC2A 3PQ</p>

        <nav id="nav-social">
          <ul>
            <li id="ns-twitter"><a href="http://twitter.com/Run_Riot">Twitter</a></li>
            <li id="ns-facebook"><a href="http://www.facebook.com/run.riot.LDN">Facebook</a></li>
            <li id="ns-youtube"><a href="https://www.youtube.com/user/RUNRIOTTV/videos">YouTube</a></li>
          </ul>
        </nav>
      </div>

        <div id="branding-signoff">
        </div>

    </div>
  </footer>
  <!-- // footer -->

  </div><!--#wrapper-->
<?php print $page_bottom; ?>
<a title="Web Analytics" href="http://clicky.com/100767633"><img alt="Web Analytics" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100767633); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100767633ns.gif" /></p></noscript>
<script type="text/javascript">
   var _mfq = _mfq || [];
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/cd13215d-4a2c-4cbe-a59d-8a2490595d5e.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>
</body>
</html>
