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
          <figure class="w-4/12">
            <img src="" alt="Video Icon">
          </figure>
          <h1>
            <a href="./index.html" title="Video Catalog" class="first-caps text-white font-bold text-2xl" target="_self">video catalog</a>
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