<?php
$footer_left_heading = get_field('footer_left_heading', 'option');
$footer_left_paragraph = get_field('footer_left_paragraph', 'option');
$footer_input_placeholder = get_field('footer_input_placeholder', 'option');
$subscribe_button_text = get_field('subscribe_button_text', 'option');
$footer_list = get_field('footer_list', 'option');
$copyright_text = get_field('copyright_text', 'option');
?>
</main>
<!--main section end-->
<!--footer section start-->
<footer class="pb-9">
  <div class="wrapper">
    <div class="footer-up flex gap-5">
      <div class="footer-left footer-div w-9/12 flex flex-col">
        <h4 class="first-caps"><?php echo $footer_left_heading ?></h4>
        <p class="single-caps common-text">
          <?php echo $footer_left_paragraph ?>
        </p>
        <div class="subscribe-email my-10 flex justify-between">
          <div class="email-button w-full">
            <input type="email" placeholder="<?php echo $footer_input_placeholder ?>" class="border border-gray-400 p-2 w-11/12" />
          </div>
          <button type="submit" class="first-caps px-7 py-2 bg-skyblue text-white"><?php echo $subscribe_button_text ?></button>
        </div>
      </div>
      <?php if ($footer_list) { ?>
        <?php foreach ($footer_list as $list) {
          $heading = $list['heading'];
          $link_list = $list['link_list']; ?>
          <div class="footer-center footer-list-div footer-div w-4/12">
            <h4 class="first-caps"><?php echo $heading ?>
            </h4>
            <ul class="quick-link footer-list flex flex-col gap-2">
              <?php foreach ($link_list  as $link) {
                $link_url = $link['links']['url'];
                $link_title = $link['links']['title'];
              ?>
                <li>
                  <a href="<?php echo $link_url; ?>" target="_self" title="<?php echo $link_title; ?>" class="single-caps common-text"> <?php echo $link_title; ?></a>
                </li>
              <?php } ?>
            </ul>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
    <div class="footer-down pt-20">
      <span class="first-caps flex justify-end text-sm text-gray-900">
        <?php echo $copyright_text ?>
      </span>
    </div>
  </div>
</footer>
<!--footer section end-->
</div>
<!--container end-->
<?php wp_footer(); ?>
</body>

</html>