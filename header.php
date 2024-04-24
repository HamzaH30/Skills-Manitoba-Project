<header class="container">
  <div class="logo">
    <img src="assets/logo-travelmb.svg" alt="Travel Manitoba Logo">
  </div>

  <!-- 
    This is the hamburger menu. It gets converted into an X when the user clicks on this.
    Configured via app.js & animations applied in style.css
  -->
  <div id="menu-btn" class="hamburger-menu">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
  </div>

  <!-- This is the nav bar displayed on tablets & desktop. -->
  <nav>
    <a href="#">Things to do</a>
    <a href="#">Events</a>
    <a href="#">Products</a>
  </nav>
</header>

<!-- 
  This is a special menu designed for mobile devices. 
  It is placed outside of the header tag because it takes up the entire webpage/screen height.

  However, in the business logic sense, the best decision is to include this into the header.php file.
-->
<section id="mobile-menu" class="mobile-menu">
  <a href="#">Things to do</a>
  <a href="#">Events</a>
  <a href="#">Products</a>
</section>