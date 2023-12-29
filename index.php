<?php
require 'function.php';
require 'database.php';
// require 'router.php';

$config= require('config.php');



$db=new database($config['database']);
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);