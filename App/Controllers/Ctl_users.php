<?php
    namespace App\Controllers;

    use App\Models\Mdl_users;

    class Ctl_users {
        public function users_list()
        {
            $usr_model=new Mdl_users();
            $info_guests = $usr_model->getAllGuests();
            include 'app/views/users/page.php';
        }
    }
