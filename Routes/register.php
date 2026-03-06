<?php

namespace Controllers;

use Controllers\Register;

require_once("../Controllers/Database.php");
require_once("../Controllers/Register.php");

$class = new Register();

$class->save();
