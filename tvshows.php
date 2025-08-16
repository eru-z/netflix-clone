<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <style>
    body {
    background-color: rgb(0, 0, 0);
    overflow-x: hidden;
    color: white;
    margin: 0;
    font-family: Arial, sans-serif;
}

.nav-bar {
    background: transparent;
    backdrop-filter: none;
    box-shadow: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 4%;
    position: fixed;
    width: 100%;
    top: -10px;
    left: 0;
    z-index: 10;
    transition: background-color 0.3s ease-in-out, height 0.3s ease-in-out;
}


.nav-scrolled {
    background-color: rgb(12, 12, 12);
    backdrop-filter: blur(8px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    height: 80px;
}


.nav-items-wrapper {
    display: flex;
    align-items: center;
    flex-grow: 1;
    margin-left: -30px;
}

.logo-container img {
    height: 55px;
    transition: transform 0.3s ease-in-out;
}

.logo-container img:hover {
    transform: scale(1.05);
}

.nav-links-container {
    display: flex;
}

.nav-links-container a {
    color: white;
    text-decoration: none;
    margin: 0 12px;
    font-size: 12px;
    font-weight: 100;
    text-transform: uppercase;
    transition: color 0.3s ease-in-out;
}

.nav-links-container a:hover {
    color: #b3b3b3;
}


.icon-container {
    display: flex;
    align-items: center;
    margin-right: 10px;
}

.icon-container i {
    font-size: 20px;
    color: white;
    cursor: pointer;
    transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
}

.icon-container i:hover {
    transform: scale(1.1);
}


.search-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.search-input {
    width: 0;
    opacity: 0;
    padding: 5px 10px;
    font-size: 14px;
    margin-left: 10px;
    border: none;
    outline: none;
    border: 1px solid white;
    transition: width 0.3s ease, opacity 0.3s ease;
    background-color: rgb(0, 0, 0);
    color: white;
}

.search-wrapper.active .search-input {
    width: 180px;
    opacity: 1;
}



.profile-menu-container {
    position: relative;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.profile-menu-container img {
    height: 32px;
    border-radius: 4px;
    margin-left: 15px;
    transition: opacity 0.3s ease-in-out;
}

.profile-menu-container img:hover {
    opacity: 0.8;
}

.profile-menu-container i {
    margin-left: 5px;
    color: white;
    transition: transform 0.3s ease;
}

/* Dropdown Menu */
.profile-dropdown {
    position: absolute;
    right: 0;
    top: 50px;
    background-color: rgb(22, 22, 22);
    padding: 10px 0;
    width: 200px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
    z-index: 10;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
}

.profile-menu-container.active .profile-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-item-container {
    display: flex;
    align-items: center;
    padding: 8px 15px;
    color: rgb(199, 199, 199);
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.2s ease-in-out;
}

.dropdown-item-container:hover {
    background-color: rgba(255, 255, 255, 0.1);
    text-decoration: underline;
}

.dropdown-item-container img {
    width: 26px;
    height: 26px;
    margin-right: 10px;
    border-radius: 4px;
}

.dropdown-item-container i {
    font-size: 18px;
    margin-right: 10px;
}

.profile-dropdown hr {
    margin: 8px 0;
    border-color: #444;
}



.overlay-layer {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: -1;
}

.content-container {
    position: absolute;
    top: 60%;
    left: 7%;
    transform: translateY(-50%);
    max-width: 500px;
    font-size: 20px;
}
.content-container .logoz {
    width: 150%;
    margin-top: -30px; 
    margin-bottom: -40px;
    margin-left: -85px;/* Adjust space below the logoz to separate from the next element */
}

.left-logo {
    width: 150px; 
    float: left; /* Position the image on the left */
    margin-right: 10px; /* Space between the image and next elements */
    margin-top: 120px; /* Move the logo further down */
}




main {
    position: relative;
    padding-top: 90px; /* Ensure navbar doesn’t overlap */
}
*, *::after, *::before {
box-sizing: border-box;
}

:root {
--handle-size: 3rem;
--img-gap: .50rem;
}


.slider-container {
    max-width: 90%;
    margin: auto;
    margin-bottom: 80px;
    margin-top: -70px; /* Moved further up */
}



h2 {
    font-size: 24px;
    margin-top: 120px;
    margin-bottom: -30px;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 15px;
    padding-bottom: 10px;
    position: relative; /* siguron që z-index brenda saj të funksionojë */
}


.card {
    position: relative;
    overflow: visible;
    margin-top: 0; 
    width: 100%;
    height: 150px;
    transition: transform 0.3s ease, z-index 0s, box-shadow 0.3s ease;
    z-index: 1;
}

.card:hover {
    transform: scale(1.1) translateY(-50px); 
    z-index: 999;
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.8);
    display: block; 
}


.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card:hover .hover-content {
    opacity: 1;
    transform: scale(1.05);
    pointer-events: auto;
}

.hover-content {
    border-radius: 5px;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 110%;
    height: 260px;
    background: rgba(20, 20, 20, 0.9);
    padding-bottom: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8);
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    z-index: 10; /* siguron që të jetë sipër çdo gjëje */
    pointer-events: none; /* opsional: nëse nuk do që të kapë hover */
}

