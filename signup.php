<?php
// Database configuration
$host = '127.0.0.1';
$dbname = 'HungryIndonesia';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['signup'])) {
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

        // Prepare SQL statement to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO user (name, email, password, birthdate) VALUES (?, ?, ?, ?)");
        $stmt->execute([$fullname, $email, $password, $birthdate]);

        // Redirect or inform the user
        echo "Registration successful. <a href='login.php'>Login here</a>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - HungryIndonesia</title>
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
    <a href="WLResto.php" class="w3-bar-item w3-button">HOME</a>
    <!-- ... other navbar items ... -->
    <a href="signup.php" class="w3-bar-item w3-button" style="float: right;">SIGN UP</a>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <!-- ... other header content ... -->
</header>

<!-- Signup Form Container -->
<div class="w3-container w3-padding-64 w3-center" id="signup">
  <div class="w3-content">
    <h1 class="w3-jumbo">Sign Up</h1>
    
    <!-- Signup form -->
    <form action="signup.php" method="post" class="w3-container w3-card-4 w3-padding-16 w3-white">
        <div class="w3-section">
            <label>Full Name</label>
            <input class="w3-input" type="text" name="fullname" required>
        </div>
        <div class="w3-section">
            <label>Date of Birth</label>
            <input class="w3-input" type="date" name="birthdate" required>
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input" type="email" name="email" required>
        </div>
        <div class="w3-section">
            <label>Password</label>
            <input class="w3-input" type="password" name="password" required>
        </div>
        <button type="submit" name="signup" class="w3-button w3-red w3-large">Sign Up</button>
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</div>

<!-- ... rest of the HTML content ... -->

<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>&copy; All Right Reserved.</p>
</footer>

</body>
</html>
