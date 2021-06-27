<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 4/7/18
 * Time: 11:55
 */
get_header();

$catId = get_query_var('cat');
$currentCategory = get_term($catId);
$limit = get_query_var('posts_per_page');
$page = get_query_var("paged", 1);
if (empty($page)) {
    $page = 1;
}

$featuredBlogs = vsdGetListPost([
    "cat" => $catId,
    "posts_per_page" => 1,
]);

$featuredBlog = !empty($featuredBlogs['data']) ? array_shift($featuredBlogs['data']) : null;

$params = array(
    "paged" => $page,
    "cat" => $catId,
    "is_paging" => 1,
    "posts_per_page" => $limit,
    "post__not_in" => [$featuredBlog->ID],
);

$listPost = vsdGetListPost($params);
?>
<!--Banner TOP-->
<?php vsdRenderPartial('includes/blog-banner-top.php'); ?>


<section class="o-content-block h-style">
    <div class="container">
        <h4 class="a-title-h2 a-title mb-4 mb-md-5"><?php echo $currentCategory->name ?></h4>

        <?php if (!empty($featuredBlog)) { ?>

            <article class="row row-cols-1 row-cols-md-2 m-article mb-5 align-items-center">
                <div class="col mb-0">
                    <figure class="has-zoomOut mb-0">
                    <a class="d-block rounded overflow-hidden" href="<?php echo $featuredBlog->permalink ?>">
                        <img src="<?php echo $featuredBlog->images->featured ?>"
                             class="w-100"
                             alt="<?php echo esc_attr($featuredBlog->post_title) ?>">
                    </a>
                    </figure>
                </div>
                <div class="card-body col py-md-0">
                    <?php $category_detail=get_the_category($featuredBlog->ID);?>
                    <a class="a-link-category text-uppercase mb-3">
                        <?php echo $category_detail[0]->cat_name;?>
                    </a>
                    <h4 class="card-title mb-3 font-weight-bold">
                        <a href="<?php echo $featuredBlog->permalink ?>"
                           title="<?php echo esc_attr($featuredBlog->post_title) ?>">
                            <?php echo $featuredBlog->post_title ?>
                        </a>
                    </h4>
                    <p class="a-text-small mb-3">
                        <time>
                            <?php echo date('M d, Y', strtotime($featuredBlog->post_date)) ?>
                        </time><i class="fas fa-circle"></i>
                        <span> 
                            <?php echo $featuredBlog->read_time?></span>
                    </p>
                    <p class="card-text">
                        <?php echo $featuredBlog->post_excerpt ?>
                    </p>
                    <p class="mb-0"> <a class="a-link-more underlineltr" href="<?php echo $featuredBlog->permalink ?>">READ MORE<i class="fal fa-arrow-right"></i></a></p>
                </div>
            </article>
        <?php } ?>
    </div>
</section>

<section class="o-content-block pt-3">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 js-ctn-categories">
            <?php if (!empty($listPost['data'])) {
                foreach ($listPost['data'] as $blog) {
                    vsdRenderPartial('includes/blog.php',  ['blog' => $blog, 'type' => 'category']);
                }
            } ?>
        </div>
        <div class="m-more">
<!--            --><?php //if ($listPost['total'] > count($listPost['data'])) {
//            	$newParams = $params;
//            	$newParams['paged'] = $page + 1;
//            	?>
<!--                <button class="btn a-btn-white a-btn js-button-viewmore-categories"-->
<!--                        type="button"-->
<!--                        data-pagination='--><?php //echo json_encode($newParams) ?><!--'-->
<!--                >-->
<!--                    View more-->
<!--                </button>-->
<!--            --><?php //} ?>

            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>
        </div>

    </div>
</section>


<?php get_footer() ?>
