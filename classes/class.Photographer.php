<?php

class Photographer extends Photo {
    private $user;
    private $name;

    function __construct($photo) {
        $this->user = $photo->photographer();
        $this->name = $photo->user['name'];
    }

    function getName() {
        return $this->name;
    }

    function getPortfolioURL() {
        return $this->user->portfolio_url;
    }

    function hasURL($link) {
        if($link != "") {
            return true;
        } else {
            return false;
        }
    }

}

?>
