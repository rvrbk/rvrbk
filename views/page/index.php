<?php 

$this->layout('layout/layout', [
    'title' => $title,
    'content' => $content
]);

?>

<h1><?= $this->e($title) ?></h1>