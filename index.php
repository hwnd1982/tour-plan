 <?php include('header.php') ?>
      <div class="info hotel__info">
        <div class="info__text-container">
          <div class="info__text-group">
            <div class="info__rating-bar rating-bar">
              <svg
                class="rating-bar__star"
                width="8"
                height="8"
              >
                <use href="img/icons.svg#star"></use>
              </svg>
              <svg
                class="rating-bar__star"
                width="8"
                height="8"
              >
                <use href="img/icons.svg#star"></use>
              </svg>
              <svg
                class="rating-bar__star"
                width="8"
                height="8"
              >
                <use href="img/icons.svg#star"></use>
              </svg>
              <svg
                class="rating-bar__star"
                width="8"
                height="8"
              >
                <use href="img/icons.svg#star"></use>
              </svg>
              <svg
                class="rating-bar__star"
                width="8"
                height="8"
              >
                <use href="img/icons.svg#star"></use>
              </svg>
            </div>
            <!-- /.info__rating -->
            <h1 class="info__name">GRAND HILTON HOTEL</h1>
            <span class="info__offer">Flash Offer</span>
            <div class="info__tags">
              <span class="info__catigory">Half-Board</span>
              <span class="info__options">All Inclusive</span>
              <span class="info__options">Complimentary Activities</span>
              <span class="info__options">Child Stays Free</span>
            </div>
            <!-- /.info__tags -->
          </div>
          <!-- /.info__text-group -->
          <div class="info__user-ratings">
            <span class="info__user-ratings-title">User Rattings</span>
            <span class="info__user-ratings-count">4.5</span>
            <span class="info__user-ratings-max">5</span>
          </div>
          <!-- /.info__user-ratings -->
        </div>
        <!-- /.info__text-container -->
        <div class="info__main-container">
          <div class="hotel-slider info__hotel-slider">
            <div class="hotel-slider__wrapper">
              <!-- Кнопки управления -->
              <div class="hotel-slider__buttons-bar">
                <button class="hotel-slider__buttons hotel-button-prev hotel-slider__button-prev">
                  <svg
                    class="hotel-slider__button-icon-prev hotel-slider__icon-arrows"
                    width="10"
                    height="18"
                  >
                    <use href="img/icons.svg#arrow"></use>
                  </svg>
                </button>
                <button class="hotel-slider__buttons hotel-button-next hotel-slider__button-next">
                  <svg
                    class="hotel-slider__button-icon-next hotel-slider__icon-arrows"
                    width="10"
                    height="18"
                  >
                    <use href="img/icons.svg#arrow"></use>
                  </svg>
                </button>
              </div>
              <!-- /.slider__buttons-bar -->
              <div class="hotel-slide hotel-slider__slide">
                <img src="img/hotel-view-1.jpg" alt="" class="hotel-slider__img">
              </div>
              <!-- /.slide -->
              <div class="hotel-slide hotel-slider__slide">
                <img src="img/hotel-view-2.webp" alt="" class="hotel-slider__img">
              </div>
              <!-- /.slide -->
              <div class="hotel-slide hotel-slider__slide">
                <img src="img/hotel-view-3.webp" alt="" class="hotel-slider__img">
              </div>
              <!-- /.slide -->
              <div class="hotel-slide hotel-slider__slide">
                <img src="img/hotel-view-4.webp" alt="" class="hotel-slider__img">
              </div>
              <!-- /.slide -->
              <div class="hotel-slide hotel-slider__slide">
                <img src="img/hotel-view-5.webp" alt="" class="hotel-slider__img">
              </div>
              <!-- /.slide -->
            </div>
            <!-- /.slider__wrapper -->
          </div>
          <!-- /.info__slider -->
          <div class="info__additional-container">
            <!-- <form action="#" class="booking-form info__booking-form"> -->
            <div class="booking-form info__booking-form">
              <div class="booking-form__price">
                <span class="booking-form__price-starts">price starts as</span>
                <span class="booking-form__price-summ">$ 8,500</span>
                <span class="booking-form__price-per">per room / night</span>
              </div>
              <!-- /.booking-form__price -->
              <div class="booking-form__counter">
                <span class="booking-form__counter-guests">
                  <svg
                    class="guests-icon booking-form__counter-guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="booking-form__counter-rooms">
                  <svg
                    class="rooms-icon booking-form__counter-rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.booking-form__counter -->
              <div class="booking-form__call">
                <span class="booking-form__call-offer">Quick Booking</span>
                <a href="tel:+12100" class="booking-form__call-num">
                  <svg
                    class="call-icon booking-form__call-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#call"></use>
                  </svg>
                  12100
                </a>
              </div>
              <!-- /.booking-form__call -->
              <button class="booking-form__button book-now">View Other Options</button>
            </div>
            <!-- /.booking-form -->
              <!-- </form> -->
            <div class="info__map">
              <iframe class="info__map-iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.090748660539!2d98.294612675272!3d7.8378438988566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1622013394943!5m2!1sru!2sru"
                width="350"
                height="213"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
          </div>
          <!-- /.info__additional-container -->
        </div>
        <!-- /.info__main-container -->
      </div>
      <!-- /.info -->
