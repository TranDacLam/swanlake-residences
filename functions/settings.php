<?php
//add_action( 'admin_head', 'admin_custom_css' );
function admin_custom_css() {
	if ( wp_get_current_user()->user_login != 'vosydao' ) {
		echo '
        <style rel="stylesheet">
            #toplevel_page_wpseo_dashboard,#toplevel_page_edit-post_type-acf, #menu-tools, #menu-plugins, #menu-media, #menu-appearance, #menu-comments {
                display:none;
            }
        </style>
		';
	};
}

function vsdRenderPartial( $file_name, $params = array() ) {
	extract( $params );
	include( get_template_directory() . "/" . $file_name );
}


function vsdGetSettings(){
	$result = array();
	$page = get_page_by_path('settings');

	$list_slides = array();
	$slides = get_post_meta($page->ID,'slides',true);
	if ( ! empty( $slides ) ) {
		foreach ( $slides as $k => $g ) {
			$image_full     = wp_get_attachment_image_src( $g, 'full', true );
			if ( ! empty( $image_full[0] ) ) {
				$list_slides[ $k ] = array(
					'image_full' => $image_full[0],
				);
			}
		}
	}

	$result['slides'] = $list_slides;


	$list_partners = array();
	$partners = get_post_meta($page->ID,'partners',true);
	if ( ! empty( $partners ) ) {
		foreach ( $partners as $k => $g ) {
			$image_full     = wp_get_attachment_image_src( $g, 'full', true );
			if ( ! empty( $image_full[0] ) ) {
				$list_partners[ $k ] = array(
					'image_full' => $image_full[0],
				);
			}
		}
	}

	$logo = '';
	$logo_id = get_post_meta($page->ID,'logo',true);
	$logo_full     = wp_get_attachment_image_src( $logo_id, 'full', true );
	if ( ! empty( $logo_full[0] ) ) {
		$logo = $logo_full[0];
	}
	$result['logo'] = $logo;


	$result['partners'] = $list_partners;
	$result['shop_email'] = get_post_meta($page->ID,'shop_email',true);
	$result['shop_phone'] = get_post_meta($page->ID,'shop_phone',true);
	$result['shop_address'] = get_post_meta($page->ID,'shop_address',true);
	$result['facebook_fanpage'] = get_post_meta($page->ID,'facebook_fanpage',true);


	return $result;
}




if ( ! function_exists( 'cut_string_by_char' ) ) {

	function cut_string_by_char( $string, $max_length ) {
		if ( mb_strlen( $string, "UTF-8" ) > $max_length ) {
			$max_length_1 = $max_length - 3;
			$string       = mb_substr( $string, 0, $max_length_1, "UTF-8" );
			$pos          = strrpos( $string, " " );
			if ( $pos === false ) {
				return substr( $string, 0, $max_length_1 ) . "...";
			}

			return substr( $string, 0, $pos ) ."...";
		} else {
			return $string;
		}
	}
}



add_action( 'init', 'myStartSession', 1 );
function myStartSession() {
	if ( ! session_id() ) {
		session_start();
		if ( empty( $_SESSION['cart'] ) ) {
			$_SESSION['cart'] = array();
		}
	}
}



//add extra fields to category edit form hook
//add_action ( 'edit_category_form_fields', 'extra_category_fields');

//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
	$t_id = $tag->term_id;
	$cat_meta = get_term_meta( $t_id,"category_image",true);
	?>
	<tr class="form-field">
		<th scope="row" valign="top"><label for="cat_Image_url"><?php _e('Category Image Url'); ?></label></th>
		<td>
			<input type="text" name="category_image" id="Cat_meta[img]" size="3" style="width:60%;" value="<?php echo $cat_meta ?>"><br />
			<span class="description"><?php _e('Image for category: use full url with '); ?></span>
		</td>
	</tr>
	<?php
}


function saveCategoryFields() {
	if(!empty($_POST['category_image'])){
		update_term_meta($_POST['tag_ID'], 'category_image', $_POST['category_image']);
	}
}
//add_action ( 'edited_category', 'saveCategoryFields');



function rvn_wpseo_head() {
    $paged = get_query_var('paged');

    if (is_singular(array('page')) && $paged>1) {
        echo '<meta name="robots" content="noindex,follow"/>';
    }
}
//add_filter('wpseo_head', 'rvn_wpseo_head', 10, 1);





add_filter( 'wpseo_next_rel_link', 'wpseo_disable_rel_next_home' );

function wpseo_disable_rel_next_home( $link ) {
    if ( is_home() ) {
        return false;
    }

    return $link;
}


add_filter('term_link', 'term_link_filter', 10, 3);
function term_link_filter( $url, $term, $taxonomy ) {

    return $url . "/";

}

//function searchfilter($query) {
//    if ($query->is_search && !is_admin() ) {
//        $query->set('post_type',array('post'));
//    }
//
//    return $query;
//}

//add_filter('pre_get_posts','searchfilter');

function search_url_rewrite_rule() {
    if (( is_search() && !empty($_GET['s'])) || (is_search() && empty($_GET['s']))) {
		wp_redirect(home_url("/search-blog?keyword=") . urlencode(get_query_var('s')));
        exit();
	}

	if(isset($_GET["keyword"])){
		if ((is_singular(POST_TYPE_WHAT_NEW) && !empty($_GET['keyword'])) || (is_singular(POST_TYPE_WHAT_NEW) && empty($_GET['keyword']))){
			wp_redirect(home_url("/whats-new?apps=&keyword=") . urlencode($_GET['keyword']));
			exit();
		}
	}
}
// add_action('template_redirect', 'search_url_rewrite_rule');