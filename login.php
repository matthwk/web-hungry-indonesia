<?php
// Start the session at the very beginning
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = '127.0.0.1';
$dbname = 'HungryIndonesia';
$dbUsername = 'root';
$dbPassword = ''; // Use the correct password for your database

// If user is already logged in, redirect to the account page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: account.php');
    exit;
}

$errorMessage = '';

// Check if the form is submitted
if (isset($_POST['login'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $formPassword = $_POST['password']; // The password the user entered

    // Create a new PDO instance
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement to prevent SQL injection
        $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($user && password_verify($formPassword, $user['password'])) {
            // Successful login
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            header('Location: account.php');
            exit;
        } else {
            // Set an error message if login failed
            $errorMessage = 'Invalid email or password.';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - HungryIndonesia</title>
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
    <a href="login.php" class="w3-bar-item w3-button" style="float: right;">LOGIN</a>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <!-- ... other header content ... -->
</header>

<!-- Login Form Container -->
<div class="w3-container w3-padding-64 w3-center" id="login">
  <div class="w3-content">
    <h1 class="w3-jumbo">Login</h1>
    
    <!-- Display error message if login fails -->
    <?php if (!empty($errorMessage)): ?>
        <p class="error"><?= htmlspecialchars($errorMessage) ?></p>
    <?php endif; ?>

    <!-- Login form -->
    <form action="login.php" method="post" class="w3-container w3-card-4 w3-padding-16 w3-white">
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input" type="email" name="email" id="email" required>
        </div>
        <div class="w3-section">
            <label>Password</label>
            <input class="w3-input" type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="login" class="w3-button w3-red w3-large">Login</button>
    </form>

    <p>Don’t have an account? <a href="signup.php">Sign Up</a></p>
  </div>
</div>

<!-- ... rest of the HTML content ... -->

<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>&copy; All Right Reserved.</p>
</footer>

</body>
</html>
