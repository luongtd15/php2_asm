<?php

namespace App\Controllers\admin;

use App\Models\User;

class UserController
{
    public function list()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function store()
    {
        $data = $_POST;

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if (trim($data['username'] == '')) {
            $errors['username'] = 'username is required.';
        } else if (strlen($data['username']) > 20) {
            $errors['username'] = 'username cannot longer than 20 characters.';
        }

        if (!isset($data['email']) || trim($data['email']) === '') {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format.';
        }

        if (!isset($data['phone_number']) || trim($data['phone_number']) === '') {
            $errors['phone_number'] = 'Phone number is required.';
        } elseif (!preg_match('/^[0-9]{9,11}$/', $data['phone_number'])) {
            $errors['phone_number'] = 'Phone number must be 9 to 11 digits.';
        }

        // if (!isset($data['password']) || trim($data['password']) === '') {
        //     $errors['password'] = 'Password is required.';
        // } elseif (strlen($data['password']) < 6) {
        //     $errors['password'] = 'Password must be at least 6 characters.';
        // }

        $image = '';
        $file = $_FILES['avatar'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
            $data['avatar'] = $image;
        }

        if (empty($errors)) {
            User::create($data);
            $_SESSION['user_success'] = 'User ' . $data['username'] . ' added successfully';
            return redirect('admin/users');
        } else {
            $_SESSION['user_recent_data'] = $data;
            $_SESSION['user_error'] = $errors;
            return redirect('admin/users/add');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);


        return view('admin.user.edit', compact('user'));
    }

    public function userUpdate($id)
    {
        $data = $_POST;

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $user = User::find($id);


        if (trim($data['username'] == '')) {
            $errors['username'] = 'username is required.';
        } else if (strlen($data['username']) > 20) {
            $errors['username'] = 'username cannot longer than 20 characters.';
        }

        if (!isset($data['email']) || trim($data['email']) === '') {
            $errors['email'] = 'Email is required.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format.';
        }

        if (!isset($data['phone_number']) || trim($data['phone_number']) === '') {
            $errors['phone_number'] = 'Phone number is required.';
        } elseif (!preg_match('/^[0-9]{9,11}$/', $data['phone_number'])) {
            $errors['phone_number'] = 'Phone number must be 9 to 11 digits.';
        }

        // if (!isset($data['password']) || trim($data['password']) === '') {
        //     $errors['password'] = 'Password is required.';
        // } elseif (strlen($data['password']) < 6) {
        //     $errors['password'] = 'Password must be at least 6 characters.';
        // }

        $file = $_FILES['avatar'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
            $data['avatar'] = $image;
        }

        // dd($image);

        if (empty($errors)) {
            User::update($data, $id);
            $_SESSION['user_success'] = 'User ' . $data['username'] . ' updated successfully';
            return redirect('admin/user/edit/' . $id);
        } else {
            $_SESSION['user_error'] = $errors;
            return redirect('admin/user/edit/' . $id);
        }
    }

    public function destroy($id)
    {
        User::delete($id);
        $_SESSION['user_success'] = 'User deleted successfully';
        return redirect('admin/users');
    }
}
