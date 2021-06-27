<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 10/15/18
 * Time: 20:54
 */


function vsdGetListTerms($taxonomy = 'category', $parent = 0, $limit = 100)
{
    $list = get_terms(
        array(
            'parent' => $parent,
            'hide_empty' => false,
            'taxonomy' => $taxonomy,
            'orderby' => 'term_order',
            'number' => $limit,
        )
    );

    if (!empty($list)) {
        foreach ($list as &$v) {
            $v->term_link = get_term_link($v, $taxonomy);
            $v->category_image = get_term_meta($v->term_id, 'category_image', true);
        }
    }

    return $list;
}

function vsdGetListTermsExclude($taxonomy = 'category', $exclude, $parent = 0, $limit = 100)
{
    $list = get_terms(
        array(
            'parent' => $parent,
            'hide_empty' => false,
            'taxonomy' => $taxonomy,
            'orderby' => 'term_order',
            'number' => $limit,
            'exclude' => $exclude,
        )
    );

    if (!empty($list)) {
        foreach ($list as &$v) {
            $v->term_link = get_term_link($v, $taxonomy);
            $v->category_image = get_term_meta($v->term_id, 'category_image', true);
        }
    }

    return $list;
}


function vsdGetListPost($args = array())
{
    $args_default = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 20,
        'paged' => 1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'is_paging' => false,
    );

    $args = array_merge($args_default, $args);
    $query = new \WP_Query($args);
    //	var_dump($query->request);
    $data = $query->posts;
    $total = $query->found_posts;

    if ($data) {
        foreach ($data as $val) {
            $val = vsdPostInfo($val);
        }
    }

    $result = array(
        'data' => $data,
        'total' => $total,
    );

    if ($args['is_paging']) {
        global $wp_query;
        $wp_query->posts = $data;
        $wp_query->is_paged = ($args['paged'] >= 1) ? true : false;
        $wp_query->found_posts = $total;
        $wp_query->max_num_pages = ceil($total / $args['posts_per_page']);
    }

    return $result;
}


function vsdPostInfo($p)
{
    if (is_numeric($p)) {
        $p = get_post($p);
    }

    $permalink = get_permalink($p);
    $p->permalink = $permalink;
    $p->read_time = vsdReadingTime($p->ID);

    $p->images = vsdGetPostImages($p->ID, array('thumbnail', 'featured', 'full'));

    if (empty($p->post_excerpt)) {
        $p->post_excerpt = cut_string_by_char(strip_tags($p->post_content), 115);
    } else {
        $p->post_excerpt = cut_string_by_char(strip_tags($p->post_excerpt), 115);
    }

    if ($p->post_type == 'post') {
    }

    return $p;
}


function vsdGetPostImages($post_id, $arr_size)
{
    $images = array();
    $arr_size = (array)$arr_size;
    $thumbnail_id = get_post_thumbnail_id($post_id);
    foreach ($arr_size as $size) {
        $obj_image = wp_get_attachment_image_src($thumbnail_id, $size, true);
        $size = str_replace('-', '_', $size);
        $images[$size] = $obj_image[0];
    }

    return (object)$images;
}


function vsdReadingTime($postId)
{
    $content = get_post_field('post_content', $postId);
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);
    // if ($readingtime == 1) {
    //     $timer = " minute";
    // } else {
    //     $timer = " minutes";
    // }
    $totalreadingtime = $readingtime . ' min read';

    return $totalreadingtime;
}


/**
 * ajax
 *
 */
