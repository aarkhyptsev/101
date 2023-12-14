<?php declare(strict_types=1);
require('classes/Posts.php');
/* I testy Git */


use App\Posts;
$title = 'My Blog';

$posts = Posts::getAll();
$numPosts = count($posts);
$postText = Posts::getText($numPosts);
$numPostsDisplay = "$numPosts $postText";
?>
    <h1><?= $title ?></h1>
    <h2><?= $numPostsDisplay ?></h2>
<?php for ($i = 0; $i < $numPosts; $i++) : ?>
    <h3><?= $posts[$i]['title'] ?></h3>
    <p><?= $posts[$i]['content'] ?></p>
    <p>By <?= $posts[$i]['author'] ?></p>
<?php endfor ?>