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


    <nav class="bg-indigo-800">
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
          <img class="h-8 w-auto justify-start" src="/assets/pictures/logo.png"><p class="text-slate-100">ASIA'S CHOCOLATES</p>
        </div>

        <div class="hidden sm:ml-6 sm:block ">
          <div class="flex space-x-4 ">
            <a href="#" class="bg-violet-200 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">HOME</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" >PRODUCTS</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">RESERVATIONS</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT US</a>
          </div>

        </div>
      </div>
      
    </div>
  </div>

</nav>
</header>


<body>

<div class="mx-auto max-w-7xl py-14 sm:px-6 lg:px-9 wave bg-gradient-to-l from-indigo-400 to-violet-500">
    <div class="text-center font-bold text-6xl font-serif text-slate-200 sm:mt-20" >
        ASIA'S CHOCOLATES
    </div>

    <div class="font-medium text-center text-zinc-50 font-thin" >
    High quality chocolate products offer indulgent delights crafted with precision, <br> ensuring a rich and satisfying experience for chocolate enthusiasts.
    </div>

    <div class="button px-[44%] py-[3%]">
      <a href="#">
        <input class="btn btn-info bg-violet-600 rounded-lg "type="submit" value="SHOP NOW" >
      </a>
    </div>

<!---------------------------------------------------------------->


  <div class="flex items-center"> 
    <div class="icons ml-10">
      <a href="#">
        <i class="fa-brands fa-facebook ml-96 width=100 fa-3x" ></i>
      </a>

      <a href="#">
        <i class="fa-brands fa-facebook-messenger ml-10 fa-3x"></i>
      </a>

      <a href="#">
        <i class="fa-brands fa-instagram ml-10 fa-3x"></i>
      </a>

      <a href="#">
        <i class="fa-brands fa-tiktok ml-10 fa-3x"></i>
      </a>
    </div>
  </div> 

<!---------------------------------------------------------------->

    <div class="font-bold px-[38%] mt-32  w-[100%] text-slate-50">
      TRUSTED BY THESE COMPANIES
    </div>

  <div class="flex mt-14 ml-16"> 
    <div class="toblerone -mt-9 mr-14">
      <img src="/assets/pictures/toblerone.png" width="200" height="200">
    </div>  

    <div class="hershey mr-14">
      <img src="/assets/pictures/hershey.png" width="200" height="200" >
    </div>  
      
    <div class="cadbury -mt-10 mr-14">
      <img src="/assets/pictures/cudbery.png" width="250" height="250" >
    </div>  
      
    <div class="nilka -mt-10 mr-14"> 
      <img src="/assets/pictures/milka.png" width="230" height="230" >
    </div>      
  </div>

</div>


<!----------------------------------second container------------------------------>

<div class="mx-auto max-w-7xl pb-9 sm:px-6 lg:px-9 bg-indigo-200">

  <div class="text-4xl font-bold py-12 text-center text-indigo-900 font-serif">
    <p>SERVICES</p>
  </div>

  <div class="carousel">
      <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/pictures/c2.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/assets/pictures/c1.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/assets/pictures/c3.jpg" class="d-block w-100 h-1/2" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</div>


<!--------------------------------------third padding-------------------------->

