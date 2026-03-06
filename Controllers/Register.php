<?php

namespace Controllers;

use Controllers\Database;

class Register extends Database
{

  private $name, $email, $password, $errors;

  public function __construct()
  {
    session_start();

    $this->name = $_POST['name'];
    $this->email = $_POST['email'];
    $this->password = $_POST['password'];


    $this->errors = [];

    $this->validateFields();

    parent::__construct();
  }

  private function validateFields()
  {
    if (!isset($this->name) || empty($this->name)) {
      $this->errors['name'] = 'The name field is required';
    }

    if (!isset($this->email) || empty($this->email)) {
      $this->errors['email'] = 'The email field is required';
    }

    if (!isset($this->password) || empty($this->password)) {
      $this->errors['password'] = 'Password field is required';
    }

    if (!empty($this->errors)) {
      $_SESSION['errors'] = $this->errors;

      header("Location: /register.php");
      die();
    }
  }

  public function save()
  {
    $query = "INSERT INTO users (name, email, password, updated_at, created_at)
              VALUES ('$this->name', '$this->email', '$this->password', NOW(), NOW())";

    $result = $this->sql->query($query);

    if ($result) {
      echo "User registered successfully!";
    } else {
      $this->sql->error;
    }

    $this->authenticate();
  }

  private function authenticate()
  {

    $query = "SELECT * FROM users WHERE email = '$this->email' LIMIT 1";

    $result = $this->sql->query($query);

    $user = $result->fetch_assoc();

    $_SESSION['user'] = $user;

    header('Location: /home.php');
    die();
  }
}
