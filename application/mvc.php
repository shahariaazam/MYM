<?php
require "load.php";

//load application model
require "model.php";

//load application controller
require "controller.php";

$C = new Controller();
$C->page();