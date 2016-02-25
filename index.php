<?php

include 'classes/class.Photo.php';
include 'classes/class.Blog.php';
include 'classes/class.Photographer.php';

include 'config.php';

$photo = new Photo();
$blog = new Blog("the-faded-lens");

$blog->post([
    'type' => 'photo',
    'source' => $photo->getURL(),
    'caption' => $photo->getCaption(),
    'tags' => 'photography'
]);

?>
