<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_runriot_2col_panels_layouts() {
  $items['runriot_2col'] = array(
    'title' => t('Run Riot Zen: 2col'),
    'category' => t('RR Zen'),
    'icon' => 'runriot_2col.png',
    'theme' => 'runriot_2col',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      "header"  => t("header"),
      "post_header_left"  => t("post header left"),
      "post_header_right"  => t("post header right"),
    ),
  );
  return $items;
}








