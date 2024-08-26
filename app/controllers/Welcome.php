<?php
    class Welcome extends controller {
        public function index() {
            $this->view('welcome_message');
        }
    }