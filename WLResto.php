<?php
session_start();

// Check if the user is logged in, if not, set the default user as 'Guest'
$name = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? $_SESSION['name'] : 'Guest';

// Determine the login/logout button text based on user session
$loginLogoutText = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'LOGOUT' : 'LOGIN';
$loginLogoutLink = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'logout.php' : 'login.php';

// Set the greeting text based on the logged-in user
$greetingText = $name === 'Guest' ? 'EXPLORE INDONESIA CULINARY' : "Hi, $name! Let's EXPLORE INDONESIA CULINARY";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hungry Indonesia</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
  <style>
  body, html {height: 100%}
  body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
  .menu {display: none}
  .bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://cdn0-production-images-kly.akamaized.net/DdoBXYLBlvTG1epEtUyAQbFpLsM=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3126596/original/024930300_1589347291-masakan-indonesia-featured-212892.jpg");
    min-height: 90%;
  }
  </style>
  </head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-red w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">MENU</a>
    <a href="#resto" class="w3-bar-item w3-button">RESTO</a>
    <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
	<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <a href="account.php" class="w3-bar-item w3-button" style="float: right;"><?= $name ?></a>
    <?php endif; ?>
    <button class="w3-bar-item w3-button" style="float: right;" onclick="window.location.href='<?= $loginLogoutLink ?>'"><?= $loginLogoutText ?></button>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 10am to 12pm</span>
  </div>
  <div class="w3-display-middle w3-center">
  	<span class="w3-text-white w3-hide-small" style="font-size:100px"><?= $greetingText ?></span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>thin<br>CRUST PIZZA</b></span>
    <p><input type="text" name="search" style="width: 100%; height: 75px;"></p>
    <p><a href="#menu" class="w3-button w3-xxlarge" style="background-color: #B31312; color: white;">Search Recipes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#menu" class="w3-button w3-xxlarge" style="background-color: #B31312; color: white;">Search Resto</a></p>
  </div>
</header>

<div class="w3-container w3-grey w3-padding-64 w3-xxlarge" id="">
  <div class="w3-content">
    <table border="0" width="100%">
      <tr>
        <td>
          <h1 style="color: white;">Tidak punya bahan utama?</h1>
          <h2 style="color: white;">Jangan khawatir...</h2>
          <p style="color: white;">........................................</p>          
        </td>
        <td>
          <img src="https://cdn-icons-png.flaticon.com/512/10/10598.png" style="float: right; width: 50%;">
        </td>
      </tr>
    </table>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container w3-white w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">RESEP MAKANAN DAERAH</h1>
    <table border="0" width="100%" style="margin-left: -12.5%;">
      <tr>
        <td>
          <img src="https://cdn0-production-images-kly.akamaized.net/vIx_lxR1UfFl79d67T7pjvy1tXw=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1253731/original/213c98558a7233f0f923c91df2b986f9beef-curry-recipe-stew-beef-in-coconut-curry.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://images.tokopedia.net/img/KRMmCm/2023/6/13/8333d36a-ae93-4891-883d-c21c9e68a7f5.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://img-global.cpcdn.com/recipes/02bf84b887fc51b8/1200x630cq70/photo.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://assets-pergikuliner.com/Ry4vi_KvaVuEE5FPvrjyCH4nRCo=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/893874/picture-1524131584.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
      </tr>
      <tr align="right">
        <td><a href="" style="text-decoration: none;">Rendang</a></td>
        <td><a href="" style="text-decoration: none;">Soto Santan</a></td>
        <td><a href="" style="text-decoration: none;">Daging Asap</a></td>
        <td><a href="" style="text-decoration: none;">Ching Chong Fan</a></td>
      </tr>
    </table>

  </div>
</div>

<div class="w3-container w3-white w3-padding-64 w3-xxlarge" id="resto">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">REKOMENDASI RESTO</h1>
    <table border="0" width="100%" style="margin-left: -12.5%;">
      <tr>
        <td>
          <img src="https://www.goodnewsfromindonesia.id/uploads/images/2021/04/2912532021-warung-soto-haji-mamat.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://cdn0-production-images-kly.akamaized.net/pU78Ubb1zEgJuLIjKuLcWB1ILP0=/500x281/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2966775/original/008639300_1573664417-2.jpg" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://dev.ibisnis.com/images/images/5c58198f49fa3.webp" width="300px" height="250px" style="border-radius: 5%;">
        </td>
        <td>
          <img src="https://dev.ibisnis.com/images/images/5fe42781b7207.webp" width="300px" height="250px" style="border-radius: 5%;">
        </td>
      </tr>
      <tr align="right">
        <td><a href="" style="text-decoration: none;">Soto Betawi H Mamat</a></td>
        <td><a href="" style="text-decoration: none;">Sate Palmerah Kim Tek</a></td>
        <td><a href="" style="text-decoration: none;">Ikan Bakar Cianjur</a></td>
        <td><a href="" style="text-decoration: none;">Warung Leko</a></td>
      </tr>
    </table>
  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
    <p>HungryIndonesia merupakan website yang bergerak di dalam bidang makanan khas daerah Indonesia berupa resep- resep makanan khas berbagai provinsi di Indonesia. Kami juga berusaha memudahkan pengguna untuk mencari restoran dari makanan khas tersebut. Keunikan yang kami ingin berikan pada pengguna adalah pemberian bahan alternatif pada resep yang kami sediakan dengan tujuan agar pengguna dapat memiliki pilihan saat ingin memasak makanan tersebut.</p>
    <p>Ayo cari masakan daerah yang ingin kamu masak atau kamu makan sekarang juga di HungryIndonesia. Selamat memasak HungryPeople!</p>
	 <img src="/w3images/onepage_restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
  </div>
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Contact</h1>
    <p class="w3-xxlarge">Isi Form Dibawah Kami Akan Segera Menghubungi Anda:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama Bisnis" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Waktu Meeting" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Notes" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-block" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>&copy; All Right Reserved.</p>
</footer>
</body>
</html>
