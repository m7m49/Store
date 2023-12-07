<?php

namespace Core;

class Authenticator {
    
    public function attempt($email, $password) {
        if ($email === "admin123@gmail.com" && $password === "admin321") {
            $this->login([
                'email' => $email
            ]);
            return true;
        }
        return false;
    }

    public function login() {
        $_SESSION['user'] = [
            'email' => "admin123@gmail.com"
        ];
    
        session_regenerate_id(true);
    }
    
    public function logout() {
        Session::destory();
    }
}