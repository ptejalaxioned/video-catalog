<?php
$background_video = get_field('background_video');
$banner_paragraph = get_field('banner_paragraph');
$customize_link = get_field('customize_link');
?>
<?php if ($background_video || $banner_paragraph || $customize_link) { ?>
  <!--banner section start-->
  <section class="banner relative text-white">
    <div class="wrapper w-full">
      <?php if ($background_video) { ?>
        <figure>
          <video src="<?php echo esc_url($background_video); ?>" title="Banner Video" autoplay loop muted>Your browser
            does not support the video tag.</video>
        </figure>
        <?php if ($banner_paragraph || $customize_link) { ?>
          <div class="banner-content absolute z-30 transform -translate-x-1/2 -translate-y-1/2 bottom-1/4 left-1/2 w-5/12 flex flex-col gap-8">
            <?php if ($banner_paragraph) { ?>
              <p class="single-caps text-2xl text-center leading-normal">
                <?php echo $banner_paragraph ?>
              </p>
            <?php } ?>
            <?php if ($customize_link) { ?>
              <div class="banner-button flex justify-center">
                <?php echo linkAttributes($customize_link, 'first-caps bg-black bg-opacity-45 px-14 py-4 rounded-md font-bold text-xl'); ?>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </section>
  <!--banner section end-->
<?php } ?>