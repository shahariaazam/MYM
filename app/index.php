<?php
require "View/view.php";

//load application model
require "Model/model.php";

//load application controller
require "Controller/controller.php";

$C = new Controller();
$C->page();