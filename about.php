<?php
require_once('./Controllers/Database.php');
require_once('./Controllers/Post.php');

$posts = new \Controllers\Post;
$allPosts = $posts->getAllPosts();


$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$user = isset($_SESSION['user']) ? $_SESSION['user'] : [];

?>

<!DOCTYPE html>
<html lang="en">

<?php

require_once('./Components/head.php');

?>

<body>
  <div class="max-w-5xl mx-auto">
    <?php

    require('./Components/nav.php');

    ?>
  </div>

  <main>
    <section>
      <div class="flex flex-col justify-center items-center bg-green-800 py-18 text-white">
        <div class="space-y-3 text-center">
          <h1 class="font-extrabold text-5xl">About Us</h1>
          <p class="text-sm text-green-300">Dedicated to holistic formation, producing competent IT professionals for a tech-driven world.</p>
        </div>
      </div>
    </section>

    <section class="py-18">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-10">
          <h1 class="text-4xl font-extrabold text-green-600">Vision & Mission</h1>
        </div>

        <div class="flex justify-center space-x-10">
          <div class="flex flex-1 flex-col items-start justify-center p-6 outline-1 outline-green-400 rounded-lg space-y-6">
            <div>
              <h2 class="text-2xl font-bold text-green-400">OLFU Vision</h2>
              <p>A premier inclusive university of choice aspiring to improve man as man.</p>
            </div>

            <div>
              <h2 class="text-2xl font-bold text-green-400">OLFU Mission</h2>
              <p>Our Lady of Fatima University is dedicated to the holistic formation of individuals imbued with knowledge, skills, and virtues for the service of God, the community, the country, and humanity.</p>
            </div>
          </div>

          <div class="flex flex-1 flex-col items-start justify-center p-6 outline-1 outline-green-400 rounded-lg space-y-6">
            <div>
              <h2 class="text-2xl font-bold text-green-400">CCS Vision</h2>
              <p>To be the institution of choice for producing competent IT professionals sensitive to industry demands and responsive to global technological advancements.</p>
            </div>

            <div>
              <h2 class="text-2xl font-bold text-green-400">CCS Mission</h2>
              <p>Empowering future technologists and shaping the future of IT professionals with industry-relevant skills, hands-on experience, and a strong ethical foundation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-18 bg-green-100">
      <div class="max-w-5xl mx-auto">
        <div class="text-center space-y-3 mb-6">
          <h2 class="text-4xl font-bold text-green-700">Core Values - RISE</h2>
          <p class="text-green-800">The guiding principles that define who we are and how we serve.</p>
        </div>

        <div class="flex gap-8 justify-center">
          <div class="flex flex-col p-8 text-center items-center space-y-3 bg-white rounded-lg w-70">
            <div class="flex items-center justify-center w-15 h-15 p-4 bg-green-700 font-bold rounded-full text-white text-2xl">
              R
            </div>
            <div class="flex flex-col">
              <h3 class="text-green-700 font-bold">Respect</h3>
              <p class="text-md text-gray-700">We honor the dignity of every individual and value diverse perspectives.</p>
            </div>
          </div>

          <div class="flex flex-col p-8 text-center items-center space-y-3 bg-white rounded-lg w-70">
            <div class="flex items-center justify-center w-15 h-15 p-4 bg-green-700 font-bold rounded-full text-white text-2xl">
              I
            </div>
            <div class="flex flex-col">
              <h3 class="text-green-700 font-bold">Integrity</h3>
              <p class="text-md text-gray-700">We honor the dignity of every individual and value diverse perspectives.</p>
            </div>
          </div>

          <div class="flex flex-col p-8 text-center items-center space-y-3 bg-white rounded-lg w-70">
            <div class="flex items-center justify-center w-15 h-15 p-4 bg-green-700 font-bold rounded-full text-white text-2xl">
              S
            </div>
            <div class="flex flex-col">
              <h3 class="text-green-700 font-bold">Service</h3>
              <p class="text-md text-gray-700">We honor the dignity of every individual and value diverse perspectives.</p>
            </div>
          </div>

          <div class="flex flex-col p-8 text-center items-center space-y-3 bg-white rounded-lg w-70">
            <div class="flex items-center justify-center w-15 h-15 p-4 bg-green-700 font-bold rounded-full text-white text-2xl">
              E
            </div>
            <div class="flex flex-col">
              <h3 class="text-green-700 font-bold">Excellent</h3>
              <p class="text-md text-gray-700">We honor the dignity of every individual and value diverse perspectives.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-18">
      <div class="max-w-5xl mx-auto">
        <div class="text-center space-y-4">
          <h1 class="text-4xl font-bold text-green-700">Graduate Attributes - ACHIEVER</h1>
          <p>Every CCS graduate embodies these qualities, ready to make a difference in the world.</p>
        </div>

        <div class="flex justify-center space-x-3 py-8">
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400 hover:bg-green-800 hover:text-white hover:outline-none">
            <p class="font-bold"><span class="text-green-500 mr-2 transition">A</span>spirational</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">C</span>ompassionate</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">H</span>onorable</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">I</span>nspiring</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">E</span>fficient</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">V</span>isionary</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">E</span>thical</p>
          </div>
          <div class="flex justify-center items-center py-2 px-5 rounded-full outline-1 outline-green-400">
            <p class="font-bold"><span class="text-green-500 mr-2">R</span>esponsible</p>
          </div>
        </div>
      </div>
    </section>

    <footer class="py-18 bg-green-700">
      <div class="max-w-5xl mx-auto">
        <div class="flex gap-10">
          <div class="flex flex-1 flex-col space-y-2">
            <h3 class="font-bold text-white text-lg">OLFU CCS</h3>

            <div class="flex flex-col space-y-2 text-white">
              <p class="text-green-300 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, vel!</p>
            </div>
          </div>

          <div class="flex flex-1 flex-col space-y-2">
            <h3 class="font-bold text-white text-lg">Quick Links</h3>

            <div class="flex flex-col space-y-2 text-white">
              <a href="#" class="text-green-300 text-sm">Home</a>
              <a href="#" class="text-green-300 text-sm">About</a>
              <a href="#" class="text-green-300 text-sm">Gallery</a>
              <a href="#" class="text-green-300 text-sm">Contact</a>
            </div>
          </div>

          <div class="flex flex-1 flex-col space-y-2">
            <h3 class="font-bold text-white text-lg">Contact</h3>

            <div class="flex flex-col space-y-2 text-white">
              <p class="text-green-300 text-sm">admissions@ccs.edu</p>
              <p class="text-green-300 text-sm">+123-456-7890</p>
              <p class="text-green-300 text-sm">123 Tech Ave., Innovation City</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </main>
</body>

</html>