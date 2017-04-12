<?php
/**
 * @file
 * Node template functions.
 */

/**
 * Implements hook_preprocess_node().
 */
function ddc_theme_preprocess_node(&$variables) {
  $node_type = $variables['node']->type;

  // We want to theme nodes by type and display mode.
  $variables['theme_hook_suggestions'][] = 'node__' . $node_type . '__' . $variables['view_mode'];

  $function_names = array(
    'ddc_theme_preprocess_node__' . $node_type . '__' . $variables['view_mode'],
    'ddc_theme_preprocess_node__' . $node_type,
  );

  foreach ($function_names as $function_name) {
    if (function_exists($function_name)) {
      $function_name($variables);
    }
  }
}

function ddc_theme_preprocess_node__article__teaser(&$variables) {

  // Create linked title.
  $variables['linked_title'] = l($variables['title'], 'node/' . $variables['nid']);

  // Add a color to special articles
  _ddc_theme_mark_special_article($variables);
}

function ddc_theme_preprocess_node__article__full(&$variables) {

  // Add a color to special articles
  _ddc_theme_mark_special_article($variables);
}

function _ddc_theme_mark_special_article(&$vars) {
  // Load the metadata wrapper
  $article_wrapper = entity_metadata_wrapper('node', $vars['node']);

  // Check if the article is special
  $article_is_special = $article_wrapper->field_article_is_special->value() == 'yes';

  // Add a .special-article class to special articles
  if ($article_is_special) {
    $vars['classes_array'][] = 'special-article';
  }
}