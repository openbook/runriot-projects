<?php

/**
 * Implements hook_panels_layouts()
 */
function runriot_zen_course_runriot_course_panels_layouts() {
  $items['runriot_course'] = array(
    'title' => t('Run Riot Zen course: 2col'),
    'category' => t('RR Zen course'),
    'icon' => 'runriot_course.png',
    'theme' => 'runriot_course',
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