function ajaxCatViewMore()
{
    $data = $_GET;
    $result = [
        'status' => 'error',
    ];
    $html = '';
    if (!empty($data['pagination'])) {
        $params = ($data['pagination']);

        $posts = vsdGetListPost($params);
        if (!empty($posts['data'])) {
            foreach ($posts['data'] as $blog) {
                $html .= '
                <div class="col mb-5">
    <article class="m-article">
        <figure class="has-zoomOut custom-resize">
    <a class="d-block rounded overflow-hidden" href="' . $blog->permalink . '">
        <img src="' . $blog->images->featured . '" class="w-100" alt="' . esc_attr($blog->post_title) . '">
    </a>
</figure>
<div class="card-body p-0">
    <p class="a-text-small text-uppercase mb-1">
        <time>
            ' . date('M d, Y', strtotime($blog->post_date)) . '        </time>
      
        <i class="fas fa-circle" aria-hidden="true"></i>
        <span> ' . $blog->read_time . ' read</span>
    </p>
    <h4 class="card-title mb-3 font-weight-bold">
        <a href="' . $blog->permalink . '" title="' . esc_attr($blog->post_title) . '">
            ' . ($blog->post_title) . '
        </a>
    </h4>
    <p class="card-text">
' . esc_attr($blog->post_excerpt) . '
    </p>
    <p class="mb-0"> <a class="a-link-more underlineltr" href="' . $blog->permalink . '">READ MORE<i class="fal fa-arrow-right"></i></a></p>
</div>

    </article>
</div>
                ';
            }

            $newPagination = null;
            if (count($posts['data']) >= $params['posts_per_page'] && $params['paged'] * $params['posts_per_page'] < $posts['total']) {
                $newPagination = $params;
                $newPagination['paged'] = $params['paged'] + 1;
            }
            $result = [
                'status' => 'success',
                'html' => $html,
                'newPagination' => json_encode($newPagination),
            ];
        }
    }

    echo json_encode($result);
    exit();
}

add_action("wp_ajax_ajaxCatViewMore", 'ajaxCatViewMore');
add_action("wp_ajax_nopriv_ajaxCatViewMore", 'ajaxCatViewMore');

function ajaxWhatNewReaction()
{
    $result = [
        'status' => 'error',
    ];
    $data = $_POST;
    if (!empty($data['id']) && !empty($data['reaction'])) {
        $reaction = $data['reaction'];
        $postId = $data['id'];
        $oldReaction = !empty($_COOKIE['fa_reaction_v2_' . $postId]) ? $_COOKIE['fa_reaction_v2_' . $postId] : '';

        if ($reaction == $oldReaction) {
            $result = [
                'status' => 'success',
            ];
        } else {
            $count = 1;
            switch ($reaction) {
                case 'unhappy':
                    $key = 'reaction_unhappy';
                    break;
                case 'neutral':
                    $key = 'reaction_neutral';
                    break;
                case 'happy':
                    $key = 'reaction_happy';
                    break;
            }
            $reactionData = get_post_meta($postId, $key, true);
            if (!empty($reactionData)) {
                $count = (int)$reactionData + 1;
            }

            if (!empty($oldReaction)) {
                $keyOld = 'reaction_' . $oldReaction;
                $oldReactionData = get_post_meta($postId, $keyOld, true);
                $countOld = 0;
                if (!empty($oldReactionData)) {
                    $countOld = $oldReactionData - 1;
                }
                update_post_meta($postId, $keyOld, $countOld);
            }

            $save = update_post_meta($postId, $key, $count);
            if ($save) {
                $result = [
                    'status' => 'success',
                    //                    '$keyOld' => $keyOld,
                    //                    '$countOld' => $countOld,
                ];
            }
        }
    }

    echo json_encode($result);
    exit();
}

add_action("wp_ajax_ajaxWhatNewReaction", 'ajaxWhatNewReaction');
add_action("wp_ajax_nopriv_ajaxWhatNewReaction", 'ajaxWhatNewReaction');


// ADD NEW COLUMN
function ST4_columns_head($defaults)
{
    $defaults['reaction'] = 'Reaction';

    return $defaults;
}

