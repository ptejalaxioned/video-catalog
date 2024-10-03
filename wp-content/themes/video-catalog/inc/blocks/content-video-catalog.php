<?php
$heading = get_field('heading');
$category_heading = get_field('category_heading');
$categories = get_field('categories');
$search_input_placeholder = get_field('search_input_placeholder');
$video_list = get_field('video_list');
$pages = get_field('pages');
$previous_arrow = get_field('previous_arrow');
$next_arrow = get_field('next_arrow');
?>
<!--video-catalog section starts-->
<section class="video-catalog mt-20 mb-14">
  <div class="wrapper">
    <h2 class="first-caps text-gray-600 text-3xl"><?php echo $heading ?></h2>
    <div class="filter flex justify-between items-center">
      <div class="categories flex items-center gap-4 text-skyblue text-xl mb-14 mt-7">
        <h3 class="first-caps"><?php echo $category_heading ?></h3>
        <?php if ($categories) { ?>
          <ul class="categories-list">
            <li>
              <a href="#FIXME" class="first-caps all p-4 border-b-2 border-b-solid border-b-skyblue">all</a>
            </li>
            <?php foreach ($categories as $category) {
              $term = get_term($category);
              $term_name = $term->name;
              $term_slug = $term->slug;
            ?>
              <li>
                <a href="#FIXME" class="first-caps <?php echo  $term_slug ?> p-4 border-b-2 border-b-solid border-b-skyblue" target="self" title="<?php echo  $term_name ?>"><?php echo  $term_name ?></a>
              </li>
            <?php } ?>
          </ul>
        <?php } ?>
      </div>
      <div class="search-div  w-3/12 py-8">
        <input type="text" class="search-name w-full h-8 p-5 text-xl border border-gray-500 rounded-md" placeholder="<?php echo $search_input_placeholder ?>" />
      </div>
    </div>
    <?php if ($video_list) { ?>
      <ul class="video-list flex flex-wrap gap-6">
        <?php
        foreach ($video_list as $video) {
          $video_image = $video['image'];
          $video_name = $video['name'];
          $video_paragraph = $video['paragraph'];
        ?>
          <li class="video w-cardwidth bg-graywhite">
            <div class="video-list-up relative">
              <figure class="h-full object-cover">
                <?php
                echo wp_get_attachment_image($video_image, [339, 191], false);
                ?>
              </figure>
              <span class="pause flex ">pause</span>
            </div>
            <div class="video-list-down px-5 pb-8 flex flex-col gap-3">
              <h4 class="single-caps text-skyblue text-2xl"><?php echo $video_name ?></h4>
              <p class="single-caps leading-loose text-gray-900 text-sm">
                <?php echo $video_paragraph ?>
              </p>
            </div>
          </li>
        <?php } ?>
      </ul>
    <?php } ?>
    <div class="pagination flex gap-3 items-center my-6 text-gray-900">
      <div class="page hidden"><a href="#FIXME" target="_self" class="page-link w-12 h-12 flex items-center justify-center bg-graywhite" title="Previous Arrow"><?php echo wp_get_attachment_image($previous_arrow, 'thumbnail', false); ?>
        </a>
      </div>
      <?php if ($pages) { ?>
        <ul class="categories-list">
          <?php foreach ($pages as $page) {
            $page_number = $page['page_number'];
          ?>
            <li class="page"><a href="#FIXME" target="_self" class="page-link w-12 h-12 flex items-center justify-center bg-graywhite text-gray-900" title="<?php echo $page_number ?>"><?php echo $page_number ?></a></li>
          <?php } ?>
        </ul>
      <?php } ?>
      <div class="page"><a href="#FIXME" target="_self" class="page-link w-12 h-12 flex items-center justify-center bg-graywhite" title="Next Arrow">
          <?php
          echo wp_get_attachment_image($next_arrow, 'thumbnail', false);
          ?>
        </a>
      </div>
    </div>

  </div>
</section>
<!--video-catalog section ends-->