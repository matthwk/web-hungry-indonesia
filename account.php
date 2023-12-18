<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

// Get the name from session if it's set, otherwise assign 'Guest'
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account - HungryIndonesia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: "Amatic SC", sans-serif;
        }
        body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
        .menu {display: none}
        .bgimg {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("https://cdn0-production-images-kly.akamaized.net/DdoBXYLBlvTG1epEtUyAQbFpLsM=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3126596/original/024930300_1589347291-masakan-indonesia-featured-212892.jpg");
            min-height: 90%;
        }
        .centered-btns {
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Adjust height as needed */
        }
        .centered-btns button {
            background-color: #B31312;
            color: white;
            padding: 20px 40px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 24px;
            width: 50%; /* Adjust width as needed */
            transition: background-color 0.3s ease;
        }
        .centered-btns button:hover {
            background-color: #a30f0f;
        }
        .centered-btns h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .centered-btns h2 {
            margin-bottom: 40px;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-red w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="WLResto.php" class="w3-bar-item w3-button">HOME</a>
        <a href="WLResto.php#menu" class="w3-bar-item w3-button">MENU</a>
        <a href="WLResto.php#resto" class="w3-bar-item w3-button">RESTO</a>
        <a href="WLResto.php#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="WLResto.php#myMap" class="w3-bar-item w3-button">CONTACT</a>
        <a href="logout.php" class="w3-bar-item w3-button" style="float: right;">LOGOUT</a>
    </div>
</div>

<!-- Content -->
<div class="bgimg">
    <div class="centered-btns">
        <h1>My Account</h1>
        <h2>Welcome Back <?= htmlspecialchars($name) ?>!</h2>
        <button onclick="location.href='my_reviews.php'">My Review</button>
        <button onclick="location.href='recent_views.php'">My Recent View Recipes</button>
        <button onclick="location.href='favorite_recipes.php'">My Favorite Recipe</button>
        <button onclick="location.href='logout.php'">Log Out</button>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
    <p>&copy; All Right Reserved.</p>
</footer>

</body>
</html>
