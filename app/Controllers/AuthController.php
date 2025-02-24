<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{


    public function showLogin()
    {
        return view('login');
    }

    public function login()
    {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $user = User::where('email', '=', $email)->first();

        // dd($user);

        if ($user) {
            if (password_verify($password, $user->password)) {
                if ($user->role == 'admin') {
                    $_SESSION['admin_logged_in'] = $user;
                    // dd($_SESSION['admin_logged_in']);
                    return redirect('admin');
                } else {
                    $_SESSION['customer_logged_in'] = $user;
                    // dd($_SESSION['customer_logged_in']);
                    return redirect('');
                }
            } else {
                $_SESSION['login_error'] = 'Email or password is incorrect.';
                return redirect('login');
            }
        } else {
            $_SESSION['login_error'] = 'Email or password is incorrect.';
            return redirect('login');
        }
    }


    public function logout()
    {
        // Kiểm tra nếu admin đang đăng nhập
        if (isset($_SESSION['admin_logged_in'])) {
            unset($_SESSION['admin_logged_in']); // Xóa session admin
            return redirect('login');
        }

        // Kiểm tra nếu customer đang đăng nhập
        if (isset($_SESSION['customer_logged_in'])) {
            unset($_SESSION['customer_logged_in']); // Xóa session customer
            return redirect('');
        }

        // Nếu không có ai đang đăng nhập, quay lại trang chủ
        exit();
    }


    public function showRegister()
    {
        return view('register');
    }

    public function register()
    {
        $data = $_POST;

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // dd($data);

        if (trim($data['username'] == '')) {
            $_SESSION['username_error'] = 'Name is required.';
        } else if (strlen($data['username']) > 20) {
            $_SESSION['username_error'] = 'Name cannot longer than 20 characters.';
        }

        if (!isset($data['email']) || trim($data['email']) === '') {
            $_SESSION['email_error'] = 'Email is required.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email_error'] = 'Invalid email format.';
        }

        if (!isset($data['phone_number']) || trim($data['phone_number']) === '') {
            $_SESSION['phone_number_error'] = 'Phone number is required.';
        } elseif (!preg_match('/^[0-9]{9,11}$/', $data['phone_number'])) {
            $_SESSION['phone_number_error'] = 'Phone number must be 9 to 11 digits.';
        }

        if (!isset($data['password']) || empty(trim($data['password']))) {
            $_SESSION['password_error'] = 'Password is required.';
        }

        if (
            isset($_SESSION['username_error'])
            || isset($_SESSION['email_error'])
            || isset($_SESSION['phone_number_error'])
            || isset($_SESSION['password_error'])
        ) {
            $_SESSION['register_recent_data'] = $data;
            return redirect('register');
        } else {
            User::create($data);
            $_SESSION['register_success'] = 'User ' . $data['username'] . ' registered successfully.
            Now you can login to buy what you want.';
            return redirect('login');
        }
    }
}
