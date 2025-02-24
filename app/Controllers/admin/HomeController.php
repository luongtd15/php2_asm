<?php

namespace App\Controllers\admin;


class HomeController
{
    public function admin()
    {
        if (isset($_SESSION['admin_logged_in'])) {
            return view('admin.home');
        } else {
            return redirect('login');
        }
    }
}
