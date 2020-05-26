<?php
use wjcms\composer\View;
use wjcms\composer\lib\User;

include '../vendor/autoload.php';

app();

$View = new View();
echo $View->show();

echo '<br/>';

$list = new User();
echo $list->list();