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
    <div class="bg-blue-50 dark:bg-slate-800" id="contact">
      <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
          <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
            <p class="text-base font-semibold uppercase tracking-wide text-yellow-600 dark:text-yellow-200">
              Contact
            </p>
            <h2 class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">
              Get in Touch
            </h2>
          </div>
        </div>
        <div class="flex items-stretch justify-center">
          <div class="grid">
            <div class="h-full pr-6">
              <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                Get in Touch Have a question or want to learn more? Message us
                and we'll be in touch soon!
              </p>
              <ul class="mb-6 md:mb-0">
                <li class="flex">
                  <div class="flex h-10 w-10 items-center justify-center rounded darkButton text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                      <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                      <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                    </svg>
                  </div>
                  <div class="ml-4 mb-4">
                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">
                      Our Address
                    </h3>
                    <p class="text-gray-600 dark:text-slate-400">
                      STI College of Novaliches
                    </p>
                    <p class="text-gray-600 dark:text-slate-400">
                      Philippines, Quezon City
                    </p>
                  </div>
                </li>
                <li class="flex">
                  <div class="flex h-10 w-10 items-center justify-center rounded darkButton text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                      <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                      <path d="M15 7a2 2 0 0 1 2 2"></path>
                      <path d="M15 3a6 6 0 0 1 6 6"></path>
                    </svg>
                  </div>
                  <div class="ml-4 mb-4">
                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">
                      Contact
                    </h3>
                    <p class="text-gray-600 dark:text-slate-400">
                      Mobile: 09238291821
                    </p>
                    <p class="text-gray-600 dark:text-slate-400">
                      Mail: 101production@gmail.com
                    </p>
                  </div>
                </li>
                <li class="flex">
                  <div class="flex h-10 w-10 items-center justify-center rounded darkButton text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                      <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                      <path d="M12 7v5l3 3"></path>
                    </svg>
                  </div>
                  <div class="ml-4 mb-4">
                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">
                      Working hours
                    </h3>
                    <p class="text-gray-600 dark:text-slate-400">
                      Monday - Friday: 8:00am - 5:00pm
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
              <h2 class="mb-4 text-2xl font-bold dark:text-white">
                Ready to Get Started?
              </h2>
              <form id="contactForm">
                <div class="mb-6">
                  <div class="mx-0 mb-1 sm:mb-4">
                    <div class="mx-0 mb-1 sm:mb-4">
                      <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text" id="name" autocomplete="given-name" placeholder="Your name" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="name" />
                    </div>
                    <div class="mx-0 mb-1 sm:mb-4">
                      <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email" id="email" autocomplete="email" placeholder="Your email address" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="email" />
                    </div>
                  </div>
                  <div class="mx-0 mb-1 sm:mb-4">
                    <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="w-full darkButton text-white px-6 py-3 font-xl rounded-md sm:mb-0">
                    Send Message
                  </button>
                </div>
              </form>
            </div> -->
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
</body>

</html>