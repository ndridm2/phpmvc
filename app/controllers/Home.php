<?php
    
    class Home extends Controller {
        public function index() 
        {
            $data['title'] = 'Home';

            // $data['name'] = 'Andridm';
            $data['profession'] = 'Developer';
            $data['name'] = $this->model('User_model')->getUser();

            $this->view('templates/header', $data);
            $this->view('templates/navbar');
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }