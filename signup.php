<?php
// Connection to the database
$servername = "localhost"; // Change this if your server is different
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "netflix"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize user input
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to login page after successful signup
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Sign Up</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://i.pinimg.com/736x/9e/95/88/9e9588789c459f353b56bf3264cb8abc.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
        }
        body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
}
        .container {
            display: flex;
            background: rgba(0, 0, 0, 0.75);
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 600px;
            max-width: 100%;
        }
        .image-container {
            width: 50%;
            display: none;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .form-container {
            width: 100%;
            padding: 32px;
            background: url('https://i.pinimg.com/736x/19/8b/2f/198b2f01e73b905772279616eccc7c65.jpg');
            background-size: cover;
            position: relative;
        }
        .form-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.75);
        }
        .header, h2, form {
            position: relative;
            z-index: 1;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        .header img {
            height: 32px;
        }
        .header a {
            color: white;
            text-decoration: none;
        }
        .header a span {
            color: red;
        }
        h2 {
            color: white;
            font-size: 24px;
            margin-bottom: 24px;
        }

        .input-group {
    display: flex;
    gap: 24px; /* Increased space between First Name & Last Name */
    width: 100%;
    margin-bottom: 20px; /* Space below the input group */
}

.input-group input {
    flex: 1;
    min-width: 0;
}

input {
    width: 100%;
    padding: 14px;
    background: #333;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin-bottom: 20px; /* More space between individual inputs */
    box-sizing: border-box; /* Ensures padding doesn't affect width */
}

.password-container {
    position: relative;
    width: 100%;
    margin-bottom: 24px; /* Increased space below password field */
}

.password-container input {
    width: 100%;
    padding-right: 45px; /* Prevents text overlap with the eye icon */
}

.password-container i {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: gray;
    cursor: pointer;
}

@media (max-width: 600px) {
    .input-group {
        flex-direction: column;
        gap: 16px; /* Smaller gap for mobile */
    }

    .input-group input {
        width: 100%;
    }
}

.facebook-button {
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    color: blue;
    border-radius: 4px;
    padding: 10px;
    cursor: pointer;
    border: 1px solid blue;
}

.facebook-button i {
    margin-right: 8px;
    color: blue;
}

.button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(to right, red, black 100%);
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: opacity 0.3s;
}

.button:hover {
    opacity: 0.85;
}


/* Align 'Remember me' checkbox with the button */
.checkbox-container {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
    margin-left: 2px; /* Adjust alignment */
}

.checkbox-container input {
    width: 16px;
    height: 16px;
    margin-top: 20px;
}

.checkbox-container label {
    color: white;
    font-size: 14px;
}
        .recaptcha-text {
            color: gray;
            font-size: 12px;
            margin-top: 8px;
        }
        .recaptcha-text a {
            color: blue;
            text-decoration: none;
        }
        @media (min-width: 768px) {
            .container {
                width: 800px;
            }
            .image-container {
                display: block;
            }
            .form-container {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="images/Screenshot_2025-03-18_224753-removebg-preview.png" alt="Netflix promotional images">
        </div>
        <div class="form-container">
            <div class="header">
                <img src="images/Logos-Readability-Netflix-logo-removebg-preview.png" alt="Netflix logo">
                <a href="login.php">Already have an Account? <span>Sign in</span></a>
            </div>
            <h2>Sign up</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Email or Phone No" required class="mb-4">
                <div class="password-container">
                    <input type="password" name="password" placeholder="Create New Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <button type="submit" class="button">Continue</button>
                <div class="checkbox-container">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="facebook-button">
                    <i class="fab fa-facebook-f"></i> Facebook
                </div>
                <p class="recaptcha-text">
                    This page is protected by Google reCAPTCHA to ensure you're not a bot.
                    <a href="#">Learn more.</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
