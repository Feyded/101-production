<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>101 Production</title>
  <link rel="icon" type="image/png" href="../images/logo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<style>
  .darkCustom {
    color: #c78745;
  }

  .darkButton {
    background-color: #c78745;
  }

  .darkButton:hover {
    border: 1px solid #c78745;
    background-color: #fff;
    color: #c78745;
  }

  .lightButton {
    border: 1px solid #c78745;
    background-color: #fff;
    color: #c78745;
  }

  .lightButton:hover {
    background-color: #c78745;
    color: #fff;
  }
</style>

<body>
  <section x-data="{ mobileNavOpen: false }">
    <nav class="py-6 border-b">
      <div class="container mx-auto px-4">
        <div class="relative flex items-center justify-between">
          <a href="/101-production/index.php" class="flex items-center">
            <img src="../images/logo.png" class="h-8 w-8 rounded-full object-cover" alt="Flowbite Logo" />
            <span class="ml-2 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">101 PRODUCTION</span>
          </a>
          <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">
            <li class="mr-8">
              <a class="inline-block darkCustom font-medium hover:underline" href="/101-production/index.php">Home</a>
            </li>

            <li class="mr-8">
              <a class="inline-block darkCustom font-medium hover:underline" href="/101-production/pages/film.php">Film</a>
            </li>
            <li class="mr-8">
              <a class="inline-block darkCustom font-medium hover:underline" href="/101-production/pages/contact.php">Contact Us</a>
            </li>
            <!-- <li class="mr-8">
                <a
                  class="inline-block darkCustom font-medium hover:underline"
                  href="#"
                  >Advocacy</a
                >
              </li> -->
            <li>
              <a class="inline-block darkCustom font-medium hover:underline" href="/101-production/pages/aboutUs.php">About Us</a>
            </li>
          </ul>
          <div class="flex items-center justify-end">
            <div class="hidden md:block">
              <a href="/101-production/pages/review.php" class="inline-flex group py-2.5 px-4 items-center justify-center text-sm font-medium lightButton rounded-full transition duration-200">
                <span class="mr-2">Get in discussion</span>
                <span class="transform group-hover:translate-x-0.5 transition-transform duration-200">
                  <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.75 10H15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 4.75L15.25 10L10 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
              </a>
            </div>
            <button x-on:click="mobileNavOpen = !mobileNavOpen" class="md:hidden text-teal-900 hover:text-teal-800">
              <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.19995 23.2H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.19995 16H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.19995 8.79999H26.7999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <div x-data="{ activeSlide: 1, slideCount: 3 }" class="py-12 lg:py-24 overflow-hidden">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center items-center">
          <div class="flex w-full md:w-1/3 px-4 mb-12 md:mb-0">
            <div class="max-w-lg mx-auto md:mx-0 overflow-hidden">
              <div id="imageContainer" class="flex -mx-4 transition-transform duration-500" style="transform: translateX(-0%)">
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/1.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/2.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/3.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/4.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/5.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/6.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/7.jpg" alt="" />
                <img class="block flex-shrink-0 w-full px-4" src="../images/aboutUs/8.jpg" alt="" />
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 px-4">
            <div class="max-w-lg mx-auto md:mr-0 overflow-hidden">
              <div id="sliderContainer" class="flex -mx-4 transition-transform duration-500" style="transform: translateX(-0%)">
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Loves writing and journaling”
                  </h4>
                  <span class="block text-xl font-medium">Hazel Grate</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Director</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Laging late!”
                  </h4>
                  <span class="block text-xl font-medium">Malcolm Lim</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “A star that shines but never bright”
                  </h4>
                  <span class="block text-xl font-medium">Kale Ragudo</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Camera rolling”
                  </h4>
                  <span class="block text-xl font-medium">John Carlo Espiritu</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Camera man</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Loyal, Fashionista, Patient”
                  </h4>
                  <span class="block text-xl font-medium">Camille Vasquez</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Night Shift!”
                  </h4>
                  <span class="block text-xl font-medium">Kristofer Vergara</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Praktikal, Resourceful, Nonchalant”
                  </h4>
                  <span class="block text-xl font-medium">Janella Georfo</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
                <div class="flex-shrink-0 px-4 w-full">
                  <h4 class="text-3xl lg:text-4xl font-medium mb-10">
                    “Introvert, Observant, Reserved”
                  </h4>
                  <span class="block text-xl font-medium">Arianne Bautista</span>
                  <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Actor</span>
                </div>
              </div>
              <div>
                <button id="prevButton" class="inline-block mr-4 text-gray-700 hover:text-yellow-500">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.4 16H7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16 24.4L7.59998 16L16 7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
                <button id="nextButton" class="inline-block text-gray-700 hover:text-yellow-500">
                  <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.59998 16H24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16 7.59998L24.4 16L16 24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}" class="hidden fixed top-0 left-0 bottom-0 w-full xs:w-5/6 xs:max-w-md z-50">
      <div x-on:click="mobileNavOpen = !mobileNavOpen" class="fixed inset-0 bg-violet-900 opacity-20"></div>
      <nav class="relative flex flex-col py-7 px-10 w-full h-full bg-white overflow-y-auto">
        <div class="flex items-center justify-between">
          <a href="#" class="inline-block"> </a>
          <div class="flex items-center">
            <button x-on:click="mobileNavOpen = !mobileNavOpen">
              <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.2 8.79999L8.80005 23.2M8.80005 8.79999L23.2 23.2" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="pt-20 pb-12 mb-auto">
          <ul class="flex-col">
            <li class="mb-6">
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/index.php">Home</a>
            </li>
            <li class="mb-6">
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/pages/film.php">Film</a>
            </li>
            <li class="mb-6">
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/pages/contact.php">Contact Us</a>
            </li>
            <li class="mb-6">
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/pages/aboutUs.php">About Us</a>
            </li>
            <li>
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/pages/review.php">Get In Discussion</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center justify-between">
          <a href="https://accounts.google.com/InteractiveLogin/signinchooser?hl=en-gb&ifkv=AS5LTARbnZ6eZ5TxXUx_w0WxOmOrgZ3lgO-foNey46RQqeMu0VEcScHwFxSk8paS5c9kTZoWPRLYUA&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="inline-flex items-center text-lg font-medium text-teal-900">
            <span>
              <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.4 6.39999H25.6C26.92 6.39999 28 7.47999 28 8.79999V23.2C28 24.52 26.92 25.6 25.6 25.6H6.4C5.08 25.6 4 24.52 4 23.2V8.79999C4 7.47999 5.08 6.39999 6.4 6.39999Z" stroke="#646A69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M28 8.8L16 17.2L4 8.8" stroke="#646A69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
            <span class="ml-2">Newsletter</span>
          </a>
          <div class="flex items-center">
            <a href="https://www.facebook.com/101Production8" class="inline-block mr-4">
              <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_282_7847)">
                  <path d="M11.548 19.9999V10.8776H14.6087L15.0679 7.32146H11.548V5.05136C11.548 4.02209 11.8326 3.32066 13.3103 3.32066L15.1918 3.31988V0.139123C14.8664 0.0968385 13.7495 -0.000106812 12.4495 -0.000106812C9.73488 -0.000106812 7.87642 1.65686 7.87642 4.69916V7.32146H4.8064V10.8776H7.87642V19.9999H11.548Z" fill="#022C22"></path>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <script>
    // Get necessary elements
    const sliderContainer = document.getElementById("sliderContainer");
    const imageContainer = document.getElementById("imageContainer");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    // Initialize variables
    let activeSlide = 0;
    const slideCount = sliderContainer.children.length;
    const imageCount = imageContainer.children.length;

    // Add event listeners to buttons
    prevButton.addEventListener("click", function() {
      activeSlide = activeSlide > 0 ? activeSlide - 1 : slideCount - 1;
      updateSlider();
    });

    nextButton.addEventListener("click", function() {
      activeSlide = activeSlide < slideCount - 1 ? activeSlide + 1 : 0;
      updateSlider();
    });

    // Function to update slider position
    function updateSlider() {
      const translateXValue = -activeSlide * 100;
      sliderContainer.style.transform = `translateX(${translateXValue}%)`;
      imageContainer.style.transform = `translateX(${translateXValue}%)`;
    }
  </script>
</body>

</html>