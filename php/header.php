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
  <script src="js/jquery-3.6.0.min.js" defer></script>
  <script src="js/jquery.validate.min.js" defer></script>
  <script src="js/jquery.mask.min.js" defer></script>
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
      
      <div class="info">
        <div class="info__text-container">
          <div class="info__text-group">