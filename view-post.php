<?php
require_once('./Controllers/Database.php');
require_once('./Controllers/Post.php');

$posts = new \Controllers\Post;
$getPost = $posts->getPost();


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

        <div class="flex items-center justify-center">
          <div class="flex flex-col space-y-1 outline outline-gray-800 p-4 rounded-lg w-100">
            <div>
              <h3 class="text-lg font-bold"><?= $getPost['title'] ?></h3>
              <p class="text-xs text-gray-400 mb-1"><?= $getPost['name'] ?></p>
              <div class="flex items-center space-x-3 mb-2">
                <a href="./edit-post.php?id=<?= $getPost['id'] ?>" class="text-xs text-green-500">Edit</a>
                <form action="./Routes/delete-post.php" method="POST">
                  <input type="hidden" name="post_id" value="<?= $getPost['id'] ?>">
                  <button type="submit" class="text-xs text-red-500">Delete</button>
                </form>
              </div>
            </div>
            <p class="text-gray-500 text-sm"><?= $getPost['body'] ?></p>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>

</html>