<div class="third py-10 font-serif wave bg-gradient-to-l from-indigo-400 to-violet-500">

  <div class="text1 text-4xl font-bold py-12 text-center text-violet-100 underline">
    <p>PRODUCTS</p>
  </div>

  <div class="flex">
  <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
    <img class="w-full" src="/assets/pictures/q1.jpg" alt="Placeholder image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-slate-50">CHOCOLATE BOUQUET</div>
      <p class="text-slate-200 text-base">A chocolate bouquet is a delightful and creative gift idea that combines the elegance of a floral bouquet with the indulgence of chocolates. Instead of traditional flowers, the bouquet features an arrangement of various chocolates, beautifully presented to resemble a floral arrangement.</p>
      <a href="#" class="btn btn-light">SEE PRODUCTS</a>
    </div>
  </div>
  
  <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
    <img class="w-full" src="/assets/pictures/q2.jpg" alt="Placeholder image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-slate-50">CHOCOLATES</div>
      <p class="text-slate-200 text-base">Chocolate, the epitome of indulgence, tantalizes the taste buds with its rich, velvety texture and complex flavor profile. From the moment it touches the tongue, chocolate unleashes a symphony of sensations that delight the senses and evoke feelings of pure bliss.</p>
      <a href="#" class="btn btn-light">SEE PRODUCTS</a>
    </div>
  </div>
  
  <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
    <img class="w-full" src="/assets/pictures/q3.jpg" alt="Placeholder image">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-slate-50">SNACKS</div>
      <p class="text-slate-200 text-base">Chips, the crispy, savory delights that have captured the hearts and taste buds of millions, offer a tantalizing experience that is unparalleled in its simplicity and satisfaction. From the moment you reach into a bag and feel the satisfying crunch between your fingers, to the explosion of flavor that follows with each bite, chips are a culinary indulgence like no other.</p>
      <a href="#" class="btn btn-light">SEE PRODUCTS</a>
    </div>
  </div>
</div>

                                      <!---------------------------------second layer------------------------------------------->

<div class="flex">
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
      <img class="w-full" src="/assets/pictures/q4.jpg" alt="Placeholder image">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-slate-50">VIAND</div>
        <p class="text-slate-200 text-base">Viand, with its delectable flavors and mouthwatering aromas, tantalizes the taste buds and delights the senses. Whether it's a savory stew, a succulent roast, or a flavorful curry, viand offers a culinary experience that is both comforting and satisfying. Each bite is a symphony of flavors, from the rich umami of meat to the vibrant spices and seasonings that infuse every dish. Viand is more than just a meal</p>
        <a href="#" class="btn btn-light">SEE PRODUCTS</a>
      </div>
    </div>
    
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
      <img class="w-full" src="/assets/pictures/q5.jpg" alt="Placeholder image">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-slate-50">DRINKS</div>
        <p class="text-slate-200 text-base">Drinks, whether hot or cold, alcoholic or non-alcoholic, are a refreshing and essential part of life's pleasures. From the comforting warmth of a steaming cup of coffee to the crisp chill of a refreshing glass of iced lemonade, drinks offer a sensory experience that invigorates the body and soothes the soul. </p>
        <a href="#" class="btn btn-light">SEE PRODUCTS</a>
      </div>
    </div>
    
    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
      <img class="w-full" src="/assets/pictures/q6.jpg" alt="Placeholder image">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 text-slate-50">ALCOHOL</div>
        <p class="text-slate-200 text-base">Alcohol, in its various forms, is a widely consumed beverage known for its ability to induce relaxation, socialization, and celebration. From the complex flavors of fine wine and the boldness of spirits to the refreshing effervescence of beer, alcohol offers a diverse range of options to suit every taste and occasion.</p>
        <a href="#" class="btn btn-light">SEE PRODUCTS</a>
      </div>
    </div>
  </div>

</div>

<!---------------------------------------fourth pad---------------------------------------->


<div class="mx-auto max-w-7xl pb-3 sm:px-6 lg:px-9 bg-indigo-200">

<div class="container mx-auto py-12">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 bg-white shadow-md rounded-lg">
    <div class="p-6">
      <h2 class="text-2xl font-semibold text-gray-800">LOCATION</h2>
      <p class="mt-4 text-gray-600">Laungcupang Dumarais Rd, La Paz, Tarlac, Philippines</p>
      <div class="container mx-auto p-6"></div>


      <div class="container mx-auto p-4">
          <div class="w-full lg:max-w-3xl -mt-10">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=15.441523,%20120.690341+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>


    </div>
  </div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>