<?php 
    class History extends Controllers{
        public function __construct() {
            session_start();
            parent::__construct();
            if (empty($_SESSION['login'])) {
                header('Location:'.BASE_URL);
            }
        }
        public function history() {
            $data['title_page'] = 'Thombo | History';
            $data['js'] = ['history.js'];
            $data['title_page'] = 'Thombo | History';
            $this->views->getView($this, 'History', $data);
        }

    }