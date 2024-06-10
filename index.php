<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>101 Production</title>
  <link rel="icon" type="image/png" href="images/logo.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
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
          <a href="#" class="flex items-center">
            <img src="images/logo.png" class="h-8 w-8 rounded-full object-cover" alt="Flowbite Logo" />
            <span class="ml-2 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">101 PRODUCTION</span>
          </a>
          <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden md:flex">
            <li class="mr-8">
              <a class="inline-block darkCustom font-medium hover:underline" href="#">Home</a>
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
    <div class="relative">
      <div class="container mx-auto px-4">
        <div class="max-w-lg xl:max-w-xl mx-auto lg:mx-20 pt-12 pb-28 lg:py-24">
          <div class="flex mb-6 items-center">
            <span class="ml-2 text-sm font-medium">
              Lights, camera, & drama?!
            </span>
          </div>
          <h1 class="font-heading text-5xl xs:text-7xl xl:text-8xl tracking-tight mb-8">
            𝗙𝗜𝗟𝗠 𝗣𝗥𝗢𝗗 𝟭𝟬𝟭 📽️🎞️
          </h1>
          <p class="max-w-md xl:max-w-none text-lg text-gray-700 mb-10">
            Showing na sa 𝗝𝘂𝗻𝗲 𝟲 & 𝟳, 𝟮𝟬𝟮𝟰 <br />
            STI College Novaliches <br />
            𝘊𝘪𝘯𝘦𝘮𝘢 1 - 𝗥𝗠 𝟲𝟬𝟱. <br />
            Morning Show: 𝟭𝟬:𝟰𝟱 𝗔𝗠 - 𝟭𝟭:𝟭𝟱 𝗔𝗠 <br />
            Afternoon Show: 𝟯:𝟰𝟱 𝗣𝗠 - 𝟰:𝟭𝟱 𝗣𝗠
          </p>
          <div class="flex flex-col sm:flex-row">
            <a href="/101-production/pages/film.php" class="inline-flex py-4 px-6 mb-3 sm:mb-0 sm:mr-4 items-center justify-center text-lg font-medium text-white darkButton rounded-full transition duration-200">See our films</a><a href="/101-production/pages/contact.php" class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium lightButton rounded-full transition duration-200">Get in touch</a>
          </div>
        </div>
      </div>
      <div class="hidden lg:flex items-center justify-center absolute top-0 right-0 h-full max-w-lg xl:max-w-none xl:w-2/5 p-3 ml-auto">
        <img class="block xl:h-full mx-auto rounded" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t39.30808-6/441926310_122121538766282974_7535078909728557364_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFixI00Tbqqyeccj3bKqJ5xzGCtPvWL3MfMYK0-9Yvcx_Y2eW3Y7H6Gs-poXgLCehKL73L3EPt-L5EOlQ7uhOdB&_nc_ohc=1oELc3YqMbgQ7kNvgEoH5H6&_nc_ht=scontent.fmnl9-1.fna&oh=00_AYDSbpHDbgt5_qx2ZL_2DFncABoU5ooZXqU1-W1G-7ca6g&oe=666B53C3" alt="" />
      </div>
      <div class="relative flex lg:hidden p-3 items-center justify-center">
        <img class="block w-full max-w-2xl h-auto rounded-lg" src="images/logo.png" alt="" />
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
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="#">Home</a>
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
              <a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="/101-production/pages/review.php">Get in Discussion</a>
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
</body>

</html>