<!DOCTYPE html>
<html lang="en">
<head class="bg-violet-900">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <link rel="icon" href="/assets/pictures/logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/113ee80744.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <nav class=" bg-gradient-to-b from-indigo-300 to-indigo-400">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden ">
        
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
      </div>

      <div class="flex flex-5 items-center justify-center sm:items-stretch sm:justify-center">
      <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto justify-start" src="/assets/pictures/logo.png" ><p class="text-purple-700"><a href="welcome.blade.php">ASIA'S CHOCOLATE & SNACKS </a></p>
        </div>

        <div class="hidden sm:ml-6 sm:block ">
          <div class="flex space-x-4 ">


          <a href="welcome.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">HOME</a>

          <div class="dropdown">
              <button class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                PRODUCTS
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="moneybouqet.blade.php">MONEY BOUQUET</a></li>
                <li><a class="dropdown-item" href="chocolatebouqet.blade.php">CHOCOLATE BOUQUET</a></li>
                <li><a class="dropdown-item" href="chocolate.blade.php">CHOCOLATES</a></li>
                <li><a class="dropdown-item" href="snacks.blade.php">SNACKS</a></li>
                <li><a class="dropdown-item" href="viands.blade.php">VIANDS</a></li>
                <li><a class="dropdown-item" href="drinks.blade.php">DRINKS</a></li>
                <li><a class="dropdown-item" href="alcohol.blade.php">ALCOHOL</a></li>
                <li><a class="dropdown-item text-purple-700 rounded-md px-3 py-2 text-sm font-medium" href="product.blade.php">See all...</a></li>
              </ul>
            </div>

            <a href="reviews.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium bg-violet-200 text-white rounded-md px-3 py-2 text-sm font-medium">REVIEWS</a>

            <a href="about.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">ABOUT US</a>
            
            <div class="flex items-end "><i class="fa-solid fa-cart-shopping ml-[500px] text-2xl text-slate-50"></i></div>
          </div>


        </div>
      </div>
      
    </div>
  </div>

</nav>
</header>

<body class="bg-indigo-300">

<div class="bg-indigo-300">
    <div class="max-w-4xl mx-auto mt-10 ">
        <h1 class="text-3xl font-bold mb-8 text-white">FACEBOOK REVIEWS</h1>
        
        <!-- Review Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-24">
            <!-- Review Card -->
            <div class="bg-white rounded-lg shadow-md p-6 ">
                <div class="flex items-center mb-4">
                    <img src="/assets/pictures/chaeyoung.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold">Chaeryoung</h2>
                        <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️</p>
                    </div>
                </div>
                <p class="text-gray-800">"I stumbled upon Asia's Chocolate and Snacks during a trip, and I must say, it was a delightful find! The variety of chocolates and snacks from different Asian countries is astounding. I particularly loved the matcha-flavored chocolates and the assortment of unique snacks I couldn't find anywhere else. The quality is top-notch, and the packaging is so vibrant and eye-catching. Can't wait to order more online!"</p>
            </div>
            <!-- Add more review cards as needed -->


            <!-- Review Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <img src="/assets/pictures/yeji.png" alt="Profile Picture" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold">Yeji</h2>
                        <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️</p>
                    </div>
                </div>
                <p class="text-gray-800">"Being a chocolate enthusiast, I'm always on the lookout for new flavors and brands. Asia's Chocolate and Snacks exceeded my expectations. From the moment I opened the box, the aroma of cocoa filled the room. Each chocolate had its own distinct flavor profile, showcasing the diversity of Asian cuisine. Whether it was the rich dark chocolates from Japan or the creamy milk chocolates from Korea, every bite was a journey through Asia's culinary wonders. Highly recommended for anyone looking to explore unique and delicious treats!"</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-24">
            <!-- Review Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <img src="/assets/pictures/dahyun.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold">Dahyun</h2>
                        <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️</p>
                    </div>
                </div>
                <p class="text-gray-800">"I've been a loyal customer of Asia's Chocolate and Snacks for months now, and I can't get enough of their products! Not only are their chocolates and snacks delicious, but they also make perfect gifts for friends and family. The packaging is so elegant and beautifully crafted, making each box feel like a luxurious treat. Plus, their customer service is exceptional. They're always responsive and ensure that every order arrives promptly and in perfect condition. Asia's Chocolate and Snacks has definitely become my go-to for all things sweet and savory!"</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-24 mb-14">
            <!-- Review Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center mb-4">
                    <img src="/assets/pictures/sana.jpg" alt="Profile Picture" class="w-12 h-12 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold">Sana</h2>
                        <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️</p>
                    </div>
                </div>
                <p class="text-gray-800">"Asia's Chocolate and Snacks has become a staple in my pantry. Whether I'm craving something sweet or savory, they have it all. Their range of snacks, from crispy seaweed to crunchy rice crackers, is a testament to the diversity of Asian cuisine. And don't even get me started on their chocolates! The combination of traditional Asian flavors with premium chocolate is simply divine. Plus, their online store is user-friendly, making it easy to browse and order my favorites with just a few clicks. I highly recommend giving them a try, you won't be disappointed!"</p>
            </div>




        </div>
    </div>
</div>





<style>
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            color: #7F00FF;
            padding: 1rem;
            border-radius: 40%;
            display: none;
            transition: opacity 0.2s;
            z-index: 999;
        }


    </style>


    <button onclick="scrollToTop()" class="back-to-top text-2xl" id="back-to-top-btn"><i class="fa-solid fa-up-long"></i></button>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            var btn = document.getElementById("back-to-top-btn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>


<footer class="bg-indigo-500 py-6 mb-4">
    <div class="container ">
      <div class="flex flex-col md:flex-row md:justify-between">
        <div class="text-white mb-4 md:mb-0" ><a href="welcome.blade.php">ASIA'S CHOCOLATE & SNACKS </a></div>
        <div class="flex">
          <a href="about.blade.php" class="text-slate-50 hover:text-violet-900 mr-4">About</a>
          <a href="about.blade.php" class="text-slate-50 hover:text-violet-900 mr-4">Contact</a>
        </div>
        
      </div>
    </div>
  </footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>








