<?php
use firebase\JWT\JWT;

class AuthMiddleware{
    public function checkTOken($token) {
        $secret = $_ENV['JWT_SECRET'];
        try {
            $decode = JWT::decode($token, $secret, ['HS256']);
        }catch (exception $e){
            return null;
        }
    }
}

?>