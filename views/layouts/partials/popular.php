<section class="products-carousel full-width_padding">
      <h2 class="section-title text-uppercase text-center mb-1 mb-md-3 pb-xl-2 mb-xl-4">Most <strong>Sale</strong></h2>

      <div class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": true,
            "pagination": {
              "el": ".products-pagination",
              "type": "bullets",
              "clickable": true
            },
            "navigation": {
              "nextEl": ".products-carousel__next",
              "prevEl": ".products-carousel__prev"
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <?php foreach($productsale as $productsale):?>
            <div class="swiper-slide product-card product-card_style10">
              <div class="position-relative pb-3">
                <div class="pc__img-wrapper pc__img-wrapper_wide3">
                  <a href="?act=list_sp"><img loading="lazy" src="<?= $productsale['thumbnail'] ?>" width="256" height="201" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                  <button class="pc__btn-wl position-absolute rounded-circle border-0 text-secondary js-add-wishlist bg-transparent" title="Add To Wishlist">
                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart"></use></svg>
                  </button>
                </div>
              </div>

              <div class="pc__info position-relative d-flex flex-column align-items-center mb-3 mb-md-4 mb-xxl-5">
                <h6 class="pc__title text-uppercase fw-semi-bold"><a href="?act=list_sp"><?= $productsale['title'] ?></a></h6>
                <div class="product-card__price d-flex text-secondary mb-2">
                  <span class="money price"><del>$$<?= $productsale['price'] ?></del></span>
                </div>
                <div class="d-flex align-items-center">
                <span class="money price">$<?= $productsale['sale'] ?></span>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->
      </div><!-- /.position-relative -->
      <div class="text-center mt-2">
        <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="?act=list_sp">See All Products</a>
      </div>
    </section>