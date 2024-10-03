<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="shortcut icon" href="favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header class="absolute z-20 w-full text-white font-bold top-0">
      <div class="wrapper flex w-full p-8 justify-between items-center">
        <?php
        $icon_image = get_field('icon_image', 'option');
        $customize_link = get_field('customize_link', 'option');
        if ($icon_image ||  $customize_link) { ?>
          <div class="header-left flex flex-col w-72 bg-black bg-opacity-45 items-center px-8 py-4 gap-3 ">
            <?php if ($icon_image) { ?>
              <figure class="w-4/12">
                <?php
                echo wp_get_attachment_image($icon_image, 'thumbnail', false);
                ?>
              </figure>
            <?php } ?>
            <?php if ($customize_link) { ?>
              <h1>
                <?php echo linkAttributes($customize_link, 'first-caps text-white font-bold text-2xl'); ?>
              </h1>
            <?php } ?>
          </div>
        <?php } ?>
        <nav>
          <?php wp_nav_menu(array("theme_location" => "primary-menu", "menu_class" => "nav-list flex justify-between font-bold",))
          ?>
        </nav>
      </div>
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>