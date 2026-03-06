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

          <a href="./create-post.php" class="py-2 px-4 bg-lime-400 hover:bg-lime-300 font-bold text-sm rounded-lg">New Post</a>
        </div>

        <div class="grid grid-cols-3 gap-3">


          <?php

          foreach ($allPosts as $post) {

          ?>
            <div class="flex flex-col outline outline-gray-800 p-4 rounded-lg">
              <h3 class="text-lg font-bold"><?= $post['title'] ?></h3>
              <p class="text-xs text-gray-400 mb-2"><?= $post['name'] ?></p>
              <p class="text-gray-500 text-sm"><?= $post['body'] ?></p>
            </div>

          <?php

          }

          ?>

        </div>
      </section>
    </main>
  </div>
</body>

</html>