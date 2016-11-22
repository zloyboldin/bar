<?php
/***
Template Page for the gallery-drink overview

Follow variables are useable :

$gallery     : Contain all about the gallery
$images      : Contain all images, path, title
$pagination  : Contain the pagination content

You can check the content when you insert the tag <?php var_dump($variable) ?>
If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
 **/
?>
<?php
$posts_kitchen = get_posts("category__in=14&posts_per_page=-1&orderby=menu_order&order=ASC");
$curr_page = (get_query_var('page')) ? get_query_var('page') : 1;
?>
<div class="new-menu-wrap">
    <div class="new-active-page">
        <span class="new-menu-link main"><?php echo $posts_kitchen[$curr_page-1]->post_title?><i class="fa fa-sort-desc"></i><i class="fa fa-sort-asc"></i></span>
        <div class="new-menu-chooser">
            <?php
            $count = 1;
            foreach($posts_kitchen as $pst){
                if ($count != $curr_page) {
                    echo '<a class="new-menu-link" href="'.get_the_permalink().$count.'">'.$pst->post_title.'</a>';
                } else {
                    echo '<span class="new-menu-link active">'.$pst->post_title.'</span>';
                }
                $count++;
            }
            ?>
        </div>
    </div>
</div>
<script>
    jQuery('.new-menu-link.main').on('click', function(){
        jQuery('.new-menu-chooser').toggleClass('active');
        jQuery(this).toggleClass('opened');
    });
</script>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) { ?>
    <div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>">
        <div class="new-drink clearfix">
            <?php foreach ($images as $image) { ?>
                <div class="new-drink-wrap">
                    <div class="new-drink-img-wrap">
                        <img src="<?php echo $image->imageURL ?>" class="<?php echo ($image->meta_data['height'] / $image->meta_data['width']) > 1.5 ? 'landscape' : 'portrait'; ?>"/>
                    </div>
                    <div class="new-drink-desc">
                        <div class="new-drink-desc-price"><?php echo $image->ngg_custom_fields['price']?></div>
                        <div class="new-drink-desc-title"><?php echo $image->alttext?></div>
                        <div class="new-drink-desc-weight"><?php echo $image->ngg_custom_fields['ingredients']?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php echo $pagination ?>
<?php } ?>