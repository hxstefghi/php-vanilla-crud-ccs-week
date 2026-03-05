<?php
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<?php

require_once('./Components/head.php');

?>

<body>
  <main class="flex flex-col min-h-screen justify-center max-w-md mx-auto">
    <div class="space-y-1 text-center mb-5">
      <h1 class="text-3xl font-bold">Login your account</h1>
      <p class="text-sm text-gray-500">Try this app. No credit card needed</p>
    </div>

    <div class="flex space-x-4 mb-5">
      <button class="py-3 px-8 cursor-pointer rounded-lg border-1 border-gray-300 text-sm bg-gray-100"><i class="fa-brands fa-google"></i> Sign in with Google</button>
      <button class="py-3 px-8 cursor-pointer rounded-lg border-1 border-gray-300 text-sm bg-gray-100"><i class="fa-brands fa-apple"></i> Sign in with Apple</button>
    </div>

    <form action="./Routes/login.php" method="POST">
      <div class="flex flex-col space-y-3">

        <?php

        $attribute = [
          'name' => 'email',
          'label' => 'Email',
          'type' => 'email',
        ];

        require("./Components/input-field.php");
        ?>

        <?php

        $attribute = [
          'name' => 'password',
          'label' => 'Password',
          'type' => 'password',
        ];

        require("./Components/input-field.php");
        ?>

        <button type="submit" class="w-full cursor-pointer py-2 text-sm font-bold rounded-lg bg-lime-300 hover:bg-lime-400">Login</button>
      </div>
    </form>

    <div class="text-center mt-4 space-y-4">
      <p class="text-sm text-gray-400">or</p>

      <p class="text-gray-400 text-sm">Don't have an account? <a href="./register.php" class="font-bold text-black">Register</a></p>
    </div>
  </main>
</body>

</html>