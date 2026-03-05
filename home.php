<?php
session_start();

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
    <header class="py-5">
      <nav class="flex justify-between items-center">
        <div class="flex items-center">
          <h2 class="text-2xl font-bold me-10">Logo</h2>
          <div class="space-x-4 text-sm">
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
          </div>
        </div>


        <div class="text-sm space-x-4">
          <a href="#" class="py-2 px-4 outline outline-gray-800 rounded-lg">My dashboard</a>
          <a href="./logout.php">Logout</a>
        </div>
      </nav>
    </header>

    <main>
      <section class="flex justify-center py-18">
        <div class="flex flex-col space-y-3 text-center">
          <h1 class="text-5xl font-bold">Create it. Scale it. Own it.</h1>
          <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, eligendi.</p>
          <div class="flex space-x-4 justify-center mt-4">
            <a href="#" class="py-3 px-6 bg-lime-400 hover:bg-lime-300 text-sm rounded-lg font-bold">Post Now</a>
            <a href="#" class="py-3 px-6 outline outline-gray-800 text-sm rounded-lg font-bold">Discover the platform</a>
          </div>
        </div>
      </section>

      <section class="space-y-3">
        <div class="flex justify-between items-center">
          <h3 class="text-xl font-bold">Posts</h3>

          <a href="#" class="py-2 px-4 bg-lime-400 hover:bg-lime-300 font-bold text-sm rounded-lg">New Post</a>
        </div>

        <div class="grid grid-cols-3 gap-3">
          <div class="flex flex-col outline outline-gray-800 p-4 rounded-lg">
            <h3 class="text-lg font-bold">Title</h3>
            <p class="text-xs text-gray-400 mb-2"><?= $user['name'] ?></p>
            <p class="text-gray-500 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ab voluptatibus error autem repudiandae vitae, minima fugiat nam necessitatibus tenetur.</p>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>

</html>