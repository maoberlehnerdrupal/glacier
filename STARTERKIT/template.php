<?php

/**
 * Implements template_preprocess_html().
 */
// function STARTERKIT_preprocess_html(&$vars, $hook) {

// }

/**
 * Implements template_preprocess_page().
 */
// function STARTERKIT_preprocess_page(&$vars, $hook) {

// }

/**
 * Implements template_preprocess_entity().
 */
// function STARTERKIT_preprocess_entity(&$vars, $hook) {

// }

/**
 * Implements template_preprocess_node().
 */
// function STARTERKIT_preprocess_node(&$vars) {
//   // Alter node $vars array based on conditions.
//   // $alterations = array(
//   //   'classes_array' => array('class1', 'class2'),
//   //   'theme_hook_suggestions' => array('suggestion1'),
//   // );
//   // $conditions = array(
//   //   '#entity_type' => 'node',
//   //   '#bundle' => 'page',
//   //   '#view_mode' => array('full', 'teaser'), // Alter node if view mode is 'full' OR 'teaser'
//   // );
//   // glacier_vars_alter($vars, $alterations, $conditions);
// }

/**
 * Implements template_preprocess_field().
 */
// function STARTERKIT_preprocess_field(&$vars, $hook) {
//   // Alter field $vars array based on conditions.
//   // $alterations = array(
//   //   'classes_array' => array('class1', 'class2'),
//   //   'theme_hook_suggestions' => array('suggestion1'),
//   // );
//   // $conditions = array(
//   //   '#field_name' => 'title_field',
//   //   '#entity_type' => 'node',
//   //   '#bundle' => array('page', 'blog'), // Alter field if bundle is 'page' OR 'blog'
//   //   '#view_mode' => 'full',
//   // );
//   // glacier_vars_alter($vars, $alterations, $conditions);

//   // Define patterns that should be removed from the field css class name
//   // you can use this to remove prefixes (like the bundle name) from the field class name.
//   // $patterns = array(
//   //   '/^' . $vars['bundle_class'] . '-/',
//   //   '/^' . 'custom-prefix-/',
//   // );
//   // $vars['field_name_css'] = preg_replace($patterns, '', $vars['field_name_css']);

//   // Add bundle and view mode theme hook suggestions.
//   // $vars['theme_hook_suggestions'][] = 'field--' . $vars['bundle_class'] . '--' . $vars['field_name_class'];
//   // $vars['theme_hook_suggestions'][] = 'field--' . $vars['view_mode_class'] . '--' . $vars['field_name_class'];
//   // $vars['theme_hook_suggestions'][] = 'field--' . $vars['bundle_class'] . '--' . $vars['view_mode_class'] . '--' . $vars['field_name_class'];
// }

/**
 * Implements template_preprocess_block().
 */
// function STARTERKIT_preprocess_block(&$vars, $hook) {
//   // switch ($vars['elements']['#block']->delta) {
//   //   case 'main-menu':
//   //     $vars['classes_array'][] = 'c-menu--horizontal-responsive';
//   //     $vars['classes_array'][] = 'c-menu--horizontal-responsive--dropdown';
//   //     break;
//   // }
// }

/**
 * Implements template_preprocess_views_view().
 */
// function STARTERKIT_preprocess_views_view(&$vars) {

// }

/**
 * Implements template_preprocess_views_view_grid().
 */
// function STARTERKIT_preprocess_views_view_grid(&$vars) {

// }

/**
 * Implements template_preprocess_views_view_unformatted().
 */
// function STARTERKIT_preprocess_views_view_unformatted(&$vars) {

// }

/**
 * Implements theme_menu_tree().
 */
// function STARTERKIT_menu_tree__main_menu(&$vars) {
//   // Add controls to the main menu.
//   // $controls = '';
//   // $level_class = '';
//   // if (isset($vars['menu_level'])) {
//   //   if ($vars['menu_level'] == 1) {
//   //     $controls = '
//   //       <div class="c-menu__controls">
//   //         <label for="main-menu-checkbox" class="c-menu__toggle c-button">&#9776; Menu</label>
//   //       </div>
//   //       <input id="main-menu-checkbox" class="c-menu__checkbox" name="main-menu-checkbox" type="checkbox">
//   //     ';
//   //   }
//   //   $level_class = ' c-menu__list--level' . $vars['menu_level'];
//   // }
//   // return $controls . '<ul class="c-menu__list' . $level_class . '">' . $vars['tree'] . '</ul>';
// }
