<?php

namespace Controllers;

use Controllers\Post;

require_once("../Controllers/Database.php");
require_once("../Controllers/Post.php");

$class = new Post();

$class->updatePost();
