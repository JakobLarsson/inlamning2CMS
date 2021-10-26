<?php

get_header();

$title = get_field('page_title');
$description = get_field('description');
$link = get_field('page_link');
$heroImageArray = get_field('featured_image');
$heroImage = $heroImageArray['sizes']['large'];
?>

<div>
 <h1>
<h1 class="display-1"><?php echo $title; ?></h1>
 </h1>
 
</div>