// SHOW THE FEATURED IMAGE
function ST4_columns_content($column_name, $post_ID)
{
    $reactionUnHappy = get_post_meta($post_ID, 'reaction_unhappy', true);
    $reactionNeutral = get_post_meta($post_ID, 'reaction_neutral', true);
    $reactionHappy = get_post_meta($post_ID, 'reaction_happy', true);
    $total = (int)$reactionUnHappy + (int)$reactionNeutral + (int)$reactionHappy;

    if ($column_name == 'reaction') {
        $reactionUnHappyPercent = 0;
        $reactionNeutralPercent = 0;
        $reactionHappyPercent = 0;
        if (!empty($total) || $total > 0) {
            $reactionUnHappyPercent = round(((int)$reactionUnHappy / $total) * 100);
            $reactionNeutralPercent = round(((int)$reactionNeutral / $total) * 100);
            $reactionHappyPercent = round(((int)$reactionHappy / $total) * 100);
        }

        echo '<div style="display: flex">';

        echo '<div style="display: flex; align-items: center">' . $reactionUnHappyPercent . '% <img src="' . SITE_URL . '/wp-content/themes/fireapps-website-v2/assets/img/icons/icon-unhappy.svg" style="width: 30px; margin-left: 3px"> &nbsp;&nbsp;&nbsp;&nbsp;</div> ';

        echo '<div style="display: flex; align-items: center">' . $reactionNeutralPercent . '% <img src="' . SITE_URL . '/wp-content/themes/fireapps-website-v2/assets/img/icons/icon-neutral.svg" style="width: 30px; margin-left: 3px"> &nbsp;&nbsp;&nbsp;&nbsp;</div> ';

        echo '<div style="display: flex; align-items: center">' . $reactionHappyPercent . '% <img src="' . SITE_URL . '/wp-content/themes/fireapps-website-v2/assets/img/icons/icon-happy.svg" style="width: 30px; margin-left: 3px"> &nbsp;&nbsp;&nbsp;&nbsp;</div> ';

        echo '</div>';
    }

    if ($column_name == 'reaction_total') {
        echo $total . ' ';
    }
}

add_filter('manage_whats_new_posts_columns', 'ST4_columns_head');
add_action('manage_whats_new_posts_custom_column', 'ST4_columns_content', 10, 2);


function ST4_columns_head_total($defaults)
{
    $defaults['reaction_total'] = 'Total Reaction';

    return $defaults;
}

add_filter('manage_whats_new_posts_columns', 'ST4_columns_head_total');


function ajaxRegister()
{
    $data = $_POST;
    $result = [
        'status' => 'error',
        'message' => 'Có lỗi xảy ra, vui lòng thử lại.',
    ];
    if (!empty($data['c_name']) && !empty($data['c_email']) && !empty($data['c_phone'])) {

        $create = wp_insert_post([
            'post_type'   => 'c_contact',
            'post_status' => 'pending',
            'post_title'  => 'Liên hệ từ ' . $data['name'] . ' - ' . $data['c_email'] . ' - ' . $data['c_phone'],
        ]);
        if (!empty($create)) {
            $address = !empty($data['c_address']) ? $data['c_address'] : '';
            $source = !empty($data['c_source']) ? $data['c_source'] : '';

            add_post_meta($create, 'c_name', $data['c_name']);
            add_post_meta($create, 'c_email', $data['c_email']);
            add_post_meta($create, 'c_phone', $data['c_phone']);
            add_post_meta($create, 'c_address', $address);
            add_post_meta($create, 'c_source', $source);

            $message = '
            Thông tin liên hệ từ landing page : ' . SITE_URL . '<br><br>
            Họ và tên : ' . $data['c_name'] . '<br>
            Email : ' . $data['c_email'] . '<br>
            Số điện thoại : ' . $data['c_phone'] . '<br>
            Địa chỉ : ' . $address . '<br>
            Nguồn : ' . $source . '<br>
            ';
            // $message = 'test';

            //vylht@ecopark.com.vn
            $emails = [
                'quanlytaikhoandxmn@gmail.com'
            ];
            foreach ($emails as $email) {
                $sentMail = wp_mail($email, '[Garden Riverside LandingPage] - Liên hệ mới', $message, ['Content-Type: text/html; charset=UTF-8']);
            }

            $result = [
                'status' => 'success',
                'message' => 'Đăng ký thành công. Chúng tôi sẽ liên hệ với quý khách trong vòng 24h làm việc. Xin chân thành cảm ơn.',
            ];
        }
    }

    echo json_encode($result);
    exit();
}

add_action("wp_ajax_ajaxRegister", 'ajaxRegister');
add_action("wp_ajax_nopriv_ajaxRegister", 'ajaxRegister');
