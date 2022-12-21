<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="./css/styels.css">
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
  <?php 
            wp_head();
  ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__wrap ">
          <?php the_custom_logo(); ?>
          <!-- <a href="#" class="header__logo">
            Эльбрусская
            Прохлада
          </a> -->
          <div class=" nav-active">
            <nav class="header__nav nav ">
              <div class="nav__wrapper">
                <ul class="nav__menu">
                  <li>
                    <a class="nav__link active-link" href="#">Главная</a>
                  </li>
                  <li>
                    <a class="nav__link " href="#">Каталог</a>
                  </li>
                  <li>
                    <a class="nav__link " href="#">Как заказать</a>
                  </li>
                  <li>
                    <a class="nav__link " href="#">Отзывы</a>
                  </li>
                  <li>
                    <a class="nav__link " href="#">О нас</a>
                  </li>
                  <li>
                    <a class="nav__link " href="#">Контакты</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="header__phone-wrap">
              <a href="tel:<?php the_field('phone_1', 2); ?>"
                class="header__phone"><?php the_field('phone_1', 2); ?></a>
              <a class="header__btn">Заказать обратный звонок</a>
            </div>
          </div>
        </div>
        <div class="hamburger">
          <span class="hamburger-span"></span>
          <span class="hamburger-span"></span>
          <span class="hamburger-span"></span>
        </div>
      </div>

    </header>