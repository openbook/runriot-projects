<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_runriot_project_panels_layouts() {
  $items['runriot_project'] = array(
    'title' => t('Run Riot Zen: project'),
    'category' => t('RR Zen'),
    'icon' => 'runriot_project.png',
    'theme' => 'runriot_project',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
      'type' => t('Type'),
      'title' => t('Title'),
      'header' => t('Header'),
      'hero_image' => t('Hero image'),
      'post_hero_image' => t('Post hero image'),
      'post_hero_date' => t('Post hero date'),
      'post_hero_location' => t('Post hero location'),
      'post_hero_availability' => t('Post hero availability'),
      'post_hero_cost' => t('Post hero cost'),
      'booknow' => t('Book now area'),
      'about_course_left' => t('About course - left'),
      'about_course_right' => t('About course - right'),
      'more_about_header' => t('More about course - header'),
      'more_about' => t('More about course'),
      'trainer_intro' => t('Trainer intro'),
      'trainer_image' => t('Trainer image'),
      'trainer_body' => t('Trainer body'),
      'trainer_media' => t('Trainer media'),
      'course_header' => t('Course info header'),
      'course_body' => t('Course info body'),
      'booknow_footer' => t('Book now footer area'),
      'course_footer' => t('Footer text'),
    ),
  );
  return $items;
}



