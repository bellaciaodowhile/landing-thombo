<?php 
    class Buy extends Controllers{
        public function __construct() {
            session_start();
            parent::__construct();
            if (empty($_SESSION['login'])) {
                header('Location:'.BASE_URL);
            }
        }
        public function buy() {
            $data['title_page'] = 'Thombo | Buy';
            $data['js'] = ['buy.js'];
            $data['title_page'] = 'Thombo | Buy';
            $this->views->getView($this, 'Buy', $data);
        }

    }