.card:hover .hover-content {
    opacity: 1;
    transform: scale(1.05);
}

.hover-content img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.hover-content .info {
    font-size: 10px;
    color: white;
    margin-left: 15px;
    margin-right: 15px;
}


.buttons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
    align-items: center;
}


.icon-btn {
    background: transparent;
    color: white;
    padding: 8px;
    border-radius: 50%;
    border: 1px solid grey;
    cursor: pointer;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s, transform 0.3s;
}

.icon-btn.first {
    background: white;
    color: black;
}

.icon-btn.last {
    margin-left: auto;
}

.icon-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.05);
}

.icon-btn i {
    font-size: 15px;
}

.details {
    font-size: 14px;
    color: lightgrey;
    margin-top: 15px;
}

.border {
    border: 2px solid #b3b3b3;
    padding: 0 5px;
}

.small {
    height: 20px;
    font-size: 10px;
}

.genres {
    margin-top: 10px;
    font-size: 12px;
}

.genres span {
    margin-right: 5px;
}

.genres span:last-child span {
    color: grey;
}

.swiper-container {
    position: relative;
}

.swiper-wrapper {
    margin-top: 50px;
    display: flex;
    transition: transform 0.3s ease;
}

.swiper-slide {
    position: relative;
    flex-shrink: 0;
    width: 16rem;
    width: calc(100% / 5);
    height: 150px;
    margin-right: 15px;
    z-index: 1;
}

.swiper-slide:first-child {
    z-index: 2;
}

.swiper-slide:hover {
    z-index: 10;
}

