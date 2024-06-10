<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>101 Production</title>
  <link rel="icon" type="image/png" href="../images/logo.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
</head>

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

    <div class="py-24">
      <div class="container mx-auto px-4">
        <h1 class="text-center text-4xl lg:text-5xl font-bold font-heading mb-4">
          Our Films
        </h1>
        <p class="text-center text-gray-600 text-lg mb-24 max-w-2xl mx-auto">
          Watch and learn with our video content.
        </p>
        <div class="flex flex-wrap mb-4 -mx-4">
          <div class="w-full lg:w-2/3 p-4">
            <a href="collage.php">
              <div class="border border-gray-100 hover:border-orange-500 transition duration-200 rounded-2xl flex flex-wrap h-full">
                <div class="w-full md:w-1/2">
                  <div class="relative h-full" style="min-height: 318px">
                    <div class="absolute top-0 left-0 z-10">
                      <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="154" height="154" viewbox="0 0 154 154" fill="none">
                        <path d="M-35 79.9324V153.361C-35 153.714 -34.7141 154 -34.3615 154H16.62C16.9724 154 17.2585 153.714 17.2585 153.361V94.299C17.2585 55.5087 55.5087 17.2585 94.299 17.2585H153.361C153.714 17.2585 154 16.9724 154 16.62V-34.3615C154 -34.7139 153.714 -35 153.361 -35H79.9324C16.4572 -35 -35 16.4572 -35 79.9324Z" fill="#FFF2D6"></path>
                      </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 z-10">
                      <svg xmlns="http://www.w3.org/2000/svg" width="152" height="153" viewbox="0 0 152 153" fill="none">
                        <path d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z" fill="#FFF2D6"></path>
                      </svg>
                    </div>
                    <img class="absolute top-0 left-0 w-full h-full object-cover rounded-tr-2xl md:rounded-tr-none md:rounded-bl-2xl rounded-tl-2xl" src="../images/films/film1.jpg" alt="" />
                  </div>
                </div>
                <div class="w-full md:w-1/2">
                  <div class="flex flex-col justify-center items-start h-full p-8">
                    <div class="px-2 py-1 rounded-md border border-gray-100 text-xs font-medium text-gray-700 mb-3">
                      Upcoming Events
                    </div>
                    <h2 class="text-xl font-bold font-heading mb-3">
                      FILM PROD 101
                    </h2>
                    <div class="flex items-center gap-2 flex-wrap mb-4">
                      <p class="text-gray-500 text-sm">June 6 & 7, 2024</p>
                      <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" viewbox="0 0 4 4" fill="none">
                        <circle cx="2" cy="2" r="2" fill="#D1D1D1"></circle>
                      </svg>
                      <p class="text-gray-500 text-sm">
                        10:45 AM − 11:15 AM (30mins)<br />
                        STI College of Novaliches, Room 605
                      </p>
                    </div>
                    <div class="rounded-md px-2 py-1 border border-orange-100 bg-orange-50 text-orange-500 text-xs font-medium">
                      Showing
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full lg:w-1/3 p-4">
            <a href="collage.php">
              <div class="border border-gray-100 hover:border-orange-500 transition duration-200 rounded-2xl h-full">
                <div class="relative" style="height: 220px">
                  <div class="absolute top-0 left-0 z-10">
                    <svg class="rounded-tl-2xl" xmlns="http://www.w3.org/2000/svg" width="154" height="154" viewbox="0 0 154 154" fill="none">
                      <path d="M-35 79.9324V153.361C-35 153.714 -34.7141 154 -34.3615 154H16.62C16.9724 154 17.2585 153.714 17.2585 153.361V94.299C17.2585 55.5087 55.5087 17.2585 94.299 17.2585H153.361C153.714 17.2585 154 16.9724 154 16.62V-34.3615C154 -34.7139 153.714 -35 153.361 -35H79.9324C16.4572 -35 -35 16.4572 -35 79.9324Z" fill="#530031"></path>
                    </svg>
                  </div>
                  <div class="absolute bottom-0 right-0 z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="152" height="153" viewbox="0 0 152 153" fill="none">
                      <path d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z" fill="#530031"></path>
                    </svg>
                  </div>
                  <img class="absolute top-0 left-0 w-full h-full object-cover rounded-t-2xl" src="../images/films/film2.png" alt="" />
                </div>
                <div class="p-6">
                  <h2 class="font-bold font-heading mb-2">
                    Pre screening of FILM PROD 101
                  </h2>
                  <p class="text-gray-500 text-sm mb-4">
                    9:00 AM − 10:00 AM (1h)
                    <br />
                    STI College of Novaliches, Room 512
                  </p>
                  <div class="inline-block rounded-md px-2 py-1 border border-orange-100 bg-orange-50 text-orange-500 text-xs font-medium">
                    Talk about the film
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/3 p-4">
              <a href="#">
                <div
                  class="border border-gray-100 hover:border-orange-500 transition duration-200 rounded-2xl h-full"
                >
                  <div class="relative" style="height: 220px">
                    <div class="absolute top-0 left-0 z-10">
                      <svg
                        class="rounded-tl-2xl"
                        xmlns="http://www.w3.org/2000/svg"
                        width="154"
                        height="154"
                        viewbox="0 0 154 154"
                        fill="none"
                      >
                        <path
                          d="M-35 79.9324V153.361C-35 153.714 -34.7141 154 -34.3615 154H16.62C16.9724 154 17.2585 153.714 17.2585 153.361V94.299C17.2585 55.5087 55.5087 17.2585 94.299 17.2585H153.361C153.714 17.2585 154 16.9724 154 16.62V-34.3615C154 -34.7139 153.714 -35 153.361 -35H79.9324C16.4572 -35 -35 16.4572 -35 79.9324Z"
                          fill="#FF7100"
                        ></path>
                      </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 z-10">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="152"
                        height="153"
                        viewbox="0 0 152 153"
                        fill="none"
                      >
                        <path
                          d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                          fill="#FF7100"
                        ></path>
                      </svg>
                    </div>
                    <img
                      class="absolute top-0 left-0 w-full h-full object-cover rounded-t-2xl"
                      src="solstice-assets/images/events/picture3.png"
                      alt=""
                    />
                  </div>
                  <div class="p-6">
                    <h2 class="font-bold font-heading mb-2">
                      Online Learning Engagement
                    </h2>
                    <div class="flex items-center gap-2 flex-wrap mb-4">
                      <p class="text-gray-500 text-sm">August 4, 2023</p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="4"
                        height="4"
                        viewbox="0 0 4 4"
                        fill="none"
                      >
                        <circle cx="2" cy="2" r="2" fill="#D1D1D1"></circle>
                      </svg>
                      <p class="text-gray-500 text-sm">
                        9:00 AM − 10:00 AM (1h)
                      </p>
                    </div>
                    <div
                      class="inline-block rounded-md px-2 py-1 border border-gray-100 text-gray-700 text-xs font-medium"
                    >
                      Chats
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="w-full lg:w-1/3 p-4">
              <a href="#">
                <div
                  class="border border-gray-100 hover:border-orange-500 transition duration-200 rounded-2xl h-full"
                >
                  <div class="relative" style="height: 220px">
                    <div class="absolute top-0 left-0 z-10">
                      <svg
                        class="rounded-tl-2xl"
                        xmlns="http://www.w3.org/2000/svg"
                        width="154"
                        height="154"
                        viewbox="0 0 154 154"
                        fill="none"
                      >
                        <path
                          d="M-35 79.9324V153.361C-35 153.714 -34.7141 154 -34.3615 154H16.62C16.9724 154 17.2585 153.714 17.2585 153.361V94.299C17.2585 55.5087 55.5087 17.2585 94.299 17.2585H153.361C153.714 17.2585 154 16.9724 154 16.62V-34.3615C154 -34.7139 153.714 -35 153.361 -35H79.9324C16.4572 -35 -35 16.4572 -35 79.9324Z"
                          fill="#530031"
                        ></path>
                      </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 z-10">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="152"
                        height="153"
                        viewbox="0 0 152 153"
                        fill="none"
                      >
                        <path
                          d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                          fill="#530031"
                        ></path>
                      </svg>
                    </div>
                    <img
                      class="absolute top-0 left-0 w-full h-full object-cover rounded-t-2xl"
                      src="solstice-assets/images/events/picture4.png"
                      alt=""
                    />
                  </div>
                  <div class="p-6">
                    <h2 class="font-bold font-heading mb-2">Journaling</h2>
                    <div class="flex items-center gap-2 flex-wrap mb-4">
                      <p class="text-gray-500 text-sm">August 4, 2023</p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="4"
                        height="4"
                        viewbox="0 0 4 4"
                        fill="none"
                      >
                        <circle cx="2" cy="2" r="2" fill="#D1D1D1"></circle>
                      </svg>
                      <p class="text-gray-500 text-sm">
                        9:00 AM − 10:00 AM (1h)
                      </p>
                    </div>
                    <div
                      class="inline-block rounded-md px-2 py-1 border border-purple-100 bg-purple-50 text-purple-400 text-xs font-medium"
                    >
                      Wellness
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="w-full lg:w-1/3 p-4">
              <a href="#">
                <div
                  class="border border-gray-100 hover:border-orange-500 transition duration-200 rounded-2xl h-full"
                >
                  <div class="relative" style="height: 220px">
                    <div class="absolute top-0 left-0 z-10">
                      <svg
                        class="rounded-tl-2xl"
                        xmlns="http://www.w3.org/2000/svg"
                        width="154"
                        height="154"
                        viewbox="0 0 154 154"
                        fill="none"
                      >
                        <path
                          d="M-35 79.9324V153.361C-35 153.714 -34.7141 154 -34.3615 154H16.62C16.9724 154 17.2585 153.714 17.2585 153.361V94.299C17.2585 55.5087 55.5087 17.2585 94.299 17.2585H153.361C153.714 17.2585 154 16.9724 154 16.62V-34.3615C154 -34.7139 153.714 -35 153.361 -35H79.9324C16.4572 -35 -35 16.4572 -35 79.9324Z"
                          fill="#FF7100"
                        ></path>
                      </svg>
                    </div>
                    <div class="absolute bottom-0 right-0 z-10">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="152"
                        height="153"
                        viewbox="0 0 152 153"
                        fill="none"
                      >
                        <path
                          d="M189 74.0676V0.638514C189 0.286054 188.714 0 188.361 0H137.38C137.028 0 136.742 0.286054 136.742 0.638514V59.701C136.742 98.4913 98.4914 136.742 59.701 136.742H0.638514C0.286054 136.742 0 137.028 0 137.38V188.361C0 188.714 0.286054 189 0.638514 189H74.0676C137.543 189 189 137.543 189 74.0676Z"
                          fill="#FF7100"
                        ></path>
                      </svg>
                    </div>
                    <img
                      class="absolute top-0 left-0 w-full h-full object-cover rounded-t-2xl"
                      src="solstice-assets/images/events/picture5.png"
                      alt=""
                    />
                  </div>
                  <div class="p-6">
                    <h2 class="font-bold font-heading mb-2">Learners Method</h2>
                    <div class="flex items-center gap-2 flex-wrap mb-4">
                      <p class="text-gray-500 text-sm">August 4, 2023</p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="4"
                        height="4"
                        viewbox="0 0 4 4"
                        fill="none"
                      >
                        <circle cx="2" cy="2" r="2" fill="#D1D1D1"></circle>
                      </svg>
                      <p class="text-gray-500 text-sm">
                        9:00 AM − 10:00 AM (1h)
                      </p>
                    </div>
                    <div
                      class="inline-block rounded-md px-2 py-1 border border-orange-100 bg-orange-50 text-orange-500 text-xs font-medium"
                    >
                      Producvitity
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div> -->
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
</body>

</html>