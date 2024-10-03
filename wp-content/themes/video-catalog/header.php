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
        <div class="header-left flex flex-col w-72 bg-black bg-opacity-45 items-center px-8 py-4 gap-3 ">
          <?php 
          $icon_image = get_field('icon_image' ,'option');
          $icon_image_url=  $icon_image['url'];
          $icon_image_alt=  $icon_image['alt'];
          $customize_link = get_field('customize_link','option');
          $customize_link_title = $customize_link['title']
          ?>
          <figure class="w-4/12">
            <img src="<?php echo $icon_image_url?>" alt="<?php echo $icon_image_alt?>">
          </figure>
          <h1>
            <a href="<?php echo $customize_link?>" title="<?php echo $customize_link_title?>" class="first-caps text-white font-bold text-2xl" target="_self"><?php echo $customize_link_title?></a>
          </h1>
        </div>
        <nav>
          <?php wp_nav_menu(array("theme_location" => "primary-menu", "menu_class" => "nav-list flex justify-between font-bold",))
          ?>
        </nav>
      </div>
    </header>
    <!--header section end-->
    <!--main section start-->
    <main>