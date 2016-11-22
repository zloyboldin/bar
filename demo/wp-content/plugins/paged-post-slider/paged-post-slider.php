<?php
/*
Plugin Name: Paged Post Slider
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Automagically turns multi-page posts into an ajax-based slideshow. Simply activate, choose the display options for your slider, and go! For best results, please be sure that the single.php file in your theme does <strong>not</strong> contain the <em>wp_link_pages</em> tag.
Version: 1.3
Author: Josiah Spence
Author URI: josiahspence.com
License: WTFPL
*/

function GetBetween($content,$start,$end){ $r = explode($start, $content); if (isset($r[1])){ $r = explode($end, $r[1]); return $r[0]; } return '';} 


  //Enqueue Scripts and Styles
function paged_post_scripts() {
  if(is_single() || is_page() ){
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-paged-post',plugins_url( 'paged-post.js' , __FILE__ ), 'jquery', '', true);
    if(get_option( 'pps_style_sheet')){
      wp_enqueue_style('paged-post-style',plugins_url( 'paged-post.css' , __FILE__ ));
    }
  }
}

add_action( 'wp_enqueue_scripts', 'paged_post_scripts' ); // wp_enqueue_scripts action hook to link only on the front-end

//Add NextPage Button to TinyMCE
function paged_post_tinymce($mce_buttons) {
  $pos = array_search('wp_more', $mce_buttons, true);
  if ($pos !== false) {
    $buttons = array_slice($mce_buttons, 0, $pos + 1);

    $buttons[] = 'wp_page';

    $mce_buttons = array_merge($buttons, array_slice($mce_buttons, $pos + 1));
  }
  return $mce_buttons;
}

add_filter('mce_buttons', 'paged_post_tinymce');

$dir = explode("/", $_SERVER[REQUEST_URI]);


  $my_id = 9;
$post_id_9 = get_post($my_id);
  $content_9 = $post_id_9->post_content;
  //$content_9 = apply_filters('the_content', $content_9);
  //$content = str_replace(']]>', ']]>', $content);
//  echo $content_9;

$qwe = GetBetween($content_9 , '[', ']');
//echo "!".$qwe;

if($dir[1]=="kitchen"){
  $posts = get_posts("category__in=13&posts_per_page=-1&orderby=menu_order&order=ASC");
  foreach($posts as $pst){
        $namePages[] = $pst->post_title;
  }
}

if($dir[1]=="bar"){
  $posts = get_posts("category__in=14&posts_per_page=-1&orderby=menu_order&order=ASC");
  foreach($posts as $pst){
        $namePages[] = $pst->post_title;
  }
}

if($dir[1]=="hookah"){
  $posts = get_posts("category__in=18&posts_per_page=-1&orderby=menu_order&order=ASC");
  foreach($posts as $pst){
        $namePages[] = $pst->post_title;
  }
}



//Set defaults to wp_link_pages
function paged_post_link_pages($r) {
  global $multipage, $numpages, $page, $namePages;

  $args = array(
    'before'      => '',
    'after'        => '',
    'next_or_number'  => 'next',
    'nextpagelink'    => __('<span class="pps-next">'.$namePages[$page].'</span>'),
    'previouspagelink'  => __('<span class="pps-prev">'.$namePages[$page-2].'</span>'),
    'echo' => 0
    );
    return wp_parse_args($args, $r);
 
}
add_filter('wp_link_pages_args','paged_post_link_pages');

// Add wrapper and nav to the_content
function paged_post_the_content_filter( $content ) {

//$innerCode = GetBetween($content , '{', '}');
//$innerCodeParts = explode(';', $innerCode);


  global $multipage, $numpages, $page, $namePages;

  if($multipage){
    $sliderclass = 'pagination-slider';
//    $slidecount = '<span class="pps-slide-count">'.$page.' of '.$numpages.'</span>';
  $slidecount = '<span class="pps-slide-count">'.$namePages[$page-1].'</span>';
//    $slidecount = '<span class="pps-slide-count">'.$innerCodeParts[$page-1].'</span>';


    if($page == $numpages){
      $slideclass = 'pps-last-slide';
    } elseif ($page == 1){
      $slideclass = 'pps-first-slide';
    } else{
      $slideclass = 'pps-middle-slide';
    }
  }

  if ( (is_single() && $multipage) || (is_page() && $multipage) ){
    $ppscontent = '<div class="pps-wrap-content"><div class="pps-the-content '.$slideclass.'">';

    if((get_option( 'pps_nav_position' ) == 'top')||(get_option( 'pps_nav_position' ) == 'both')){
      $ppscontent .= '<nav class="pps-slider-nav pps-clearfix">';
      $ppscontent .= wp_link_pages();
      
      if((get_option( 'pps_count_position' ) == 'top')||(get_option( 'pps_count_position' ) == 'both')){
        $ppscontent .= $slidecount;
      }

      $ppscontent .= '</nav>';
    }

    if(((get_option( 'pps_count_position' ) == 'top')||(get_option( 'pps_count_position' ) == 'both')) && ((get_option( 'pps_nav_position' ) != 'top')&&(get_option( 'pps_nav_position' ) != 'both'))){
        $ppscontent .= $slidecount;
    }

    $ppscontent .= '<div class="pps-content pps-clearfix">'.$content.'</div>';

    if((get_option( 'pps_nav_position' ) == 'bottom')||(get_option( 'pps_nav_position' ) == 'both')){
      $ppscontent .= '<nav class="pps-slider-nav pps-clearfix">';
      $ppscontent .= wp_link_pages();
      
      if((get_option( 'pps_count_position' ) == 'bottom')||(get_option( 'pps_count_position' ) == 'both')){
        $ppscontent .= $slidecount;
      }

      $ppscontent .= '</nav>';
    }

    if(((get_option( 'pps_count_position' ) == 'bottom')||(get_option( 'pps_count_position' ) == 'both')) && ((get_option( 'pps_nav_position' ) != 'bottom')&&(get_option( 'pps_nav_position' ) != 'both'))){
        $ppscontent .= $slidecount;
      }

    $ppscontent .= '</div></div>';
  } else {
    $ppscontent .= $content;
    }
  // Returns the content.
  return $ppscontent;
}

