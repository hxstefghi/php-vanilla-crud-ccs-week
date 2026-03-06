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
    <?php

    require('./Components/nav.php');

    ?>

    <main>
      <div class="max-w-lg mx-auto">
        <section class="flex flex-col space-y-2 py-12">
          <h2 class="text-3xl font-bold mb-4">Create post</h2>

          <form action="./Routes/post.php" method="POST" class="space-y-1">
            <input type="hidden" name="user_id" value="<?php $user['id'] ?>">

            <?php

            $attribute = [
              'name' => 'title',
              'type' => 'text',
              'label' => 'Title',
            ];

            require('./Components/input-field.php');

            ?>

            <?php

            $attribute = [
              'name' => 'body',
              'label' => 'Body',
            ];

            require('./Components/textarea-field.php');

            ?>

            <button class="py-2 font-bold text-sm rounded-lg bg-lime-400 hover:bg-lime-300 cursor-pointer w-full mt-3">Create post</button>
          </form>
        </section>
      </div>
    </main>
  </div>
</body>

</html>