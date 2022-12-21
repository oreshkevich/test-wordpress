<?php
    get_header();
?>
<main>
  <div class="container">
    <div class="promo swiper">
      <div class="swiper-wrapper">
        <section class="promo swiper-slide">
          <div class="promo__wrapper">
            <h2 class="promo-title"><?php the_field('promo_title'); ?></h2>
          </div>

        </section>

        <section class="promo swiper-slide">
          <div class="promo__wrapper">
            <h2 class="promo-title">Оптовые поставки
              минеральной воды <br>
              и безалкогольных напитков</h2>
          </div>

        </section>

        <section class="promo swiper-slide">
          <div class="promo__wrapper">
            <h2 class="promo-title">Оптовые поставки
              минеральной воды <br>
              и безалкогольных напитков</h2>
          </div>

        </section>
        <section class="promo swiper-slide">
          <div class="promo__wrapper">
            <h2 class="promo-title">Оптовые поставки
              минеральной воды <br>
              и безалкогольных напитков</h2>
          </div>

        </section>

      </div>
      <div class="pagination">
        <div class="swiper-pagination"></div>
        <div class="counter"> 2/4 </div>
      </div>

      <div class="swiper-menu">
        <div data-index="0" class="dot dot-active"></div>
        <div data-index="1" class="dot"></div>
        <div data-index="2" class="dot"></div>
        <div data-index="3" class="dot"></div>
      </div>
    </div>
    <section class="description  ">
      <div class="description__wrapper ">
        <div class="description__item">
          <h2 class="description__title"><?php the_field('about_title'); ?></h2>
          <p class="description__text"> <?php the_field('about_descr'); ?></p>
        </div>
      </div>
      <div class="description__wrapper description__wrapper_item">
        <div class="discount swiper-two">
          <div class="swiper-wrapper">
            <div class="discount  swiper-slide">
              <div class="discount__item">
                <div class="discount__wrapper">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
                <div class="discount__wrapper discount__wrapper_opacity">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости <br>
                    от объема покупки</p>
                </div>

              </div>
            </div>
            <div class="discount  swiper-slide">
              <div class="discount__item">
                <div class="discount__wrapper">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
                <div class="discount__wrapper discount__wrapper_opacity">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
              </div>
            </div>
            <div class="discount  swiper-slide">
              <div class="discount__item">
                <div class="discount__wrapper">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
                <div class="discount__wrapper discount__wrapper_opacity">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
              </div>
            </div>
            <div class="discount  swiper-slide">
              <div class="discount__item">
                <div class="discount__wrapper">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
                <div class="discount__wrapper discount__wrapper_opacity">
                  <img class="discount__img" src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/discount.svg"
                    alt="discount">
                  <p class="discount__title">Индивидуальные скидки
                    в зависимости<br>
                    от объема покупки</p>
                </div>
              </div>
            </div>
          </div>
          <div class="description__slider-button">
            <button class="description__slider-next">
              <img class="description__slider-next-img icons-active"
                src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/prev.svg" alt="prev">
            </button>
            <button class="description__slider-prev ">
              <img class="description__slider-prev-img icons-active"
                src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/next.svg" alt="next">
            </button>
          </div>
          <div class="description__pagination">
            <div class="description__swiper-pagination swiper-pagination"></div>
          </div>

        </div>
        <div class="counter-two"> 2/4 </div>
      </div>
    </section>


  </div>
</main>
</div>
<?php 
            wp_footer();
        ?>
</body>

</html>