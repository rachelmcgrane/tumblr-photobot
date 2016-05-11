<?php

require_once '../vendor/autoload.php';

// Define constants
const TUMBLR_CONSUMER_KEY = 'XXXXXX';
const TUMBLR_COMSUMER_SECRET = 'XXXXXX';
const TUMBLR_TOKEN = 'XXXXXX';
const TUMBLR_TOKEN_SECRET = 'XXXXXX';

const UNSPLASH_API_KEYS = 'XXXXXX';

Crew\Unsplash\HttpClient::init([
    'applicationId' => UNSPLASH_API_KEYS
]);

?>
