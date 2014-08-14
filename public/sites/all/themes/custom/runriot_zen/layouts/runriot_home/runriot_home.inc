<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_runriot_home_panels_layouts() {
  $items['runriot_home'] = array(
    'title' => t('Run Riot Zen: home'),
    'category' => t('RR Zen'),
    'icon' => 'runriot_home.png',
    'theme' => 'runriot_home',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'header' => t('Header'),
      'post_header' => t('Post header'),
      'slides' => t('Slides'),
      'content' => t('content'),
      'latestprojects' => t('Latest projects'),
      'events' => t('events'),
      'blogs' => t('blogs'),
    ),
  );
  return $items;
}



