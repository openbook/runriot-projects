<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_runriot_landing_panels_layouts() {
  $items['runriot_landing'] = array(
    'title' => t('Run Riot Zen: landing'),
    'category' => t('RR Zen'),
    'icon' => 'runriot_landing.png',
    'theme' => 'runriot_landing',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'header' => t('Header'),
      'post_header' => t('Post header'),
      'content' => t('content'),

      'latestprojects' => t('Latest projects'),
    ),
  );
  return $items;
}



