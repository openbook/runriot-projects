<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_runriot_about_panels_layouts() {
  $items['runriot_about'] = array(
    'title' => t('Run Riot Zen: about'),
    'category' => t('RR Zen'),
    'icon' => 'runriot_about.png',
    'theme' => 'runriot_about',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      "header"  => t("header"),
      "collaboration"  => t("collaboration"),
      "post_header"  => t("post_header"),
      "slides"  => t("slides"),
      "aboutus"  => t("aboutus"),
      "howwework"  => t("howwework"),
      "collaboration"  => t("collaboration"),
    ),
  );
  return $items;
}








