<?php 
    class Admin extends Controllers{
        public function __construct() {
            session_start();
            parent::__construct();
            // if (empty($_SESSION['login'])) {
            //     header('Location:'.BASE_URL);
            // }
        }
        public function admin() {
            $data['title_page'] = 'Thombo | Admin';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Admin';
            $data['section'] = 'Home';
            $data['breadcumb'] = 'Home';

            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }

        public function s2s() {
            $data['title_page'] = 'Thombo | S2S';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | S2S';
            $data['section'] = 'S2S';
            $data['breadcumb'] = 'Card transactions';

            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function online() {
            $data['title_page'] = 'Thombo | Online';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Online';
            $data['section'] = 'Online';
            $data['breadcumb'] = 'Card transactions';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function offline() {
            $data['title_page'] = 'Thombo | Offline';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Offline';
            $data['section'] = 'Offline';
            $data['breadcumb'] = 'Card transactions';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function d2() {
            $data['title_page'] = 'Thombo | 2D';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | 2D';
            $data['section'] = 'D2';
            $data['breadcumb'] = 'Card transactions';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function d3() {
            $data['title_page'] = 'Thombo | 3D';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | 3D';
            $data['section'] = 'D3';
            $data['breadcumb'] = 'Card transactions';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function uploads() {
            $data['title_page'] = 'Thombo | Uploads';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Uploads';
            $data['section'] = 'Uploads';
            $data['breadcumb'] = 'File Uploads';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function transactions() {
            $data['title_page'] = 'Thombo | Transactions';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Transactions';
            $data['section'] = 'Transactions';
            $data['breadcumb'] = 'Server to Server';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function settingss2s() {
            $data['title_page'] = 'Thombo | Setting S2S';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Setting S2S';
            $data['section'] = 'Settings S2S';
            $data['breadcumb'] = 'Server to Server';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function fin() {
            $data['title_page'] = 'Thombo | Uploads';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Uploads';
            $data['section'] = 'Fin';
            $data['breadcumb'] = 'File Uploads';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function binary() {
            $data['title_page'] = 'Thombo | Uploads';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Uploads';
            $data['section'] = 'Binary';
            $data['breadcumb'] = 'File Uploads';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }
        public function btcfiles() {
            $data['title_page'] = 'Thombo | Uploads';
            $data['js'] = ['admin.js'];
            $data['title_page'] = 'Thombo | Uploads';
            $data['section'] = 'BTC Files';
            $data['breadcumb'] = 'File Uploads';
            
            $this->views->getView('DashboardAdmin', 'DashboardAdmin', $data);
        }


    }