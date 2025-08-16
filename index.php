<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Who's Watching?</title>
  <style>
    body {
      overflow-x: hidden;
      background-color:rgb(0, 0, 0);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      font-family: 'Helvetica', sans-serif;
    }

    .container {
      text-align: center;
    }

    .header {
            left: -40px;
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }

        .logo img {
            width: 200px;
            margin-top: -40px;
        }

    h1 {
      font-size: 50px;
      margin-bottom: 2rem;
      font-weight: 600;
      color: white;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    }

    .profiles {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }

    .profile img {
      width: 150px;
      height: 150px;
      margin-bottom: 1rem;
    }

    .profile:hover img {
      border: 3px solid #fff;
    }
    .profile p {
      color: #A3A3A3;
      margin-top: 0.5rem;
      font-weight: 500;
    }

    .profile:hover p {
      color: #fff;
    }

    .profile:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow */
      transition: all 0.3s ease;
    }

    button {
      color: #A3A3A3;
      border: 2px solid #A3A3A3;
      padding: 0.75rem 2rem;
      cursor: pointer;
      background-color: transparent;
      font-size: 1rem;
      border-radius: 5px;
      margin-top: 2rem;
      transition: all 0.3s ease;
    }

    button:hover {
      color: #fff;
      border: 2px solid #fff;
      background-color: #e50914;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow */
      transition: all 0.3s ease;
    }

    .buttons {
  position: absolute;
  top: 20px; /* Adjust the vertical position */
  right: 20px; /* Adjust the horizontal position */
}

.buttons a {
  display: inline-block;
  background: linear-gradient(150deg, #f40612, rgb(5, 0, 1));
  color: white;
  text-decoration: none;
  padding: 10px 25px;
  border-radius: 5px;
  font-size: 1.1rem;
  margin-left: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.buttons a:hover {
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  transform: translateY(-2px);
}


    /* Responsive Design */
    @media (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
      }

      .profiles {
        gap: 1rem;
      }

      .profile img {
        width: 120px;
        height: 120px;
      }

      button {
        width: 100%;
        padding: 1rem;
      }
    }
  </style>
</head>
<body>

<div class="container">
<header class="header">
<div class="logo"><img src="images/Logos-Readability-Netflix-logo-removebg-preview.png" alt="Netflix Logo"></div>
</header>
<div class="buttons">
    <a href="signup.php" class="btn">Sign Up</a>
    <a href="login.php" class="btn">Log In</a>
</div>
    <h1>Who's watching?</h1>
    <div class="profiles">
      <div class="profile">
        <a href="main.php">
          <img src="images/Screenshot 2025-03-04 022613.png" alt="Blue smiling face">
        </a>
        <p>Erudita</p>
      </div>
      <div class="profile">
        <a href="main.php">
          <img src="images/Screenshot 2025-03-04 022624.png" alt="Green smiling face">
        </a>
        <p>Eru</p>
      </div>
      <div class="profile">
        <a href="main.php">
          <img src="images/Screenshot 2025-03-04 022634.png" alt="Yellow smiling face">
        </a>
        <p>E.Z</p>
      </div>
      <div class="profile">
        <a href="main.php">
          <img src="images/Screenshot 2025-03-04 022649.png" alt="Red smiling face">
        </a>
        <p>Dita</p>
      </div>
      <div class="profile">
        <a href="main.php">
          <img src="images/Screenshot 2025-03-04 022656.png" alt="Purple smiling face">
        </a>
        <p>Zil</p>
      </div>
    </div>
    <button>Manage Profiles</button>
</div>

</body>
</html>
