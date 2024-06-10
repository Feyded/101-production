<?php
// Include the database connection file
require '../database/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $review = $_POST['review'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO reviews (name, review) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $review);

    if ($stmt->execute() === TRUE) {
        $message = "success";
    } else {
        $message = "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            color: #fff;
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
        <div class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
            <div class="max-w-2xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <?php
                    // Include the database connection file
                    require '../database/conn.php';

                    // Query to fetch all reviews
                    $sql = "SELECT name, review, created_at FROM reviews";
                    $result = $conn->query($sql);

                    // Get the number of reviews
                    $num_reviews = $result->num_rows;
                    ?>
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (<?php echo $num_reviews; ?>)</h2>
                </div>
                <?php if (isset($message)) : ?>
                    <div class="alert <?php echo ($message == 'success') ? 'bg-green-100 border-green-500 text-green-700' : 'bg-red-100 border-red-500 text-red-700'; ?> border-l-4 p-4 mb-4" role="alert">
                        <p class="font-bold"><?php echo ($message == 'success') ? 'Comment Posted!' : 'Comment not posted!'; ?></p>
                    </div>
                <?php endif; ?>
                <form class="mb-6" action="review.php" method="POST">
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write your name..." required>
                    </div>
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="review" class="sr-only">Your comment</label>
                        <textarea id="review" name="review" rows="6" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write a comment..." required></textarea>
                    </div>
                    <button type="submit" class="px-5 py-2 rounded-lg darkButton">
                        Post comment
                    </button>
                </form>
                <?php
                // Include the database connection file
                require '../database/conn.php';

                // Query to fetch all reviews
                $sql = "SELECT name, review, created_at FROM reviews";
                $result = $conn->query($sql);

                // Check if there are any reviews
                if ($result->num_rows > 0) {
                    // Output each review
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <!-- Profile picture (you can replace the src with the actual source) -->
                                    <img class="mr-2 w-6 h-6 rounded-full" src="../images/sillhoutte.jpg" alt="<?php echo $row['name']; ?>">
                                    <!-- Name of the reviewer -->
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><?php echo $row['name']; ?></p>
                                    <!-- Date of the review -->
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        <time pubdate datetime="<?php echo $row['created_at']; ?>" title="<?php echo $row['created_at']; ?>">
                                            <?php echo date('F j, Y g:ia', strtotime($row['created_at'])); ?>
                                        </time>
                                    </p>
                                </div>
                                <!-- Button for comment settings -->
                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu (if needed) -->
                                <div id="dropdownComment1" class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <!-- Dropdown content -->
                                </div>
                            </footer>
                            <!-- Review content -->
                            <p class="text-gray-500 dark:text-gray-400"><?php echo $row['review']; ?></p>
                        </article>
                <?php
                    }
                } else {
                    // Output a message if there are no reviews
                    echo "No reviews found";
                }

                // Close the database connection
                $conn->close();
                ?>

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