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
          <img class="h-8 w-auto justify-start" src="/assets/pictures/logo.png"><p class="text-purple-700">ASIA'S CHOCOLATES</p>
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
                <li><a class="dropdown-item text-purple-700 rounded-md px-3 py-2 text-sm font-medium" href="product.blade.php">See alll...</a></li>
              </ul>
            </div>

            <a href="#" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">RESERVATIONS</a>

            <a href="about.blade.php" class="bg-violet-200 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">ABOUT US</a>
            
            <div class="flex items-end "><i class="fa-solid fa-cart-shopping ml-[500px] text-2xl text-slate-50"></i></div>
          </div>


        </div>
      </div>
      
    </div>
  </div>

</nav>
</header>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4 text-black">About Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="mb-4">
                <img src="/assets/pictures/q7.jpg" alt="Company Image" class="rounded-lg shadow-md mb-4">


    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">CONTACT US</h1>
        <form class="max-w-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">NAME</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ENTER YOUR NAME" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">EMAIL</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ENTER YOUR EMAIL">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">MESSAGE</label>
                <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="ENTER YOUR INQUIRIES" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">SUBMIT</button>
            </div>
        </form>
    </div>


            </div>

            <div>
                <p class="text-lg mb-4">Welcome to Asia's Chocolate and Snacks, where indulgence meets innovation in the world of confectionery!</p>
                <p class="text-lg mb-4">Established with a passion for delivering delightful flavors and premium quality treats, Asia's Chocolate and Snacks has been a cornerstone of sweet cravings across the continent for over a decade.</p>
                <p class="text-lg mb-4">At Asia's Chocolate and Snacks, we pride ourselves on curating a diverse range of chocolates, candies, and snacks from across Asia and beyond. From traditional favorites to modern twists, our selection caters to every palate, ensuring there's something for everyone to savor.</p>
                <p class="text-lg mb-4">Our commitment to excellence extends beyond taste, as we meticulously source our ingredients and partner with trusted suppliers who share our dedication to sustainability and ethical practices. This ensures that every bite not only delights your taste buds but also reflects our values of responsibility and integrity.</p>
                <p class="text-lg mb-4">Driven by a desire to innovate, we are constantly exploring new flavors, textures, and packaging concepts to keep our offerings fresh and exciting. Whether you're seeking a nostalgic treat from your childhood or eager to discover the latest trend in snacking, Asia's Chocolate and Snacks is your ultimate destination.</p>
                <p class="text-lg mb-4">But our journey doesn't end with just providing delicious treats; we believe in giving back to the communities that support us. Through various initiatives, we strive to make a positive impact, whether it's supporting local farmers, empowering women in cocoa-producing regions, or contributing to environmental conservation efforts.</p>
                <p class="text-lg mb-4">Thank you for joining us on this sweet adventure. We invite you to explore our collection, indulge your senses, and experience the joy of Asia's Chocolate and Snacks.</p>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>