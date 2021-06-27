<?php get_header();
$limit = get_query_var('posts_per_page');
$page = get_query_var("paged", 1);
if (empty($page)) {
    $page = 1;
}
$list_article = array();

$params = array(
    "paged" => $page,
    "posts_per_page" => $limit,
    "is_paging" => 1,
    "s" => $s,
);

$catId = null;
if (!empty($_GET['category'])) {
    $catId = $_GET['category'];
    $params['cat'] = $_GET['category'];
}

$listPost = vsdGetListPost($params);
?>
<?php vsdRenderPartial('includes/blog-banner-top.php'); ?>

<?php if ($listPost['data']) { ?>
    <section class="o-content-block pt-3 pb-5">
        <div class="container">

            <?php vsdRenderPartial('includes/search-nav.php',compact('listPost','catId')); ?>

            <div class="row row-cols-1 row-cols-md-3 js-ctn-categories">
                <?php
                foreach ($listPost['data'] as $k => $v) {
                    vsdRenderPartial('includes/blog.php', ['blog' => $v, 'type' => 'category']);
                }
                ?>

            </div>
            <div class="m-more">
<!--                    --><?php //if ($listPost['total'] > count($listPost['data'])) {
//                    $newParams = $params;
//                    $newParams['paged'] = $page + 1;
//                    ?>
<!--                    <button class="btn a-btn-white a-btn js-button-viewmore-categories"-->
<!--                            type="button"-->
<!--                            data-pagination='--><?php //echo json_encode($newParams) ?><!--'-->
<!--                    >-->
<!--                        View more-->
<!--                    </button>-->
<!--                --><?php //} ?>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
                </div>
        </div>
    </section>
<?php } else {
    if(!empty($catId)){
        vsdRenderPartial('includes/search-filter-no-result.php');
    }else{
        vsdRenderPartial('includes/search-no-result.php');
    }

} ?>

<?php get_footer() ?>
