<?php

class Session {

    public function __construct() {
        if(session_status() != 2) session_start();
    }

    public function set(string $index, $data) {
        if(!empty($index)) {
            $_SESSION[$index] = $data;
        }
    }

    public function get(){
        if(empty($index)) return '';

        return isset($_SESSION[$index]) ? $_SESSION[$index] : '';
    }
}