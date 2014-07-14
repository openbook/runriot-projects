<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zurb_runriot_project_panels_layouts() {
  $items['runriot_project'] = array(
    'title' => t('Run Riot: project'),
    'category' => t('RR'),
    'icon' => 'runriot_project.png',
    'theme' => 'runriot_project',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'type' => t('Type'),
      'title' => t('Title'),
      'header' => t('Header'),
      'hero_image' => t('Hero image'),
      'post_hero_image' => t('Post hero image'),
      'post_hero_left' => t('Post hero left'),
      'post_hero_right' => t('Post hero right'),
      'trainer_intro' => t('Trainer intro'),
      'trainer_info_left' => t('Trainer info left'),
      'trainer_info_right' => t('Trainer info right'),
      'post_trainer_info' => t('Post trainer info'),
      'venue_info_left' => t('Venue info left'),
      'venue_info_right' => t('Venue info right'),
    ),
  );
  return $items;
}



