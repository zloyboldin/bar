<?php 
/**
Template Page for the album overview (extended-food)

Follow variables are useable :

  $album        : Contain information about the album
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
      </div>
  </div>

   <?php endforeach; ?>
   
</div>

<?php endif; ?>