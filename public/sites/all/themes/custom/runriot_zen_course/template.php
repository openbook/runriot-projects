<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function runriot_zen_course_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  runriot_zen_course_preprocess_html($variables, $hook);
  runriot_zen_course_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function runriot_zen_course_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function runriot_zen_course_preprocess_page(&$variables, $hook) {
  $variables['custom_header_menu'] = menu_tree_all_data("main-menu");
  if (isset($variables['node']) && $variables['node']->type == 'project') {
    ctools_include('modal');
    ctools_modal_add_js();
  }
}

/**
 * Helper function to create prev/next button
 */
function runriot_zen_course_get_prev_next() {
  // $node = menu_get_object();

  // if (!isset($node->nid)) {
  //   return;
  // }

  // $prev_nid = prev_next_nid($node->nid, 'prev');
  // $next_nid = prev_next_nid($node->nid, 'next');

  // $output = '<div id="course-browse">';
  // if ($prev_nid) {
  //   $output .= '<a id="prev-course" href="'.
  //   url("node/" . $prev_nid) .'">Previous course</a>';
  // }
  // if ($next_nid) {
  //   $output .= '<a id="next-course" href="'.
  //   url("node/" . $next_nid) .'">Next course</a>';
  // }

  // $output .= "</div>";
  // return $output;

}





/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function runriot_zen_course_preprocess_field(&$variables, $hook) {
  if ($variables['element']['#field_name'] == 'field_course_info_download'
    || $variables['element']['#field_name'] == 'field_download_faqs') {
    $variables['element'][0]['#file']->filename = $variables['element']['#items'][0]['filename'] = 'Download complete PDF';
  }
  if ($variables['element']['#field_name'] == 'field_course_info'
    || $variables['element']['#field_name'] == 'field_faq_info') {
    $variables['theme_hook_suggestions'][] = 'field_collection_item__info';
  }
  if ($variables['element']['#field_name'] == 'field_trainer_media') {
    $variables['theme_hook_suggestions'][] = 'field_collection_item__media';
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function runriot_zen_course_preprocess_node(&$variables, $hook) {
  kpr($variables);
}

/**
 * Returns HTML for an image with an appropriate icon for the given file.
 *
 * @param $variables
 *   An associative array containing:
 *   - file: A file object for which to make an icon.
 *   - icon_directory: (optional) A path to a directory of icons to be used for
 *     files. Defaults to the value of the "file_icon_directory" variable.
 *
 * @ingroup themeable
 */
function runriot_zen_course_file_icon($variables) {
  return '';
}

function runriot_zen_course_file_link($variables) {
  $file = $variables['file'];
  $icon_directory = $variables['icon_directory'];

  $url = file_create_url($file->uri);
  // $icon = theme('file_icon', array('file' => $file, 'icon_directory' => $icon_directory));

  // Set options as per anchor format described at
  // http://microformats.org/wiki/file-format-examples
  $options = array(
    'attributes' => array(
      'type' => $file->filemime . '; length=' . $file->filesize,
      'class' => array("download", "download-pdf"),
    ),
  );

  // Use the description as the link text if available.
  if (empty($file->description)) {
    $link_text = $file->filename;
  }
  else {
    $link_text = $file->description;
    $options['attributes']['title'] = check_plain($file->filename);
  }

  return l($link_text, $url, $options) ;
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function runriot_zen_course_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function runriot_zen_course_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function runriot_zen_course_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
