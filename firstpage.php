<?php
// Include database connection
require_once 'db_connection.php'; // Update with your actual DB connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Query the database to check if the email exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If the email exists, redirect to login.php
    if ($result->num_rows > 0) {
        header('Location: login.php');
        exit();
    } else {
        // If the email is new, redirect to signup.php
        header('Location: signup.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Landing Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            overflow-x: hidden;
            background-color: black;
            color: white;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100vh;
            background: url('https://assets.nflxext.com/ffe/siteui/vlv3/04ef06cc-5f81-4a8e-8db0-6430ba4af286/web/MK-en-20250224-TRIFECTA-perspective_b3c96acd-0abc-475e-b269-69eab8311406_small.jpg') no-repeat center center/cover;
            filter: brightness(40%);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
        }

        .container {
            position: relative;
            z-index: 10;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .header {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }

        .logo img {
            width: 250px;
            margin-top: -40px;
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


        .content h1 {
            font-size: 60px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content h2 {
            font-size: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
        }

        .content p {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .email-box {
            margin-top: 20px;
            display: flex;
            width: 100%;
            max-width: 600px;
            gap: 10px;
        }

        .email-box input {
            flex: 1;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            outline: none;
        }

        .email-box button {
            padding: 15px 25px;
            background: linear-gradient(150deg, #f40612,rgb(5, 0, 1));
            color: white;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .email-box button:hover {
            background: linear-gradient(150deg, #f40612,rgb(5, 0, 1));
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .email-box {
                flex-direction: column;
                gap: 10px;
            }

            .email-box input {
                border-radius: 5px;
            }

            .email-box button {
                width: 100%;
            }

            .logo img {
                width: 200px;
            }

            .content h1 {
                font-size: 45px;
            }

            .content h2 {
                font-size: 18px;
            }

            .content p {
                font-size: 14px;
            }

            .header {
                padding: 10px 20px;
            }
        }
        .carousel-container {
    width: 80%;
    margin: 0 auto;
    padding: 2rem;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

h2 {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    margin-left: -850px;
}

.carousels {
    position: relative;
    padding: 2rem 0;
    margin-bottom: 3rem;
}

.carousels-inner {
    display: flex;
    overflow: hidden;
    scroll-behavior: smooth;
    width: 100%;
}

.carousels-item {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousels-item img {
    width: 140px;
    height: 300px;
    border-radius: 1rem;
    margin-right: 20px;
}


.relative {
    position: relative;
}

.relative .text-6xl {
    position: absolute;
    top: 5px;
    left: -10px;
    font-size: 5rem;
    font-weight: bold;
    color: black;
    text-shadow: 0 0 5px white, 0 0 10px white, 0 0 15px white;
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.26); /* Semi-transparent white background */
    color: white; /* White color for arrows */
    border: none;
    font-size: 24px; /* Slightly larger for better visibility */
    padding: 1rem;
    cursor: pointer;
    border-radius: 40%; /* Circular button shape */
    z-index: 1;
    width: 10px; /* Adjusted for Netflix-style size */
    height: 100px; /* Same as width to keep it circular */
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Optional: subtle shadow effect */
}

.carousel-control-prev {
    left: -60px; /* Positioning to the left */
}

.carousel-control-next {
    right: -60px; /* Positioning to the right */
}

/* Optional: Increase the size of arrows when hovered */
.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: rgba(255, 255, 255, 0.15); /* Slightly more opaque on hover */
    font-size: 28px; /* Make the arrow bigger */
}


.reasons-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.reasons-container h1 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 2rem;
    color: #fff;
    margin-left: -800px;
}

.grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    padding: 0 1rem;
}

@media (min-width: 640px) {
    .grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.rscard,
.rscard1 {
    position: relative;
    background-color: rgba(45, 55, 72, 0.48);
    padding: 1.5rem;
    border-radius: 0.75rem;
    border: 0.5px solid rgba(255, 255, 255, 0.39);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    text-align: left;
    min-height: 250px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #ffffff;
    overflow: hidden;
}

.rscard h3,
.rscard1 h3 {
    font-size: 25px;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #f7fafc;
    text-shadow: 0 1px 4px rgba(0,0,0,0.3);
}

.rscard p,
.rscard1 p {
    font-size: 15px;
    line-height: 1.8;
    color:rgba(226, 232, 240, 0.63);
    text-shadow: 0 1px 4px rgba(0,0,0,0.2);
}

/* Image bottom right */
.rscard img,
.rscard1 img {
    position: absolute;
    bottom: 1rem;
    right: 1rem;
    width: 4.5rem;
    height: 4.5rem;
    object-fit: contain;
}
.faq-container {
  max-width: 1200px;
  margin-left: 130px;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}


    .faq-title {
      font-size: 24px;
      font-weight: bold;
      text-align: left;
      margin-bottom: 30px;
    }

    .faq-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background:rgb(44, 44, 44);
      padding: 18px 22px;
      border-radius: 10px;
      border: 0.5px solid rgba(187, 187, 187, 0.6);
      margin-bottom: 15px;
      cursor: pointer;
      transition: background 0.2s ease;
      height: 70px;
    }

    .faq-item:hover {
      background:rgb(68, 68, 68);
    }

    .faq-text {
      font-size: 16px;
    }

    .faq-plus {
      font-size: 30px;
      font-weight: bold;
      color: #fff;
      transition: transform 0.3s;
    }
    
    .faq-content {
      display: none;
      padding: 10px 22px 20px 22px;
      background: rgb(44, 44, 44);
      border-radius: 15px;
      font-size: 15px;
      line-height: 1.5;
      color: #fff;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    .active .faq-plus {
      transform: rotate(45deg);
    }

    .active + .faq-content {
      display: block;
    }
    .footer-container {
            margin: 0 auto;
            max-width: 1000px;
            padding: 60px 20px;
            text-align: center;
        }

        .footer-top p {
            margin-bottom: 20px;
            font-size: 15px;
        }

        .email-form {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 100px;
        }

        .email-form input {
            padding: 12px 16px;
            border: none;
            width: 300px;
            height: 50px;
            outline: none;
            font-size: 16px;
            border-radius: 50px;
            background-color: #333;
            color: white;
        }

        .email-form button {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #e50914;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 10px;
        }

        .footer-links {
            margin-left: -100px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 20px;
            text-align: left;
            margin-bottom: 40px;
        }

        .footer-links a {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: #aaa;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .language-select {
            margin-bottom: 20px;
        }

        .language-select button {
            margin-left: -1030px;
            background: transparent;
            color: white;
            border: 1px solid #666;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }

        .language-select i {
            margin: 0 5px;
        }

        .footer-note {
            font-size: 13px;
            color: #aaa;
            margin-left: -1030px;
        }
</style>
</head>
<body>
    <div class="background"></div>
    <div class="overlay"></div>
    <header class="header">
        <div class="logo"><img src="images/Logos-Readability-Netflix-logo-removebg-preview.png" alt="Netflix Logo"></div>
        <div class="buttons">
    <a href="signup.php" class="btn">Sign Up</a>
    <a href="login.php" class="btn">Log In</a>
</div>
    </header>
    <div class="container">
        <div class="content">
            <h1>Unlimited movies, TV <br>shows, and more</h1>
            <h2>Starts at EUR 4.99. Cancel anytime.</h2>
            <p>Ready to watch? Enter your email and password to sign in or create a new membership.</p>

            <form action="" method="post">
                <div class="email-box">
                    <input type="email" name="email" placeholder="Email address" required>
                    <button type="submit">Get Started <i class="fas fa-chevron-right"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="carousel-container">
        <h2>Trending Now</h2>
        <div class="carousels">
            <div class="carousels-inner">
                <div class="carousels-item">
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1490-1489.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABU0KioSDk_1IqZPyrTYqad7DCXqs5XKGTYN1aeJRAr8sssfGM9JfQ8xmaieMe9GrGmg2veFwnXeUttM4wMnUGl1NpRUe-V5OLxYUba15ZHNojVjzz0eZjQAwaDsEuJuMzQ4GdnuBw1CUHvfwGTwRIiTiqhaEUzQdAlZuwTmUUhqMGmUnBDb9Dtgj9P9QYEZVY9wH_P7LznBfZEutk5ZWLOSeyre_doO6mifLeg.jpg?r=c6e" alt="The Endless Night poster" class="cursor-pointer">
                        <div class="text-6xl">1</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1490-1489.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABUCRF9JkqcVu18cEqVW6xTJ90YoeiQE-WIrIuyD36upfbFjnkSJz79VYAwhLaT20jSNbZcDRamMmNFU7nEmOQ59N-x5MFvhQvttTOzrm2ld6vw-fbiJys7ve_htngLl9xeqNQIAVJ0YsO7n8iv_521pnd70YKvxNodq411nJW87ZeYRrjZJxZhGo7ArzVY1WSBtJg92aawWzFojD.jpg?r=127" alt="Squid Game poster" class="cursor-pointer">
                        <div class="text-6xl">2</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABa4kYSC89lfiJoGIkBDr3lucuMgdlm26GVVaVypEJhZMXxBkt_boQ_9Ey0Yq27WYSf-CneJEjg1SjSUlyYmcjp2f5-Jn0ku3ZZF3V-vwEMKU1sEACUlPLYJd7UWn08GlGm4IE4jjpKVzdgwbBUMzteS5N71Kf_tnCyMv5jALYfMMk-5Z8QnPoE27S56wVyOHZ8Uk1kIrF6Fzc9QkCuJO4tgZHaVOMbjb4-jpGw.jpg?r=e14" alt="Pulse poster" class="cursor-pointer">
                        <div class="text-6xl">3</div>
                    </div>
                </div>
                <div class="carousels-item">
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABQqg46PLQtxGJ1L_wZ6XDj43-eCSDaOtyfcMBgsa4pXMAbiCA2koFwEiHj5W2-oiaQKmz0G0GNJ2IXIAxuHNKfdCfZ5e78REc1vrUv1LHciPMW1YmFSmS4s5LnDhPGuFTYnxo85gvWYUnuwzJGho8Acg9-ll9KjofMCm9MyGiPRz4A5Ta66Bi3Pcn3PFh3I-KglW2njc7SzAgYe9.jpg?r=48b" alt="Jurassic World poster" class="cursor-pointer"> 
                        <div class="text-6xl">4</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABfKGcmGbT5Wu0lqXgfGbFUmvdPv8_OBM_rcppdJUFpNxajVYFkwThKxi6Xh7VQ6qMiu1MR-bRL2olq-Bn97XBudxWyQb2mN8m-vDEqYxr9M-UBXSsz2N3ZowfyLzfUHaBIsP0SLP8ALr_4-RebuSM2B6MlapLdXq9IJdQXqYcdOwi3AUlkQfUQ3w3d-VRrZAlZ22zeyMa4-qSPoP.jpg?r=ccd" alt="Life List poster" class="cursor-pointer">
                        <div class="text-6xl">5</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABRxu42no4lq-ux-gSKX8ipB0qRAIAs5wSW5B5NyBsQ5o2EmtPwP2KKQTYZOmUNW64jcFqsPmV8IV2bGCWBeSl0XiaG0aug1N5mQLiyNcc8wGZALzlpz2JMXqOvBjyt-MakwPCTOWCBMmS0y5Wfhi5PK47bomZxoUgoPm4Ap33A.jpg?r=8ab" alt="Movie poster" class="cursor-pointer">
                        <div class="text-6xl">6</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABfqM1t0l-7BJ82eBaj1XUY7fmS_703rx9bF8yOdLr9m87B60iAuCM9QLIxEPJwpG9kM179SQAgd3rucVLE-QOLD-orzcGiRgzHZMaTHDQVYnZsNyVTOUP4qbjtKbK7BePeIBTuCvpcvHkxecPMBt.jpg?r=581" alt="Movie poster" class="cursor-pointer">
                        <div class="text-6xl">7</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABW-7GzEBsd_UCRZDwj_agnOjklUpXCtEONiYZSV27u78Cx7u20u93gJkXcdiMJ2ym4oA1pneFY86iEGKvEXDuuiDCoCMA5dfvmURQ02EpCVouEIpwIzamFI6OXFDQtbay_II3nYwVP0spZZNcDibVt5GYxKovbSlAFhdGXjkXasiA0U3bpx6BQhGN8U7nnkIV3WG7icGDUZR12Kk.jpg?r=3a5" alt="Movie poster" class="cursor-pointer">
                        <div class="text-6xl">8</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABa9xC-rr_msmEgWdqet5w7PIuc922yAH77xX7iH-NgFNFMAmwn7KG8jcmrBRLhX9bzvk32dJq8LInnmftaWaePMdidgyed1sKCxSqCbY41aDdm5JgDgMaFz86U19q9UC8Fg0UPnLLN5L-O_fFR7zcjoHNnfH-Lvap6rFQrNBCyO8C04Cnma6Sz-inZ_p0spxZ_g7nF3tYdxsesOj.jpg?r=7d7" alt="Movie poster" class="cursor-pointer">
                        <div class="text-6xl">9</div>
                    </div>
                    <div class="relative" style="cursor: pointer;">
                        <img src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/-klpX4b1RECP-oGX3Uvz90PrgHE/AAAABSICZP0bvTCOFrvxGiyv8Aup5VY5u0OKjY_Ln45zeUFXsNn1cx1SFuH4nbyWbyLwAMJlbB12PrM_W8sd49nNibdYqrpSsMiy2iaOdO6T7YqlSeeH6pZktgQIlHf5UbmVd1X6Gak6UCIuOzOP2C5f.jpg?r=607" alt="Movie poster" class="cursor-pointer">
                        <div class="text-6xl">10</div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" onclick="moveCarousel('prev')">
                &#10094;
            </button>
            <button class="carousel-control-next" onclick="moveCarousel('next')">
                &#10095;
            </button>
        </div>
    </div>


    <script>
        let currentIndex = 0;
        const items = document.querySelectorAll('.carousels-item');
        const totalItems = items.length;

        function moveCarousel(direction) {
            if (direction === 'next') {
                currentIndex = (currentIndex + 1) % totalItems;
            } else if (direction === 'prev') {
                currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            }
            updateCarousel();
        }

        function updateCarousel() {
            const offset = -currentIndex * 50;
            items.forEach(item => {
                item.style.transform = `translateX(${offset}%)`;
            });
        }
    </script>


<div id="popupContainer" style="display: none; position: fixed; top: 0; left: 0; 
    width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); 
    z-index: 9999; justify-content: center; align-items: center;">
    
    <div style="position: relative; width: 70%; max-width: 700px; height: 600px; border-radius: 10px; overflow: hidden; display: flex; background-color: black; box-shadow: 0 0 30px rgba(0,0,0,0.6);">
        
        <span id="closePopup" style="position: absolute; top: 15px; right: 20px; font-size: 26px; color: white; cursor: pointer; z-index: 2;">&times;</span>
        
        <div style="flex: 1; background: linear-gradient(to right, rgba(0,0,0,0.9) 30%, rgba(0,0,0,0.5) 60%, transparent 100%), 
            url('images/Screen%20Shot%202025-04-08%20at%2001.27.12.png') 
            center/cover no-repeat; display: flex; flex-direction: column; justify-content: flex-end; padding: 40px; color: white;">
            
            <img src="images/Screen_Shot_2025-04-11_at_00.03.11-removebg-preview.png" alt="Small Logo" style="width: 100px;">
            <img src="images/Screen_Shot_2025-04-11_at_00.05.44-removebg-preview.png" alt="Big Logo" style="width: 100%; max-width: 400px; margin-bottom: 20px;">
            
            <div style="font-size: 14px; color: #b3b3b3; margin-bottom: 15px;">
                2024 • 16+ • Show • Thrillers • Dramas
            </div>
            
            <p style="max-width: 100%; font-size: 15px; color: #ccc; margin-bottom: 25px;">
                Hundreds of cash-strapped players accept a strange invitation to compete in children's games. Inside, a tempting prize awaits — with deadly high stakes.
            </p>
            
            <div style="width: 100%; display: flex; align-items: center; gap: 10px;">
                <input type="email" placeholder="Email address" id="popupEmail" style="padding: 16px 24px; border-radius: 30px; border: 2px solid grey; outline: none; width: 100%; font-size: 16px; background-color: #000; color: white; transition: border-color 0.3s;">
                <button style="padding: 16px 24px; background-color: red; color: white; border: none; border-radius: 30px; font-weight: bold; font-size: 16px; cursor: pointer; white-space: nowrap;">Get Started</button>
            </div>
        </div>
    </div>
</div>

<style>
    #popupEmail:hover {
        border-color: red;
    }
</style>




<div class="reasons-container">
        <h1>More Reasons to Join</h1>
        <div class="grid">
            <div class="rscard">
                <h3>Enjoy on your TV</h3>
                <p>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</p>
                <img src="images/Screen_Shot_2025-04-05_at_10.59.18-removebg-preview.png" alt="TV icon">
            </div>
            <div class="rscard">
                <h3>Download your shows to watch offline</h3>
                <p>Save your favorites easily and always have something to watch.</p>
                <img src="images/Screen_Shot_2025-04-05_at_12.13.33-removebg-preview.png" alt="Download icon">
            </div>
            <div class="rscard1">
                <h3>Watch everywhere</h3>
                <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
                <img src="images/Screen_Shot_2025-04-05_at_12.13.45-removebg-preview.png" alt="Watch everywhere icon">
            </div>
            <div class="rscard">
                <h3>Create profiles for kids</h3>
                <p>Send kids on adventures with their favorite characters in a space made just for them — free with your membership.</p>
                <img src="images/Screen_Shot_2025-04-05_at_12.13.52-removebg-preview.png" alt="Kids profiles icon">
            </div>
        </div>
    </div>

    <div class="faq-container">
    <div class="faq-title">Frequently Asked Questions</div>

    <div class="faq-item"> 
      <div class="faq-text">What is Netflix?</div>
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">Netflix is a streaming service that offers a wide variety of TV shows, movies, documentaries, and more—across many genres and languages. 
        You can watch on-demand, without ads, on multiple devices.</div>

    <div class="faq-item">
      <div class="faq-text">How much does Netflix costs?</div>
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">Netflix offers different plans depending on your country. In most places, the common plans are:
Standard with ads – Cheaper option, with ads and limited features
Standard – No ads, HD streaming, 2 screens
Premium – No ads, Ultra HD (4K), 4 screens
Prices vary, so it’s best to check Netflix’s official website for your region.</div>

    <div class="faq-item">
      <div class="faq-text">Where can I watch?</div> 
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">You can watch Netflix on:
Smartphones and tablets (iOS/Android)
Smart TVs
Laptops/desktops
Streaming devices (like Roku, Apple TV, Chromecast)
Game consoles (like PlayStation or Xbox)
Just log in to the Netflix app or website.</div>

    <div class="faq-item">
      <div class="faq-text">How do I cancel?</div> 
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">You can cancel anytime:
Log in to your Netflix account
Go to Account Settings
Click on Cancel Membership
Confirm your cancellation
You’ll still have access until the end of your current billing period.</div>

    <div class="faq-item">
      <div class="faq-text">What can I watch on Netflix?</div>
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">Netflix has a huge library, including:
Netflix Originals (like Stranger Things, Wednesday, The Witcher)
Popular movies and series
Documentaries and reality shows
Kids content and anime
Content in many different languages</div>

    <div class="faq-item">
      <div class="faq-text">Is Netflix good for kids?</div>
      <div class="faq-plus">+</div>
    </div>
    <div class="faq-content">Changes can be made within 24 hours of placing the order. Contact us ASAP.</div>
  </div>

  <div class="footer-container">
        <div class="footer-top">
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <form class="email-form">
                <input type="email" placeholder="Email address" required>
                <button type="submit">Get Started <i class="fas fa-chevron-right"></i></button>
            </form>
        </div>

        <div class="footer-links">
            <div>
                <a href="#">Questions? Contact us.</a>
                <a href="#">FAQ</a>
                <a href="#">Investor Relations</a>
                <a href="#">Privacy</a>
                <a href="#">Speed Test</a>
            </div>
            <div>
                <a href="#">Help Center</a>
                <a href="#">Jobs</a>
                <a href="#">Cookie Preferences</a>
                <a href="#">Legal Notices</a>
            </div>
            <div>
                <a href="#">Account</a>
                <a href="#">Ways to Watch</a>
                <a href="#">Corporate Information</a>
                <a href="#">Only on Netflix</a>
            </div>
            <div>
                <a href="#">Media Center</a>
                <a href="#">Terms of Use</a>
                <a href="#">Contact Us</a>
                <a href="#">Ad Choices</a>
            </div>
        </div>

        <div class="language-select">
            <button><i class="fas fa-globe"></i> English <i class="fas fa-caret-down"></i></button>
        </div>

        <div class="footer-note">Netflix North Macedonia</div>
    </div>

  <script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      item.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>
<script>
    const popup = document.getElementById('popupContainer');
    const closePopup = document.getElementById('closePopup');
    const carouselImages = document.querySelectorAll('.carousels-item img');

    carouselImages.forEach(img => {
        img.addEventListener('click', () => {
            popup.style.display = 'flex';
        });
    });

    closePopup.addEventListener('click', () => {
        popup.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.style.display = 'none';
        }
    });
</script>
</body>
</html>