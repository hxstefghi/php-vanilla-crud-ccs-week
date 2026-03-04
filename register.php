<?php
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <main class="flex flex-col min-h-screen justify-center max-w-md mx-auto">
    <div class="space-y-1 text-center mb-5">
      <h1 class="text-3xl font-bold">Register an account</h1>
      <p class="text-sm text-gray-500">Try this app. No credit card needed</p>
    </div>

    <div class="flex space-x-4 mb-5">
      <button class="py-3 px-8 cursor-pointer rounded-lg border-1 border-gray-300 text-sm bg-gray-100"><i class="fa-brands fa-google"></i> Sign up with Google</button>
      <button class="py-3 px-8 cursor-pointer rounded-lg border-1 border-gray-300 text-sm bg-gray-100"><i class="fa-brands fa-apple"></i> Sign up with Apple</button>
    </div>

    <form action="./Routes/register.php" method="POST">
      <div class="flex flex-col space-y-3">
        <?php

        $attribute = [
          'name' => 'name',
          'label' => 'Name',
          'type' => 'text',
        ];

        require("./Components/input-field.php");
        ?>

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

        <button type="submit" class="w-full cursor-pointer py-2 text-sm font-bold rounded-lg bg-lime-300 hover:bg-lime-400">Register</button>
      </div>
    </form>

    <div class="text-center mt-4 space-y-4">
      <p class="text-sm text-gray-400">or</p>

      <p class="text-gray-400 text-sm">Already have an account? <a href="#" class="font-bold text-black">Login</a></p>
    </div>
  </main>
</body>

</html>