.swiper-button-prev,
.swiper-button-next {
    position: absolute;
    border: none;
    top: 50%;
    transform: translateY(-50%);
    font-size: 30px;
    background: none;
    color: white;
    cursor: pointer;
    z-index: 20;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.swiper-container:hover .swiper-button-prev,
.swiper-container:hover .swiper-button-next {
    opacity: 1;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    color: white;
}

.swiper-button-prev {
    left: -10px;
}

.swiper-button-next {
    right: -10px;
}

/* Responsive Adjustments */
@media (max-width: 1024px) {
    .swiper-slide {
        width: calc(100% / 4); /* 4 slides per view */
    }
}

@media (max-width: 768px) {
    .swiper-slide {
        width: calc(100% / 3); /* 3 slides per view */
    }
    .swiper-button-prev,
    .swiper-button-next {
        font-size: 24px;
        padding: 8px;
    }
    h2 {
        font-size: 20px; /* Adjust h2 font size */
    }
}

@media (max-width: 480px) {
    .swiper-slide {
        width: 100%; /* 1 slide per view */
    }
    .swiper-button-prev,
    .swiper-button-next {
        font-size: 20px;
        padding: 6px;
    }
    .gallery {
        gap: 10px; /* Reduced gap */
        flex-direction: column; /* Stack items vertically */
    }
    .card {
        height: 120px; /* Reduced height for smaller screens */
    }
    .hover-content {
        height: 200px; /* Adjusted hover-content height */
    }
    h2 {
        font-size: 18px; /* Smaller h2 for mobile */
    }
    .icon-btn {
        width: 35px; /* Smaller buttons */
        height: 35px;
    }
}

        .footer-links {
            margin-top: 100px;
            margin-left: 250px;
            margin-right: 200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            text-align: left;
            margin-bottom: 40px;
        }

        .footer-links a {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: rgb(101, 101, 101);
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .language-select {
            margin-bottom: 20px;
        }

        .language-select button {
            margin-left: 250px;
            margin-top: -10px;
            background: transparent;
            color: rgb(101, 101, 101);
            border: 1px solid #666;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 4px;
            cursor: pointer;
        }

        .language-select button:hover {
            color: rgb(255, 255, 255);
        }


        .language-select i {
            margin: 0 5px;
        }

        .footer-note {
            font-size: 13px;
            color: rgb(101, 101, 101);
            margin-left: 250px;
        }
        .social-footericons {
    margin-top: -40px;
    display: flex;
    gap: 20px;
    margin-bottom: 10px;
}

.social-footericons a {
    color: #fff;
    font-size: 22px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-footericons a:hover {
    color: white;
}
</style>
<nav class="nav-bar">
    <div class="nav-items-wrapper">
        <div class="logo-container">
            <img src="images/Logos-Readability-Netflix-logo-removebg-preview.png" alt="Netflix Logo">
        </div>
        <div class="nav-links-container">
            <a href="main.php">Home</a>
            <a href="tvshows.php">TV Shows</a>
            <a href="movies.php">Movies</a>
            <a href="latest.php">Latest</a>
            <a href="mylist.php">My List</a>
            <a href="bblang.php">Browse by Languages</a>
        </div>
    </div>

    <div class="icon-container">
        <div class="search-wrapper">
            <i class="fa-solid fa-magnifying-glass" id="search-toggle"></i>
            <input type="text" placeholder="Titles, people, genres" class="search-input" />
        </div>
        <div class="notification-container cursor-pointer" id="notificationBell">
  <i class="fa-regular fa-bell text-white text-xl"></i>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    /* Hide the checkbox */
    #toggleNotification {
      display: none;
    }

    /* Show the panel when checkbox is checked */
    #toggleNotification:checked ~ #newsContainer {
      display: block;
    }
  </style>
  
        <div class="profile-menu-container">
            <img src="images/Screenshot 2025-03-04 022613.png" alt="Profile" width="30" height="30">
            <i class="fas fa-caret-down"></i>
            <div class="profile-dropdown">
                <a href="#" class="dropdown-item-container">
                    <img src="images/Screenshot 2025-03-04 022624.png" alt="Profile 1"> Eru
                </a>
                <a href="#" class="dropdown-item-container">
                    <img src="images/Screenshot 2025-03-04 022634.png" alt="Profile 2"> E.Z
                </a>
                <a href="#" class="dropdown-item-container">
                    <img src="images/Screenshot 2025-03-04 022649.png" alt="Profile 3"> Dita
                </a>
                <a href="#" class="dropdown-item-container">
                    <img src="images/Screenshot 2025-03-04 022656.png" alt="Profile 4"> Zil
                </a>
                <a href="#" class="dropdown-item-container">
                    <i class="fa-solid fa-pencil"></i> Manage Profiles
                </a>
                <a href="#" class="dropdown-item-container">
                    <i class="fa-solid fa-money-bill-transfer"></i> Transfer Profile
                </a>
                <a href="#" class="dropdown-item-container">
                    <i class="fa-regular fa-user"></i> Account
                </a>
                <a href="#" class="dropdown-item-container">
                    <i class="fa-solid fa-question"></i> Help Center
                </a>
                <hr>
                <a href="logout.php" class="dropdown-item-container">Sign out of Netflix</a>
            </div>
        </div>
    </div>
</nav>


<script>
    const searchToggle = document.getElementById("search-toggle");
    const searchWrapper = document.querySelector(".search-wrapper");
    const profileMenu = document.querySelector(".profile-menu-container");

    document.addEventListener("click", function (e) {
        // Handle search input
        if (searchWrapper.contains(e.target)) {
            searchWrapper.classList.add("active");
        } else {
            searchWrapper.classList.remove("active");
        }

        // Handle profile dropdown
        if (profileMenu.contains(e.target)) {
            profileMenu.classList.toggle("active");
        } else {
            profileMenu.classList.remove("active");
        }
    });
</script>


    
<main>
    <div class="background-container">
    <img src="https://i.redd.it/72415lyrth7b1.jpg" alt="Background" id="backgroundImage" style="margin-top: -90px; width: 100%; height: 700px;">
    </div>
    <div class="overlay-layer"></div>
    <div class="content-container">
        <img src="images/Netflix-Series-Logo-Vector-300x84-removebg-preview.png" alt="Gossip Girl" class="left-logo">
        <img src="images/png-clipart-fast-and-furious-logo-fast-furious-logo-removebg-preview.png" alt="Gossip Girl" class="logoz" width="100%">
        <div class="action-btns">
            <button class="play-action-button" onclick="playVideo()"><i class="fas fa-play"></i> Play</button>
            <button class="go-back-button" onclick="goBack()" style="display: none;"><i class="fas fa-arrow-left"></i> Go Back</button>
            <button class="more-info-button"><i class="fas fa-info-circle"></i> More Info</button>
        </div>
    </div>
</main>


<script>
    function playVideo() {
        document.getElementById('backgroundImage').style.display = 'none';  // Hide the image
        document.getElementById('backgroundVideo').style.display = 'block';  // Show the video
        document.getElementById('backgroundVideo').play();  // Start playing the video
        document.querySelector('.play-action-button').style.display = 'none';  // Hide the Play button
        document.querySelector('.go-back-button').style.display = 'block';  // Show the Go Back button
    }

    function goBack() {
        document.getElementById('backgroundImage').style.display = 'block';  // Show the image again
        document.getElementById('backgroundVideo').style.display = 'none';  // Hide the video
        document.getElementById('backgroundVideo').pause();  // Pause the video
        document.querySelector('.play-action-button').style.display = 'block';  // Show the Play button
        document.querySelector('.go-back-button').style.display = 'none';  // Hide the Go Back button
    }
</script>

<style>
 .action-btns button {
    margin-right: 5px;
    margin-top: 30px;
    padding: 13px 30px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    font-size: 20px;
}
    .play-action-button {
        padding: 10px 20px;
        background-color: rgb(255, 255, 255);
        color: black;
        border: none;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .go-back-button {

    }

    .more-info-button {
        background-color: rgba(255, 255, 255, 0.46);
        color: #fff;
    }

    .play-action-button:hover {
        background-color: rgba(255, 255, 255, 0.8);
    }

    .more-info-button:hover {
        background-color: rgba(255, 255, 255, 0.26);
    }

    .go-back-button:hover {

    }
</style>



    <script>
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-bar');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });
    </script>

<div class="slider-container"> 
  <h2>Continue Watching for Erudita</h2>
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <!-- Card 1 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 014142.png" alt="F9: The Fast Saga" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 015649.png" alt="F9: The Fast Saga Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 015851.png" alt="2 Fast 2 Furious" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 015950.png" alt="2 Fast 2 Furious Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 020003.png" alt="The Devil Wears Prada" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 020015.png" alt="The Devil Wears Prada Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 225709.png" alt="2 Fast 2 Furious" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 225740.png" alt="2 Fast 2 Furious Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 020030.png" alt="The Fast and the Furious: Tokyo Drift" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 020038.png" alt="Tokyo Drift Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 225831.png" alt="Gentlemen Prefer Blondes" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 225916.png" alt="Gentlemen Prefer Blondes Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 020045.png" alt="Clueless" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 020053.png" alt="Clueless Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="images/Screenshot 2025-03-23 225931.png" alt="2 Fast 2 Furious" class="card-image">
          <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 225955.png" alt="2 Fast 2 Furious Cover" class="cover-image">
            <div class="info">
              <div class="buttons">
                <button class="icon-btn first" aria-label="Play"><i class="fas fa-play"></i></button>
                <button class="icon-btn" aria-label="Add to List"><i class="fas fa-plus"></i></button>
                <button class="icon-btn" aria-label="Thumbs Up"><i class="fas fa-thumbs-up"></i></button>
                <button class="icon-btn last" aria-label="More Info"><i class="fas fa-info-circle"></i></button>
              </div>
              <div class="details">
                <span class="border">PG-13</span>
                <span>2h 23m</span>
                <span class="border small">HD</span>
              </div>
              <div class="genres">
                <span>Action <span>•</span></span>
                <span>Thriller</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Navigation buttons -->
    <button class="swiper-button-prev"><i class="fas fa-chevron-left"></i></button>
    <button class="swiper-button-next"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>


<div class="slider-container"> 
    <h2>Your Next Watch</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 225831.png" alt="Gentlemen Prefer Blondes">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225916.png" alt="Gentlemen Prefer Blondes">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020045.png" alt="Clueless">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 020053.png" alt="Clueless Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card">  
                    <img src="images/Screenshot 2025-03-23 225931.png" alt="2 Fast 2 Furious">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225955.png" alt="2 Fast 2 Furious Cover">
                        <div class="info">
                <div class="buttons">
                <button class="icon-btn first" aria-label="Play" onclick="window.open('https://www.netflix.com/watch/81001887?trackId=268410292&tctx=0%2C0%2C261e7f5e-cda7-4f71-a35d-01fb3163da48-202075845%2C261e7f5e-cda7-4f71-a35d-01fb3163da48-202075845%7C2%2C%2C%2C%2C%2C%2CVideo%3A81001887%2CdetailsPagePlayButton', '_blank')">
    <i class="fas fa-play"></i>
</button>  
<form method="POST" action="mylist.php">
  <input type="hidden" name="title" value="Scarface">
  <button type="submit" class="icon-btn" aria-label="Add to List">
      <i class="fas fa-plus"></i>
  </button>
</form>


                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                    </div>
            </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 225709.png" alt="2 Fast 2 Furious">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 225740.png" alt="2 Fast 2 Furious Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 020030.png" alt="The Fast and the Furious: Tokyo Drift">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 020038.png" alt="The Fast and the Furious: Tokyo Drift Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 225831.png" alt="Gentlemen Prefer Blondes">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225916.png" alt="Gentlemen Prefer Blondes">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020045.png" alt="Clueless">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 020053.png" alt="Clueless Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card">  
                    <img src="images/Screenshot 2025-03-23 225931.png" alt="2 Fast 2 Furious">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225955.png" alt="2 Fast 2 Furious Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button class="swiper-button-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="swiper-button-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>



<div class="slider-container"> 
    <h2>New on Netflix</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
    <div class="card">
        <img src="images/Screenshot 2025-03-23 014142.png" alt="F9: The Fast Saga" class="card-image">
        <div class="hover-content">
            <img src="images/Screenshot 2025-03-23 015649.png" alt="F9: The Fast Saga Cover" class="cover-image">
            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
        </div>
    </div>
</div>

                        <!-- Card 5 -->
                        <div class="swiper-slide">
                <div class="card">  
                    <img src="images/Screenshot 2025-03-23 015851.png" alt="2 Fast 2 Furious">
                    <div class="hover-content">
    <img src="images/Screenshot 2025-03-23 015950.png" alt="Cover Image">
    <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action  <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020003.png" alt="The Devil Wears Prada">
                    <div class="hover-content">
                        <div class="hover-header">
                            <img src="images/Screenshot 2025-03-23 020015.png" alt="The Devil Wears Prada Cover">
                        </div>
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 225709.png" alt="2 Fast 2 Furious">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 225740.png" alt="2 Fast 2 Furious Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 020030.png" alt="The Fast and the Furious: Tokyo Drift">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 020038.png" alt="The Fast and the Furious: Tokyo Drift Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 225831.png" alt="Gentlemen Prefer Blondes">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225916.png" alt="Gentlemen Prefer Blondes">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020045.png" alt="Clueless">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 020053.png" alt="Clueless Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card">  
                    <img src="images/Screenshot 2025-03-23 225931.png" alt="2 Fast 2 Furious">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225955.png" alt="2 Fast 2 Furious Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button class="swiper-button-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="swiper-button-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>


<div class="slider-container"> 
    <h2>Watch It Again</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020003.png" alt="The Devil Wears Prada">
                    <div class="hover-content">
                        <div class="hover-header">
                            <img src="images/Screenshot 2025-03-23 020015.png" alt="The Devil Wears Prada Cover">
                        </div>
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 225709.png" alt="2 Fast 2 Furious">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 225740.png" alt="2 Fast 2 Furious Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 020030.png" alt="The Fast and the Furious: Tokyo Drift">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 020038.png" alt="The Fast and the Furious: Tokyo Drift Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 225709.png" alt="2 Fast 2 Furious">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 225740.png" alt="2 Fast 2 Furious Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <img src="images/Screenshot 2025-03-23 020030.png" alt="The Fast and the Furious: Tokyo Drift">
                        <div class="hover-content">
                            <img src="images/Screenshot 2025-03-23 020038.png" alt="The Fast and the Furious: Tokyo Drift Cover">
                            <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                        </div>
                    </div>
                </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 225831.png" alt="Gentlemen Prefer Blondes">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225916.png" alt="Gentlemen Prefer Blondes">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="card">
                    <img src="images/Screenshot 2025-03-23 020045.png" alt="Clueless">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 020053.png" alt="Clueless Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>

            
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="card">  
                    <img src="images/Screenshot 2025-03-23 225931.png" alt="2 Fast 2 Furious">
                    <div class="hover-content">
                        <img src="images/Screenshot 2025-03-23 225955.png" alt="2 Fast 2 Furious Cover">
                        <div class="info">
                <div class="buttons">
                    <button class="icon-btn first" aria-label="Play">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="icon-btn" aria-label="Add to List">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="icon-btn" aria-label="Thumbs Up">
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="icon-btn last" aria-label="More Info">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </div>
                <div class="details">
                    <span class="border">PG-13</span>
                    <span>2h 23m</span>
                    <span class="border small">HD</span>
                </div>
                <div class="genres">
                    <span>Action <span>•</span></span>
                    <span>Thriller</span>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button class="swiper-button-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="swiper-button-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>



<div class="footer-links">
    <div>
    <div class="social-footericons">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
        <a href="#">Audio Description</a>
        <a href="#">Investor Relations</a>
        <a href="#">Legal Notices</a>
        <a href="#">Ad Choices</a>
    </div>
    <div>
        <a href="#">Help Center</a>
        <a href="#">Jobs</a>
        <a href="#">Cookie Preferences</a>
    </div>
    <div>
        <a href="#">Gift Cards</a>
        <a href="#">Terms of Use</a>
        <a href="#">Corporate Information</a>
    </div>
    <div>
        <a href="#">Media Center</a>
        <a href="#">Privacy</a>
        <a href="#">Contact Us</a>
    </div>
</div>

<div class="language-select">
    <button>Service Code</button>
</div>

<div class="footer-note">1997-2025 Netflix, Inc.</div>



  <script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      item.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>



<script>
    // Function to initialize each slider container
    const initializeSlider = (sliderContainer) => {
        const prevButton = sliderContainer.querySelector('.swiper-button-prev');
        const nextButton = sliderContainer.querySelector('.swiper-button-next');
        const swiperWrapper = sliderContainer.querySelector('.swiper-wrapper');
        const slides = swiperWrapper.querySelectorAll('.swiper-slide');
        const totalSlides = slides.length;
        const slidesPerView = 4; // Number of slides visible at a time
        let currentIndex = 0;

        const updateSlider = () => {
            const slideWidth = slides[0].offsetWidth + 15; // Include margin-right
            const maxIndex = Math.ceil(totalSlides / slidesPerView) - 1;

            // Ensure looping behavior
            if (currentIndex > maxIndex) {
                currentIndex = 0; // Jump back to the first slide
            } else if (currentIndex < 0) {
                currentIndex = maxIndex; // Jump to the last slide
            }

            swiperWrapper.style.transform = `translateX(-${currentIndex * slideWidth * slidesPerView}px)`;
        };

        // Next Button Click (Looping enabled)
        nextButton.addEventListener('click', () => {
            currentIndex++;
            updateSlider();
        });

        // Previous Button Click (Loops to the end)
        prevButton.addEventListener('click', () => {
            currentIndex--;
            updateSlider();
        });

        // Initialize the slider
        updateSlider();
    };

    // Initialize each slider container
    const sliderContainers = document.querySelectorAll('.slider-container');
    sliderContainers.forEach(sliderContainer => {
        initializeSlider(sliderContainer);
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.icon-btn.first').forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.stopPropagation(); // që të mos ndikojë hover jashtë
        const url = this.getAttribute('data-url');
        if (url) {
          window.open(url, '_blank'); // ose window.location.href = url;
        }
      });
    });
  });
</script>
</body>
</html>