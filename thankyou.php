<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/mobile-menu.js" defer></script>
  <title>Best Tour Plan - Hotel Booking </title>
</head>

<body>
  <!-- Шапка -->
  <header class="navbar">
    <div class="navbar-top">
      <div class="container navbar-top__container">
        <!-- Лого -->
        <a href="index.html" class="logo">
          <img src="img/horizontal-logo.min.svg" alt="Logo: Best Tour Plan" class="logo__img">
        </a>
        <!-- Форма поиска -->
        <form action="#" class="search navbar__search">
          <input type="search" class="search__input" placeholder="Search Location">
          <button class="search__button">
            <svg
              class="search__icon"
              width="16"
              height="16"
              >
              <use href="img/icons.svg#search"></use>
            </svg>
          </button>
        </form>
        <!-- Пользователь -->
        <a href="#" class="user navbar__user">
          <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="avatar user__avatar">
          <span class="user__name">Nathan</span>
        </a>
        <button class="menu-button navbar-top__menu-button">
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
          <span class="menu-button__line"></span>
        </button>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar-top -->
    <nav class="navbar-menu hidden"> 
      <div class="container navbar-menu__container">
        <!-- Пользователь -->
        <a href="#" class="user navbar-menu__user hidden">
          <img src="img/user-avatar.jpg" alt="Avatar: Nathan" class="avatar user__avatar">
          <span class="user__name">Nathan</span>
        </a> 
        <!-- Форма поиска -->
        <form action="#" class="search navbar-menu__search hidden">
          <input type="search" class="search__input" placeholder="Search Location">
          <button class="search__button">
            <svg
              class="search__icon"
              width="16"
              height="16"
              >
              <use href="img/icons.svg#search"></use>
            </svg>
          </button>
        </form>

        <a href="#" class="navbar-menu__link">All Deals</a>
        <a href="#" class="navbar-menu__link">Hotels</a>
        <a href="#" class="navbar-menu__link">Activities</a>
        <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
        <a href="#" class="navbar-menu__link">Restaurants</a>
        <a href="#" class="navbar-menu__link">Events</a>
        <a href="#" class="navbar-menu__link">Rodrigues</a>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar-menu -->
  </header>
  <!-- Отель -->
  <section class="hotel">
    
    <div class="container">

      <nav class="nav-tree">
        <a href="#" class="nav-tree__link">Home</a>
        <span class="nav-tree__divider"> / </span>
        <a href="#" class="nav-tree__link">Flash Offers</a>
        <span class="nav-tree__divider"> / </span>
        <a href="#" class="nav-tree__link">Grand Hilton Hotel</a>
      </nav>
      <?php
      $form= $_GET['form'];
      if ($form == 'message') {
        $title = ' Your message sent successfully!';
        $message = 'Our manager will call you in 5 minutes.' ;
      }
      if ($form == 'newsletter') {
        $title = 'Subscription successful!';
        $message = 'You won’t miss anyone of interesting offer.' ;
      }
      ?>
      <div class="info">
        <div class="info__text-container">
          <form action="index.html" class="info__text-group">
            <h1 class="info__name"><?php  echo $title ?></h1>
            <div class="info__tags">
              <p class="info__options">
                <?php  echo $message ?>
              </p>
            </div>
            <!-- /.info__tags -->
            <button class="info__button-home">Return To Home Page</button>
          </form>
          <!-- /.info__text-group -->
        </div>
        <!-- /.info__text-container -->
      </div>
      <!-- /.info -->
    </div>
    <!-- /.container -->
  </section>
  <!-- Подвал -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <a href="index.html" class="footer-top__logo logo-vertical">
          <img
            src="img/vertical-logo.svg"
            alt="Logo: Best Tour Plan"
            class="logo-vertical__img"
          >
        </a>
        <nav class="footer-top__menu nav-menu">
          <span class="nav-menu__title">ALL CATEGORIES</span>
         
          <a href="#" class="nav-menu__link">All Deals</a>
          <a href="#" class="nav-menu__link">Hotels</a>
          <a href="#" class="nav-menu__link">Activities</a>
          <a href="#" class="nav-menu__link">Spa Packages</a>
          <a href="#" class="nav-menu__link">Hotel Day Packages</a>
          <a href="#" class="nav-menu__link">Restaurants</a>
          <a href="#" class="nav-menu__link">Fitness</a>
          <a href="#" class="nav-menu__link">Rodrigues</a>
        </nav>
        <!-- /.all-categories -->
        <nav class="footer-top__menu nav-menu">
          <span class="nav-menu__title">ADDITIONAL INFORMATION</span>
          
          <a href="#" class="nav-menu__link">About Us</a>
          <a href="#" class="nav-menu__link">Contact Us</a>
          <a href="#" class="nav-menu__link">How does it work?</a>
          <a href="#" class="nav-menu__link">Frequently Asked Questions</a>
          <a href="#" class="nav-menu__link">Deals.mu loyalty program</a>
          <a href="#" class="nav-menu__link">Promote your Business on BTP</a>
        </nav>
        <!-- /.additional-information -->
        <nav class="footer-top__menu nav-menu">
          <span class="nav-menu__title">LEGAL INFORMATION</span>
          
          <a href="#" class="nav-menu__link">Terms & Conditions</a>
          <a href="#" class="nav-menu__link">Disclaimer</a>
          <a href="#" class="nav-menu__link">Cancellation policy</a>
          <a href="#" class="nav-menu__link">Privacy</a>
        </nav>
        <!-- /.legal-information -->
        <div class="footer-top__menu social-network">
          <span class="social-network__title">Social Network</span>
          
          <a href="https://www.facebook.com/" class="social-network__link">
            <svg
              class="social-network__icons icon-facebook"
              width="20"
              height="20"
            >
              <use href="img/icons.svg#facebook"></use>
            </svg>
          </a>
          <a href="https://www.youtube.com/" class="social-network__link">
            <svg
              class="social-network__icons icon-youtube"
              width="20"
              height="20"
            >
              <use href="img/icons.svg#youtube"></use>
            </svg>
          </a>
          <a href="https://www.instagram.com/" class="social-network__link">
            <svg
              class="social-network__icons icon-instagram"
              width="20"
              height="20"
            >
              <use href="img/icons.svg#instagram"></use>
            </svg>
          </a>
        </div>
        <!-- /.social-network -->
      </div>
      <!-- /.footer-top -->
      <div class="footer-contact">
        <div class="footer-contact__details">
          <span class="footer-contact__title">Contact Details</span>
          <span class="footer-contact__subtitle">Feel free to contact us by phone, email or by our contact form</span>
          <div class="footer-contact__info">
            <svg
              class="footer-contact__icons footer-contact__map-marker-icon"
              width="14"
              height="20"
            >
              <use href="img/icons.svg#map-marker"></use>
            </svg>
            <div class="footer-contact__map-marker footer-contact__info-group">
              <span class="footer-contact__text">9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States</span>
            </div>
            <!-- /.footer-contact__map-marker -->
            <svg
              class="footer-contact__icons footer-contact__phone-call-icon"
              width="20"
              height="20"
            >
              <use href="img/icons.svg#phone-call"></use>
            </svg>
            <div class="footer-contact__phone-call footer-contact__info-group">
              <span class="footer-contact__text">
                Tel (business hours) : 
                <a href="tel:2691500" class="footer-contact__text footer-contact__link">
                  269 1500
                </a>
              </span>
              <span class="footer-contact__text">
                Tel (hotline) Monday - Saturday: 
                <a href="tel:52566138" class="footer-contact__text footer-contact__link">
                  52-56-61-38
                </a>
                (08:00 am – 20:00
                pm)
              </span>
              <span class="footer-contact__text">
                Tel (hotline) Sunday: 
                <a href="tel:52566138" class="footer-contact__text footer-contact__link">
                  52-56-61-38
                </a>
                (08:00 am – 14:00 pm)
              </span>
            </div>
            <!-- /.footer-contact__phone-call -->
            <svg
              class="footer-contact__icons footer-contact__email-icon"
              width="18"
              height="14"
            >
              <use href="img/icons.svg#email"></use>
            </svg>
            <div class="footer-contact__email footer-contact__info-group">
              <a href="mailto:cherly.lawson@example.com" class="footer-contact__text footer-contact__link">
                cherly.lawson@example.com
              </a>
            </div>
            <!-- /.footer-contact__email -->
          </div>
          <!-- /.footer-contact__info -->
        </div>
        <!-- /.footer-contact__info -->
        <div class="footer-contact__form form">
          <span class="form__title">Send us a message</span>
          <form action="send.php" method="POST" class="form__input-bar">
            <input type="text" class="form__name" placeholder="Your Full Name*" name="name">
            <input type="text" class="form__phone" placeholder="Phone Number*" name="phone">
            <textarea name="Message" cols="30" rows="5" class="form__message" placeholder="Message" name="message"></textarea>
            <button class="form__button">Send</button>
            <span class="form__note">* Required Fields</span>
          </form>
          <!-- /.form__input-bar -->
        </div>
        <!-- /.footer-contact__form form -->
      </div>
      <!-- /.footer-contact -->
      <div class="footer-bottom">
        <div class="footer-bottom__links-bar">
          <a href="#" class="footer-bottom__link">Disclaimer</a>
          <a href="#" class="footer-bottom__link">Conditions of use</a>
          <a href="#" class="footer-bottom__link">Cancellation policy</a>
        </div>
        <img src="img/payment-icons.png" alt="" class="footer-bottom__payment">
      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="modal hidden">
    <div class="modal__overlay">
      <div class="modal__wrapper">
        <div class="modal__form modal-form">
          <span class="modal-form__title">Booking</span>
          <input type="text" class="modal-form__name" placeholder="Your Full Name*">
          <input type="text" class="modal-form__phone" placeholder="Phone Number*">
          <input type="text" class="modal-form__email" placeholder="Email*">
          <textarea name="Message" cols="30" rows="5" class="modal-form__message" placeholder="Message"></textarea>
          <button class="modal-form__button">Send</button>
          <span class="modal-form__note">* Required Fields</span>
        </div>
        <!-- /.modal__form modal-form -->
        <button class="modal__button-close">
          <svg
            class="modal__icon-close"
            width="17"
            height="16"
          >
            <use href="img/icons.svg#close"></use>
          </svg>
        </button>
      </div>
      <!-- /.modal__wrapper -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->
</body>
</html>