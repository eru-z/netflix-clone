<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        } 
        .carousel-container {
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
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
            width: 200px;
            height: 300px;
            border-radius: 1rem;
            margin-right: 20px;
        }

        .relative {
            position: relative;
        }

        .relative .text-6xl {
            position: absolute;
            bottom: 10px;
            left: 10px;
            font-size: 3rem;
            font-weight: bold;
            color: black; /* Black color for the number */
            text-shadow: 0 0 5px white, 0 0 10px white, 0 0 15px white; /* White "border" effect */
        }

        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 2rem;
            padding: 1rem;
            cursor: pointer;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }
    </style>
</head>
<body>
<div class="carousel-container">
        <h2>Trending Now</h2>
        <div class="carousels">
            <div class="carousels-inner">
                <div class="carousels-item">
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="The Endless Night poster">
                        <div class="text-6xl">1</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Squid Game poster">
                        <div class="text-6xl">2</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Pulse poster">
                        <div class="text-6xl">3</div>
                    </div>
                </div>
                <div class="carousels-item">
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Jurassic World poster">
                        <div class="text-6xl">4</div>
                    </div>
                    <div class="relative">
                        <img src="https://occ-0-1489-3467.1.nflxso.net/dnm/api/v6/mAcAr9TxZIVbINe88xb3Teg5_OA/AAAABTsIHqmKvuiJaunFg-3M7eRlEBPik8Un-eqTK-od9x48LzeGITagPm82bIopTRvyhIEMehQNdXN2qfj0AVpDTMhftqYStaCieJdbO-jfhSkFUVGBs9eYkpkjdzOj_UCKZi53.webp?r=06c" alt="Life List poster">
                        <div class="text-6xl">5</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Movie poster">
                        <div class="text-6xl">6</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Movie poster">
                        <div class="text-6xl">7</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Movie poster">
                        <div class="text-6xl">8</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Movie poster">
                        <div class="text-6xl">9</div>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/200x300" alt="Movie poster">
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
            const offset = -currentIndex * 100;
            items.forEach(item => {
                item.style.transform = `translateX(${offset}%)`;
            });
        }
    </script>
</body>
</html>