<?php include('header-end.php') ?>
    <!-- Другие предложения -->
    <section class="other-packages">
      <div class="container">
        <h2 class="other-packages__title">Other Packages</h2>
        <div class="other-packages__cards">
          <div class="other-packages__card packag-card full">
            <img
              src="img/hotelBlueHaven.jpg"
              alt=""
              class="packag-card__img full"
            >
            <span class="packag-card__flash-offer full">Flash Offer</span>
            <div class="packag-card__booking-info full">
              <div class="packag-card__rating-bar rating-bar full">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
              <h3 class="packag-card__title">Hotel Blue Haven</h3>
              <p class="packag-card__text full">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna
                llit. Ipsum est
                fugiat velit ea llamco do esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum
                occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="packag-card__info">
                <span class="packag-card__info-item packag-card__geo-link">
                  <svg
                    class="packag-card__icons packag-card__icon-map-pin"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#map-pin"></use>
                  </svg>
                  1749 Wheeler Ridge Delaware
                </span>
                <span class="packag-card__info-item packag-card__counter-guests">
                  <svg
                    class="packag-card__icons packag-card__guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="packag-card__info-item packag-card__counter-rooms">
                  <svg
                    class="packag-card__icons packag-card__rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.packag-card__info -->
              <span class="packag-card__old-price">$ 10,500</span>
              <div class="packag-card__get-offer">
                <span class="packag-card__curent-price">$ 8,500</span>
                <button class="packag-card__button book-now">Book Now</button>
              </div>
              <!-- /.packag-card__get-offer -->
            </div>
            <!-- /.other-packages__booking-card full -->
          </div>
          <!-- /.other-packages__card full -->

          <div class="other-packages__card packag-card">
            <img
              src="img/LUXBelleMare.jpg"
              alt=""
              class="packag-card__img"
            >
            <span class="packag-card__flash-offer">Flash Offer</span>
            <div class="packag-card__booking-info">
              <div class="packag-card__rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <h3 class="packag-card__title">LUX* Belle Mare</h3>
              <p class="packag-card__text">
                Luxury resort of the Mauritian LUX * chain. The hotel's beach is considered one of the most beautiful on the island. Stylish, elegant rooms, restaurants with gourmet cuisine, as well as a high
                level of service will make your stay unforgettable. A great place both for a romantic honeymoon trip
                and for families with children.
            </p>
              <div class="packag-card__info">
                <span class="packag-card__info-item packag-card__geo-link">
                  <svg
                    class="packag-card__icons packag-card__icon-map-pin"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#map-pin"></use>
                  </svg>
                  1749 Wheeler Ridge Delaware
                </span>
                <span class="packag-card__info-item packag-card__counter-guests">
                  <svg
                    class="packag-card__icons packag-card__guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="packag-card__info-item packag-card__counter-rooms">
                  <svg
                    class="packag-card__icons packag-card__rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.packag-card__info -->
              <span class="packag-card__old-price">$ 8,500</span>
              <div class="packag-card__get-offer">
                <span class="packag-card__curent-price">$ 3,000</span>
                <button class="packag-card__button book-now">Book Now</button>
              </div>
              <!-- /.packag-card__get-offer -->
            </div>
            <!-- /.other-packages__booking-card -->
          </div>
          <!-- /.other-packages__card -->

          <div class="other-packages__card packag-card">
            <img
              src="img/whitePalace.jpg"
              alt=""
              class="packag-card__img"
            >
            <span class="packag-card__flash-offer">Flash Offer</span>
            <div class="packag-card__booking-info">
              <div class="packag-card__rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <h3 class="packag-card__title">White Palace</h3>
              <p class="packag-card__text">
                The delightful new restaurants and bars of the White Palace Hotel on the coast of the Cretan Riviera
                present a new innovative menu of international cuisine with the flavors of Greece! Exceptional
                hospitality. Superb Culinary Journey: Six restaurants serve Greek, Italian, Lebanese, French and
                fusion cuisine with a good selection of delectable wines and ONE 24/7. Pastry shop, premium branded
                drinks, light snacks and an ice bar, pool and beach service and pleasant compliments from Grecotel.
                The highlight of the White Palace is the gourmet promenade with its exciting restaurants and food
                stalls serving exotic dishes, gyros, pita and fresh sandwiches. Roller skating waiters, original
                summer cocktails and DJ hits complete the colorful summer holiday. Enjoy a rich buffet of
                international cuisine made with fresh organic ingredients. Choose from an extensive restaurant menu
                all day, from a quiet lunch in a relaxed atmosphere, a private in-room dining or a romantic dinner
                under the stars. All-inclusive baby food in all restaurants.
              </p>
              <div class="packag-card__info">
                <span class="packag-card__info-item packag-card__geo-link">
                  <svg
                    class="packag-card__icons packag-card__icon-map-pin"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#map-pin"></use>
                  </svg>
                  1749 Wheeler Ridge Delaware
                </span>
                <span class="packag-card__info-item packag-card__counter-guests">
                  <svg
                    class="packag-card__icons packag-card__guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="packag-card__info-item packag-card__counter-rooms">
                  <svg
                    class="packag-card__icons packag-card__rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.packag-card__info -->
              <span class="packag-card__old-price">$ 10,500</span>
              <div class="packag-card__get-offer">
                <span class="packag-card__curent-price">$ 9,500</span>
                <button class="packag-card__button book-now">Book Now</button>
              </div>
              <!-- /.packag-card__get-offer -->
            </div>
            <!-- /.other-packages__booking-card -->
          </div>
          <!-- /.other-packages__card -->

          <div class="other-packages__card packag-card">
            <img
              src="img/luxuryPlace.jpg"
              alt=""
              class="packag-card__img"
            >
            <span class="packag-card__flash-offer">Flash Offer</span>
            <div class="packag-card__booking-info">
              <div class="packag-card__rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <h3 class="packag-card__title">Luxury Place</h3>
              <p class="packag-card__text">
                Place Luxury Boutique Villas are a great choice for Tau guests, with a romantic atmosphere and many
                helpful amenities designed to enhance their stay. Here you will feel at home, because The hotel
                rooms are equipped with a flat-screen TV, air conditioning and a minibar, and thanks to free Wi-Fi,
                you can go online at any time.
              </p>
              <div class="packag-card__info">
                <span class="packag-card__info-item packag-card__geo-link">
                  <svg
                    class="packag-card__icons packag-card__icon-map-pin"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#map-pin"></use>
                  </svg>
                  1749 Wheeler Ridge Delaware
                </span>
                <span class="packag-card__info-item packag-card__counter-guests">
                  <svg
                    class="packag-card__icons packag-card__guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="packag-card__info-item packag-card__counter-rooms">
                  <svg
                    class="packag-card__icons packag-card__rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.packag-card__info -->
              <span class="packag-card__old-price">$ 4,500</span>
              <div class="packag-card__get-offer">
                <span class="packag-card__curent-price">$ 2,500</span>
                <button class="packag-card__button book-now">Book Now</button>
              </div>
              <!-- /.packag-card__get-offer -->
            </div>
            <!-- /.other-packages__booking-card -->
          </div>
          <!-- /.other-packages__card -->

          <div class="other-packages__card packag-card">
            <img
              src="img/hotelFiveStar.jpg"
              alt=""
              class="packag-card__img"
            >
            <span class="packag-card__flash-offer">Flash Offer</span>
            <div class="packag-card__booking-info">
              <div class="packag-card__rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <h3 class="packag-card__title">Hotel Five Star</h3>
              <p class="packag-card__text">
                Built in 2016, Hyatt Regency Shanghai Wujiaochang is located in Central Shanghai's Wujiaochang
                District, steps from Wujiaochang MRT Station and next to Hopson One Shopping Center. It offers rooms
                with free Wi-Fi, a garden and 2 international restaurants. Fudan University, Daxue Road and Jianwan
                Stadium are a 10-minute walk away. The hotel is a 25-minute drive from Shanghai Railway Station,
                about a 45-minute drive from Hongqiao Airport and its train station, and a 50-minute drive from
                Pudong International Airport.
              </p>
              <div class="packag-card__info">
                <span class="packag-card__info-item packag-card__geo-link">
                  <svg
                    class="packag-card__icons packag-card__icon-map-pin"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#map-pin"></use>
                  </svg>
                  1749 Wheeler Ridge Delaware
                </span>
                <span class="packag-card__info-item packag-card__counter-guests">
                  <svg
                    class="packag-card__icons packag-card__guests-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#guests"></use>
                  </svg>
                  2 x Guests
                </span>
                <span class="packag-card__info-item packag-card__counter-rooms">
                  <svg
                    class="packag-card__icons packag-card__rooms-icon"
                    width="14"
                    height="14"
                  >
                    <use href="img/icons.svg#rooms"></use>
                  </svg>
                  1 x Room
                </span>
              </div>
              <!-- /.packag-card__info -->
              <span class="packag-card__old-price">$ 6,500</span>
              <div class="packag-card__get-offer">
                <span class="packag-card__curent-price">$ 3,500</span>
                <button class="packag-card__button book-now">Book Now</button>
              </div>
              <!-- /.packag-card__get-offer -->
            </div>
            <!-- /.other-packages__booking-card -->
          </div>
          <!-- /.other-packages__card -->
        </div>
      </div>
      <!-- /.container -->
    </section>
  <!-- Рассылка -->
  <section class="mailing">
      <div class="container mailing__container">
        <div class="mailing__text">
          <span class="mailing__subtitle">subscribe to our</span>
          <h2 class="mailing__title">Newsletter</h2>
        </div>
        <!-- /.mailing__text -->
        <form action="#" class="subscribe mailing__subscribe">
          <input type="email" class="subscribe__input" placeholder="Your email address">
          <button class="subscribe__button">Send</button>
        </form>
      </div>
      <!-- /.mailing__container -->
  </section>
  <!-- Отзывы -->
  <section class="review">
    <div class="container review__container">
      <h2 class="review__title">What people think about us</h2>
      <div class="review__slider review-slider">
         <!-- Кнопки управления -->
          <div class="review-slider__buttons-bar">
            <button class="review-slider__buttons review-button-prev review-slider__button-prev">
              <svg class="review-slider__button-icon-prev review-slider__icon-arrows" width="10" height="18">
                <use href="img/icons.svg#arrow"></use>
              </svg>
            </button>
            <button class="review-slider__buttons review-button-next review-slider__button-next">
              <svg class="review-slider__button-icon-next review-slider__icon-arrows" width="10" height="18">
                <use href="img/icons.svg#arrow"></use>
              </svg>
            </button>
          </div>
          <!-- /.review-slider__buttons-bar -->
        <div class="review-slider__wrapper">
          <!-- 1 -->
          <div class="review-slider__slide review-slide">
            <div class="review-slide__quotes">
              <svg class="review-slide__icon-quotes quotes-open" width="70" height="47.59">
                <use href="img/icons.svg#quotes"></use>
              </svg>
              <svg class="review-slide__icon-quotes quotes-close" width="70" height="47.59">
                <use href="img/icons.svg#quotes"></use>
              </svg>
            </div>
            <!-- /.review-slide__quotes -->
            <div class="review-slide__author-card author-card">
              <img src="img/meganFox.jpg" alt="" class="author-card__avatar">
              <span class="author-card__author-name">Megan Fox</span>
              <span class="author-card__review-date">Stayed 18 Nov, 2019</span>
              <div class="author-card__review-rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
            </div>
            <!-- /.author-card -->
            <div class="review-slide__reviwe-card">
              <p class="review-slide__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome
                us very well. Issue was
                only
                that Lift was not in working and we were allotted to 3rd floor and amenities articles were
                in corner of gallery
                which
                were giving bad feeling. Breakfast was good and support of the staff was also very nice.
                Location is not good as per
                atmosphere, it is very nearby most of the popular places but self location in a narrow
                street is not good. Overall
                it
                was a good experience and could recommend.
              </p>
            </div>
            <!-- /.review-slide__reviwe-card -->
          </div>
          <!-- /.review-slide -->
          <!-- 2 -->
          <div class="review-slider__slide review-slide">
            <div class="review-slide__quotes">
              <svg
                class="review-slide__icon-quotes quotes-open"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
              <svg
                class="review-slide__icon-quotes quotes-close"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
            </div>
            <!-- /.review-slide__quotes -->
            <div class="review-slide__author-card author-card">
              <img
                src="img/irinaObrazko.jpg"
                alt=""
                class="author-card__avatar"
              >
              <span class="author-card__author-name">Irina Obrazko</span>
              <span class="author-card__review-date">Stayed 30 May, 2018</span>
              <div class="author-card__review-rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
            </div>
            <!-- /.author-card -->
            <div class="review-slide__reviwe-card">
              <p class="review-slide__text">
                Business trip to Nizhny Novgorod I'm on business trips very often and Nizhny Novgorod I visit almost
                every week. Usually I stay in the Sheraton .. but this time there were no places and my choice is
                the Minin hotel. The first time I visited this hotel. Registered very quickly .. when it flew at
                night and I was waiting. I went up to the room ... opened the door, and oooo .. miracle! Great room,
                everything is on the level !! And this is a three star hotel! But the most pleasant - my voice-over
                request at night to provide an iron for a certain time in the morning - performed at a strictly
                scheduled time .. even in such small things this hotel has everything thought out! I want to say ..
                believe me I was a guest in 4 and 5 stars hotels .. and although already my person in them has the
                status of prioritizing, and serious claims to them were! And this hotel - 3 stars and such attention
                to the guests .. in elementary details. Hotel Minin - bravo! There are no words .. very pleasantly
                surprised! Not deserved 3 stars you .. 4 stars definitely.
              </p>
            </div>
            <!-- /.review-slide__reviwe-card -->
          </div>
          <!-- /.review-slide -->
          <!-- 3 -->
          <div class="review-slider__slide review-slide">
            <div class="review-slide__quotes">
              <svg
                class="review-slide__icon-quotes quotes-open"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
              <svg
                class="review-slide__icon-quotes quotes-close"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
            </div>
            <!-- /.review-slide__quotes -->
            <div class="review-slide__author-card author-card">
              <img
                src="img/igorGnezdilov.jpg"
                alt=""
                class="author-card__avatar"
              >
              <span class="author-card__author-name">Igor Gnezdilov</span>
              <span class="author-card__review-date">Stayed 24 May, 2018</span>
              <div class="author-card__review-rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
            </div>
            <!-- /.author-card -->
            <div class="review-slide__reviwe-card">
              <p class="review-slide__text">
                Stayed in the hotel for the period from 06-25 May. The hotel is superb, well located. Especially
                liked the hotel staff, from the director to the cleaners. Politeness, customer orientation,
                hospitality - their "credo". The room is all amazingly clean, fresh and comfortable even for a long
                stay. Clean, comfortable courtyard, fast Wi-Fi and amazingly cooked dishes resemble home atmosphere,
                in which one wants to return. Regards, Gnezdilov Igor Moscow
              </p>
            </div>
            <!-- /.review-slide__reviwe-card -->
          </div>
          <!-- /.review-slide -->
          <!-- 4 -->
          <div class="review-slider__slide review-slide">
            <div class="review-slide__quotes">
              <svg
                class="review-slide__icon-quotes quotes-open"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
              <svg
                class="review-slide__icon-quotes quotes-close"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
            </div>
            <!-- /.review-slide__quotes -->
            <div class="review-slide__author-card author-card">
              <img
                src="img/angelaMamaeva.jpg"
                alt=""
                class="author-card__avatar"
              >
              <span class="author-card__author-name">Angela Mamaeva</span>
              <span class="author-card__review-date">Stayed 17 May, 2018</span>
              <div class="author-card__review-rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
            </div>
            <!-- /.author-card -->
            <div class="review-slide__reviwe-card">
              <p class="review-slide__text">
                We express our gratitude to the whole staff of the hotel "Minin". Spent two wonderful days of
                official business! Friendly, kind, cheerful staff, clean, comfortable rooms! Guys, good luck in all
                your endeavors! Yours faithfully A. Mamaeva. Thank you!
              </p>
            </div>
            <!-- /.review-slide__reviwe-card -->
          </div>
          <!-- /.review-slide -->

          <div class="review-slider__slide review-slide">
            <div class="review-slide__quotes">
              <svg
                class="review-slide__icon-quotes quotes-open"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
              <svg
                class="review-slide__icon-quotes quotes-close"
                width="70"
                height="47.59"
              >
                <use href="img/icons.svg#quotes"></use>
              </svg>
            </div>
            <!-- /.review-slide__quotes -->
            <div class="review-slide__author-card author-card">
              <img
                src="img/ekaterinaGorelova.jpg"
                alt=""
                class="author-card__avatar"
              >
              <span class="author-card__author-name">Ekaterina Gorelova</span>
              <span class="author-card__review-date">Stayed 20 Aug, 2017</span>
              <div class="author-card__review-rating-bar rating-bar">
                <svg
                  class="rating-bar__star"
                  width="8"
                  height="8"
                >
                  <use href="img/icons.svg#star"></use>
                </svg>
              </div>
              <!-- /.author-card__review-rating-bar -->
            </div>
            <!-- /.author-card -->
            <div class="review-slide__reviwe-card">
              <p class="review-slide__text">
                All very much! The hotel is small but cozy. The rooms are super, perfectly clean. Furniture, new
                plumbing. Sets down to toothbrushes and toothpaste, robes and Slippers.The Breakfast is decent. The
                best ratio quality/price, and the proximity to the closest attractions.In our room wifi was not
                working.
              </p>
            </div>
            <!-- /.review-slide__reviwe-card -->
          </div>
          <!-- /.review-slide -->
        </div>
        <!-- /.review-slider__wrapper -->
      </div>
      <!-- /review-slider -->
    </div>
    <!-- /.container -->
  </section>
  <?php include('footer.php') ?>