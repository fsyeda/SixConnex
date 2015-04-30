<?php
// $Id: template.php,v 1.16.2.2 2009/08/10 11:32:54 goba Exp $

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
* Override or insert PHPTemplate variables into the search_theme_form template.
*
* @param $vars
*   A sequential array of variables to pass to the theme template.
* @param $hook
*   The name of the theme function being called (not used in this case.)
*/
function SixConnex_preprocess_search_theme_form(&$vars, $hook) {
  // Remove the "Search this site" label from the form.
  $vars['form']['search_theme_form']['#title'] = t('');
 
  // Set a default value for text inside the search box field.
  $vars['form']['search_theme_form']['#value'] = t('Search');
 
  // Add a custom class and placeholder text to the search box.
  $vars['form']['search_theme_form']['#attributes'] = array(
    'class' => 'NormalTextBox txtSearch',
    'onfocus'=> "if (this.value == 'Search') {this.value = '';}",
    'onblur' => "if (this.value == '') {this.value = 'Search';}");

  // Change the text on the submit button
  //$vars['form']['submit']['#value'] = t('Go');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

  $vars['form']['submit']['#type'] = 'hidden';
  $vars['form']['submit']['#src'] = '';
   
  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}

function url_breadcrumb($breadcrumb) {
    $url = path_alias_array();

    // On admin pages, use the default breadcrumb. But I prefer having the
    // title of the current page display as well.  So I remove the '</div>'
    // tag from the original breadcrumb with substr() and add in the title with
    // drupal_get_title().
    if ($url[0] == 'admin')
        return substr($breadcrumb, 0, -6) . ' &raquo; <strong>' . drupal_get_title() . '</strong></div>';

    // Remove this line if you don't like the Home link.  You'll need to adjust
    // the code below too, to not display ">>" (&raquo;) at the start of the
    // breadcrumb
    $output .= '<a href="' . base_path() . '" title="Home"><img src="/sites/all/themes/SixConnex/images/breadcrumb-home.png" alt="Home"></a>';

    $output .= get_crumb_all();

    return $output;
}

// Extract the URL path alias from the URI
function path_alias_array() {
    $uri_request_id = $_SERVER['REQUEST_URI'];
    $urlexplode = explode("?", $uri_request_id);
    if (base_path() != '/') {
        $urlfinal = explode(base_path(), $urlexplode[0]);
        $url = explode("/", $urlfinal[1]);
    }
    else {
        $url = explode("/", $urlexplode[0]);
    }
    return $url;
}

// Get full breadcrumb
function get_crumb_all() {
    $url = path_alias_array();

    // Construct each piece of the breadcrumb
    $numbs = array_keys($url);
    foreach ($numbs as $numb) {
        $crumbs .= get_crumb($numb);
    }
    return $crumbs;
}

// Get breadcrumb piece
function get_crumb($lvl){
    $url = path_alias_array();

    // Reconstruct path alias as string
    for ($i = 0; $i < $lvl+1; $i++) {
        $urlpathalias .= $url[$i];
        if ($i != $lvl)
            $urlpathalias .= '/';
    }
    $urlpathalias = str_replace('%20', ' ', $urlpathalias);

    // If Drupal install is not in a subdir, we need to remove extra '/'
    if ($urlpathalias[0] == '/')
        $urlpathalias = substr($urlpathalias, 1);

    // If at Home, return now so we don't append the '>>'
    if ($urlpathalias == '')
        return;

    // It is assumed that all paths are URL path aliases, so if you go to a
    // page without a path alias, the breadcrumb will not display correctly
    $urlsystem = drupal_lookup_path('source', $urlpathalias);
    $urlsystemexplode = explode("/", $urlsystem);
    $urltype = $urlsystemexplode[0];

    // Uncomment this if you remove the Home crumb above
    // if ($lvl == 1)
    //     $crumbpiece = ' ';

    if ($urltype == "taxonomy") {
        $term = taxonomy_get_term($urlsystemexplode[2]);
        if ($lvl == count($url)-1) {
            // Set to '' if you don't want to display current page's title
            $crumbpiece =  $crumbpiece . ' <strong>'.$term->name.'</strong>';
        }
        else {
            $crumbpiece =  $crumbpiece . ' <a href="' . base_path() .$urlpathalias.'" title="'.$term->name.'">'.$term->name.'</a>';
        }
    }
    elseif ($urltype == "node") {
        $node = node_load($urlsystemexplode[1]);
        if ($lvl == count($url)-1) {
            // Set to '' if you don't want to display current page's title
            $crumbpiece =  $crumbpiece . ' <span class="crumb">'.$node->title.'</span>';
        }
        else {
            $crumbpiece =  $crumbpiece . '<a class="crumb" href="' . base_path() . $urlpathalias . '">'.$node->title.'</a>';
           
            //<span class="crumb">'.$node->title.'</span>';
        }
    }
    else {
        $urltitleexplode = explode("-", $url[$lvl]);
                $words = array_keys($urltitleexplode);
                // HN 09/24/2010
                foreach ($words as $word){
                        $urltitle .= ''.ucwords($urltitleexplode[$word]).' ';
                }

        if (is_numeric($urltitleexplode[count($words) - 1])) { //echo "last #: " . $urltitleexplode[count($words) - 1];
                        $node = node_load($urltitleexplode[count($words) - 1]);
                        $urltitle = $node->title;
                }

                // HN 09/24/2010
                if ($urltitle != '') {
                        if ($lvl == count($url) - 1) {
                                $crumbpiece = '<span class="crumb">' . $urltitle . '</span>';
                        }
                        else {
                                $crumbpiece =  '<a class="crumb" href="' . base_path() . $urlpathalias . '">'.$urltitle.'</a>';
                        }
                }
    }

    // Deal with underscores before returning
    $crumbpiece = str_replace('_', ' ', $crumbpiece);
    return ucwords($crumbpiece);
}