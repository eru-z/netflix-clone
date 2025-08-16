<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            background: linear-gradient(to bottom, #0f0f0f, rgb(70, 31, 42), #0f0f0f);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin: 0;
        }
        
        .logo {
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 24px;
            font-weight: bold;
            color: white;
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 150px;
            height: 150px;
            margin-right: 10px;
        }
        .sign-in-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            color: black;
            border-radius: 20px;
            padding: 8px 20px;
            border: none;
            font-weight: bold;
        }
        .overlay {
            left: -290px;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/04ef06cc-5f81-4a8e-8db0-6430ba4af286/web/MK-en-20250224-TRIFECTA-perspective_b3c96acd-0abc-475e-b269-69eab8311406_small.jpg') center/cover no-repeat;
            width: 120%;
            top: 50px;
            padding: 300px;
            text-align: center;
            border-radius: 60px; /* Adjust the bottom corners */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            position: relative;
            color: white;
            overflow: hidden; /* Ensure the content stays within the curve */
        }
        .overlay img {
            width: 100px;
            height: auto;
            margin-bottom: 15px;
        }
        .text-overlay {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .text-overlay h1 {
            font-size: 60px;
            font-weight: 700;
        }
        .search-bar {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            width: 50%;
        }
        .search-bar input {
            border-radius: 20px;
            border: none;
            padding: 10px;
            width: 60%;
            outline: none;
        }
        .search-bar button {
            border-radius: 20px;
            border: none;
            padding: 10px 20px;
            background: red;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }

        /* New Section Style */
        .section {
            padding: 20px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            width: 80%;
            max-width: 1200px;
        }
    </style>
    <div class="container">
        <!-- First Section -->
        <div class="section">
            <div class="logo">
                <img src="images/Logos-Readability-Netflix-logo-removebg-preview.png" alt="Logo"> 
            </div>
            <a href="login.php">
                <button class="sign-in-btn">Sign In</button>
            </a>
            <div class="overlay">
                <img src="overlay-image.png" alt="Overlay Image">
                <div class="text-overlay">
                    <h1>Unlimited movies, TV <br>shows, and more</h1>
                    <h3>Starts at EUR 4.99. Cancel anytime.</h3>
                    <p>Ready to watch? Enter your email and password to sign in or create a new membership.</p>
                    <form action="" method="POST" class="search-bar">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">Get Started <i class="fas fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
