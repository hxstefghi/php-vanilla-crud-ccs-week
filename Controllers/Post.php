<?php

namespace Controllers;

use Controllers\Database;

class Post extends Database
{
  private $user_id, $title, $body, $errors, $get_post_id, $post_id;

  public function __construct()
  {
    session_start();

    parent::__construct();

    $this->user_id = $_SESSION['user']['id'] ?? null;
    $this->title = $_POST['title'] ?? null;
    $this->body = $_POST['body'] ?? null;
    $this->get_post_id = $_GET['id'] ?? null;
    $this->post_id = $_POST['post_id'] ?? null;

    $this->errors = [];
  }

  private function validateFields()
  {

    if (!isset($this->title) || empty($this->title)) {
      $this->errors['title'] = "The title field is required";
    }

    if (!isset($this->body) || empty($this->body)) {
      $this->errors['body'] = "The body field is required";
    }

    if (!empty($this->errors)) {
      $_SESSION['errors'] = $this->errors;

      header("Location: /create-post.php");
      die();
    }
  }

  public function save()
  {
    $this->validateFields();

    $query = "INSERT INTO posts (user_id, title, body, updated_at, created_at)
              VALUES('$this->user_id', '$this->title', '$this->body', NOW(), NOW())";

    $result = $this->sql->query($query);

    if ($result) {
      echo "Post successfully created!";

      header("Location: /home.php");
      die();
    } else {
      $this->sql->error;
    }
  }

  public function getAllPosts(): array
  {
    $query = "SELECT posts.*, users.name, users.email
              FROM posts
              LEFT JOIN users ON posts.user_id = users.id
              ORDER BY posts.created_at DESC ";

    $result = $this->sql->query($query);

    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function getPost(): array
  {
    $query = "SELECT posts.*, users.name, users.email
              FROM posts
              LEFT JOIN users ON posts.user_id = users.id
              WHERE posts.id='$this->get_post_id'";

    $result = $this->sql->query($query);

    return $result->fetch_assoc();
  }

  public function updatePost()
  {
    $query = "UPDATE posts SET title = '$this->title', body = '$this->body', updated_at = NOW()
              WHERE id = '$this->post_id'";

    $result = $this->sql->query($query);

    if (!$result) {
      die("Error updating post " . $this->sql->error);
    } else {
      header("Location: /view-post.php?id=" . $this->post_id);
      die();
    }
  }

  public function deletePost()
  {
    $query = "DELETE FROM posts WHERE id = '$this->post_id'";

    $result = $this->sql->query($query);

    if (!$result) {
      die("Error deleting post " . $this->sql->error);
    } else {
      header("Location: /home.php");
      die();
    }
  }
}
