<?php

    class Photo {
        private $photoURL = "";
        private $user;

        function __construct() {
            $photo = Crew\Unsplash\Photo::random();
            $this->photoURL = $photo->urls['regular'];
            $this->user = new Photographer($photo);
        }

        function getURL() {
            return $this->photoURL;
        }

        function getPhotographer() {
            return $this->user['name'];
        }


        function getCaption() {
            $user = $this->user;
            $link = $user->getPortfolioURL();
            $name = $user->getName();
            if($user->hasURL($link)) {
                return '<em>By <a href="'. $link .'">'. $name .'</a></em>';
            } else {
                return '<em>By '. $name .'</em>';
            }
        }
    }
?>
