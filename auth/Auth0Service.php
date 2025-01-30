<?php
require_once __DIR__ . '/../auth0-php-main/src/Auth0.php';

class Auth0Service {
    private $auth0;
    
    public function __construct() {
        $config = require __DIR__ . './auth0-config.php';
        
        $this->auth0 = new \Auth0\SDK\Auth0([
            'domain' => $config['domain'],
            'clientId' => $config['client_id'],
            'clientSecret' => $config['client_secret'],
            'redirectUri' => $config['redirect_uri'],
            'scope' => $config['scope']
        ]);
    }
    
    public function login() {
        return $this->auth0->login();
    }
    
    public function handleCallback() {
        return $this->auth0->exchange();
    }
    
    public function getUser() {
        return $this->auth0->getUser();
    }
    
    public function logout() {
        $this->auth0->logout();
    }
}