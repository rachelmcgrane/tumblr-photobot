<?php

class Blog {
    private $url = "";
    private $client;

    function __construct($url) {
        $this->url = $url;
        $this->client = new Tumblr\API\Client(TUMBLR_CONSUMER_KEY, TUMBLR_COMSUMER_SECRET);
        $this->client->setToken(TUMBLR_TOKEN, TUMBLR_TOKEN_SECRET);
    }

    public function getURL() {
        return $this->url . ".tumblr.com";
    }

    public function getClient() {
        return $this->client;
    }

    public function post($postMeta) {
        $this->client->createPost($this->url, $postMeta);
    }
}

?>
