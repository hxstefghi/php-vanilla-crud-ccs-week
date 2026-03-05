<?php

namespace Controllers;

use Register;

require_once("../Controllers/Database.php");
require_once("../Controllers/Register.php");

$class = new Register();

$class->save();
