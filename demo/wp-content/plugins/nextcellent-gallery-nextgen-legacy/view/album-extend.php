<?php 
/**
Template Page for the album overview (extended)

Follow variables are useable :

	$album     	 : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

<div class="ngg-albumoverview">	
	<!-- List of galleries -->
	<?php foreach ($galleries as $gallery) : ?>

	<div class="ngg-album">
					<a href="<?php echo $gallery->pagelink ?>">
				<div class="ngg-description-new">
				<?php echo $gallery->galdesc ?><br>
				<?/*php if ($gallery->counter > 0) : ?>
				<strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?>
				<?php endif; */?>
			</div>
			<div class="ngg-albumcontent" style="height: 200px;">
				<div class="ngg-thumbnail-new" style="background: url(<?php echo get_site_url().'/'.$gallery->path.'/'.$gallery->previewname?>) center top no-repeat; background-size: 700px; height: 200px;"></div>
<?/*
					<a href="<?php echo $gallery->pagelink ?>"><img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/></a>
*/?>

		</div>
	</div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>