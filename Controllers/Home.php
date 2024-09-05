<?php 
    class Home extends Controllers{
        public function __construct() {
            session_start();
            parent::__construct();
            // if (empty($_SESSION['login'])) {
            //     header('Location:'.BASE_URL);
            // }
        }
        public function home() {
            $data['title_page'] = 'Thombo | Home';
            $data['js'] = ['landing.js'];
            $data['title_page'] = 'Thombo | Home';
            $this->views->getView($this, 'Home', $data);
        }

    }