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
          <img class="h-8 w-auto justify-start" src="/assets/pictures/logo.png" ><p class="text-purple-700"><a href="welcome.about.blade.php">ASIA'S CHOCOLATE & SNACKS </a></p>
        </div>

        <div class="hidden sm:ml-6 sm:block ">
          <div class="flex space-x-4 ">
            
            <a href="welcome.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">HOME</a>

            <div class="dropdown">
              <button class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium bg-violet-200 text-white rounded-md px-3 py-2 text-sm font-medium" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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



            <a href="reviews.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">REVIEWS</a>

            <a href="about.blade.php" class="text-purple-700 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT US</a>
            
            <div class="flex items-end "><i class="fa-solid fa-cart-shopping ml-[500px] text-2xl text-slate-50"></i></div>
          </div>


        </div>
      </div>
      
    </div>
  </div>

</nav>
</header>


<body class="bg-indigo-300">

<div class="max-w-5xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4 text-left text-white">ALCOHOL</h1>
        
        <!-- Product List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-14">


           
        <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y1.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">VINO FONTANA</h2>
                <p class="text-gray-600">Sweet Red</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>

                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity')">-</button>
                    <input id="quantity" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y2.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">VINO FONTANA</h2>
                <p class="text-gray-600">Red Wine</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>

                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity1')">-</button>
                    <input id="quantity1" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity1')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>
          
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y3.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">NOVELLINO</h2>
                <p class="text-gray-600">BIANCO CLASSICO</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>

                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity2')">-</button>
                    <input id="quantity2" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity2')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>
       
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y4.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">NOVELLINO</h2>
                <p class="text-gray-600">Wild Blackberry</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>
                
                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity3')">-</button>
                    <input id="quantity3" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity3')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>

            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y5.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">BUGNAY WINE</h2>
                <p class="text-gray-600">Jayson's Bugnay Wine</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>

                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity4')">-</button>
                    <input id="quantity4" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity4')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>

            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="/assets/pictures/y6.jpg" alt="Product 1" class="w-full h-48 object-cover mb-4 rounded-lg" onclick="zoomImage(this)">
                <h2 class="text-lg font-semibold">SOJU</h2>
                <p class="text-gray-600">Jinro Chamisol Soju</p>
                <p class="text-gray-800 font-semibold mt-2">₱00.00</p>

                <div class="mt-4 flex items-center">
                    <button class="px-3 py-1 bg-gray-300 rounded-l-md" onclick="decrementQuantity('quantity5')">-</button>
                    <input id="quantity5" type="number" min="1" max="999" value="0" class="w-16 text-center bg-white focus:outline-none">
                    <button class="px-3 py-1 bg-gray-300 rounded-r-md" onclick="incrementQuantity('quantity5')">+</button>
                </div>
                <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add to Cart</button>
            </div>

        </div>
    </div>














<!-----------------------------------plus minus order js---------------------------------->

<script>
        function incrementQuantity(id) {
            const quantityInput = document.getElementById(id);
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
        }

        function decrementQuantity(id) {
            const quantityInput = document.getElementById(id);
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
            }
        }
    </script>


<!----------------------------------------zoom js--------------------------------------->

    <style>
        .zoom {
            transition: transform 0.3s ease;
            transform-origin: center center;
        }

        .zoom:hover {
            transform: scale(3.2);
        }
    </style>


<script>
        function zoomImage(image) {
            image.classList.toggle('zoom');
        }
    </script>


<!-------------------------------back to top js----------------------------->

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


    <button onclick="scrollToTop()" class="back-to-top text-2xl " id="back-to-top-btn"><i class="fa-solid fa-up-long "></i></button>

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
