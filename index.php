<?php
require_once('helpers.php');
require_once('data.php');
$page_content = include_template('main.php', ['products' => $products, 'categories' => $categories]);
$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'title' => $title,
    'user_name' => $user_name,
    'is_auth' => $is_auth
]);
print($layout_content);