add_filter( 'the_content', 'paged_post_the_content_filter' );

//Plugin Settings Page
//First use the add_action to add onto the WordPress menu.
add_action('admin_menu', 'pps_add_options');
//Make our function to call the WordPress function to add to the correct menu.
function pps_add_options() {
  add_options_page('Paged Post Slider Options', 'Paged Post Slider', 8, 'ppsoptions', 'pps_options_page');  
}

function pps_options_page() {
  // variables for the field and option names 
  $opt_name = array('nav_position' =>'pps_nav_position',
          'count_position' => 'pps_count_position',
          'style_sheet' => 'pps_style_sheet');
  $hidden_field_name = 'pps_submit_hidden';

  // Read in existing option value from database
  $opt_val = array('nav_position' => get_option( $opt_name['nav_position'] ),
        'count_position' => get_option( $opt_name['count_position'] ),
        'style_sheet' => get_option( $opt_name['style_sheet'] ));

  // See if the user has posted us some information
  // If they did, this hidden field will be set to 'Y'
  if(isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
    // Read their posted value
    $opt_val = array('nav_position' => $_POST[ $opt_name['nav_position'] ],
          'count_position' => $_POST[ $opt_name['count_position'] ],
          'style_sheet' => $_POST[ $opt_name['style_sheet'] ]);

    // Save the posted value in the database
    update_option( $opt_name['nav_position'], $opt_val['nav_position'] );
    update_option( $opt_name['count_position'], $opt_val['count_position'] );
    update_option( $opt_name['style_sheet'], $opt_val['style_sheet'] );

    // Put an options updated message on the screen
    ?>
    <div id="message" class="updated fade">
      <p><strong>
        <?php _e('Options saved.', 'pps_trans_domain' ); ?>
      </strong></p>
    </div>
  <?php
    }
  ?>

  <div class="wrap">
    <h2><?php _e( 'Paged Post Slider Options', 'pps_trans_domain' ); ?></h2>

    <form name="pps_img_options" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
      <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">
      
      <table class="form-table">
        <tbody>

          <tr valign="top">
            <th scope="row">
              <label for="<?php echo $opt_name['nav_position']; ?>">Slider Navigation Position:</label>
            </th>
            <td>
              <select name="<?php echo $opt_name['nav_position']; ?>">
                <option value="top" <?php echo ($opt_val['nav_position'] == "top") ? 'selected="selected"' : ''; ?> >Top</option>
                <option value="bottom" <?php echo ($opt_val['nav_position'] == "bottom") ? 'selected="selected"' : ''; ?> >Bottom</option>
                <option value="both" <?php echo ($opt_val['nav_position'] == "both") ? 'selected="selected"' : ''; ?> >Both</option>
              </select>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row">
              <label for="<?php echo $opt_name['count_position']?>">Slider Count (e.g. "2 of 4") Position:</label>
            </th>
            <td>
              <select name="<?php echo $opt_name['count_position']; ?>">
                <option value="top" <?php echo ($opt_val['count_position'] == "top") ? 'selected="selected"' : ''; ?> >Top</option>
                <option value="bottom" <?php echo ($opt_val['count_position'] == "bottom") ? 'selected="selected"' : ''; ?> >Bottom</option>
                <option value="both" <?php echo ($opt_val['count_position'] == "both") ? 'selected="selected"' : ''; ?> >Both</option>
                <option value="none" <?php echo ($opt_val['count_position'] == "none") ? 'selected="selected"' : ''; ?> >Do Not Display</option>
              </select>
            </td>
          </tr>

          <tr valign="top">
            <th scope="row">
              <label for="<?php echo $opt_name['style_sheet']?>">Use Style Sheet?</label>
            </th>
            <td>
                <input name="<?php echo $opt_name['style_sheet']; ?>" type="checkbox" value="1" <?php checked( '1', $opt_val['style_sheet'] ); ?> /> If unchecked, no styles will be added.
            </td>
          </tr>

        </tbody>
      </table>

      <p>
        <input type="submit" class="button button-primary" value="Save Settings">
      </p>

    </form>


<?php }

//Add Settings Link To Plugins Page
function pps_plugin_meta($links, $file) {
  $plugin = plugin_basename(__FILE__);
  // create link
  if ($file == $plugin) {
    return array_merge(
      $links,
      array( sprintf( '<a href="options-general.php?page=ppsoptions">Settings</a>', $plugin, __('Settings') ) )
    );
  }
  return $links;
}

add_filter( 'plugin_row_meta', 'pps_plugin_meta', 10, 2 );
?>