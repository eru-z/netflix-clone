<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "netflix"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email is already registered!');</script>";
        exit();
    }
    $stmt->close();

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, is_admin) VALUES (?, ?, ?, ?, 0)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Account created successfully! You can now log in.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error occurred! Please try again.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Netflix Sign Up</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #141414;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/04ef06cc-5f81-4a8e-8db0-6430ba4af286/web/MK-en-20250224-TRIFECTA-perspective_b3c96acd-0abc-475e-b269-69eab8311406_small.jpg') no-repeat center center/cover;
            filter: brightness(30%);
            z-index: -1;
        }

        .logo {
            position: absolute;
            top: 2rem;
            left: 2rem;
        }

        .logo img {
            width: 150px;
        }

        .signup-box {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 2.5rem;
            border-radius: 8px;
            width: 380px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            max-width: 100%;
            margin: 0 auto;
        }

        .signup-box h2 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
            font-weight: bold;
            color: #fff;
        }

        .input-field {
            width: 100%;
            padding: 0.9rem;
            margin-bottom: 1rem;
            background-color: #333;
            color: white;
            border: 1px solid #444;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: #E50914;
            outline: none;
        }

        .signup-button {
            width: 100%;
            padding: 1rem;
            background-color: #E50914;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-button:hover {
            background-color: #B81C1C;
        }

        .signup-link {
            margin-top: 1.5rem;
            font-size: 1rem;
            color: #B3B3B3;
        }

        .signup-link a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .signup-box {
                width: 90%;
                padding: 2rem;
            }

            .logo img {
                width: 130px;
            }

            .signup-box h2 {
                font-size: 1.5rem;
            }

            .input-field {
                font-size: 0.9rem;
                padding: 0.8rem;
            }

            .signup-button {
                font-size: 1rem;
                padding: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .signup-box {
                width: 95%;
                padding: 1.5rem;
            }

            .logo img {
                width: 120px;
            }

            .signup-box h2 {
                font-size: 1.3rem;
            }

            .input-field {
                font-size: 0.8rem;
                padding: 0.7rem;
            }

            .signup-button {
                font-size: 0.9rem;
                padding: 0.7rem;
            }
        }
    </style>
</head>
<body>
<div class="background"></div>
<div class="logo">
    <img src="Logos-Readability-Netflix-logo-removebg-preview.png" alt="Netflix Logo">
</div>
<div class="signup-box">
    <h2>Create an Account</h2>
    <form action="register.php" method="POST">
        <input class="input-field" type="text" name="first_name" placeholder="First Name" required/>
        <input class="input-field" type="text" name="last_name" placeholder="Last Name" required/>
        <input class="input-field" type="email" name="email" placeholder="Email address" required/>
        <input class="input-field" type="password" name="password" placeholder="Password" required/>
        <input class="input-field" type="password" name="confirm_password" placeholder="Confirm Password" required/>
        <button class="signup-button" type="submit">Sign Up</button>
    </form>
    <div class="signup-link">
        Already have an account? <a href="login.php">Login!</a>
    </div>
</div>
</body>
</html>
