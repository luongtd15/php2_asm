<?php

namespace App\Controllers\admin;

use App\Models\Category;

class CategoryController
{
    public function list()
    {
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('admin.category.add', compact('categories'));
    }

    public function store()
    {
        $data = $_POST;

        if (trim($data['name'] == '')) {
            $errors['name'] = 'Name is required.';
        } else if (strlen($data['name']) > 20) {
            $errors['name'] = 'Name cannot longer than 20 characters.';
        }

        $image = '';
        // dd($data);

        // handling image
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
        }

        $data['image'] = $image;

        if (empty($errors)) {
            Category::create($data);
            $_SESSION['category_success'] = 'Category: ' . $data['name'] . ' added successfully.';
            return redirect('admin/categories');
        } else {
            $_SESSION['category_error'] = $errors;
            return redirect('admin/categories/add');
        }
    }

    public function edit($id)
    {
        // $id = $_GET['id'];
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function categoryUpdate($id)
    {

        $data = $_POST;

        if (trim($data['name'] == '')) {
            $errors['name'] = 'Name is required.';
        } else if (strlen($data['name']) > 20) {
            $errors['name'] = 'Name cannot longer than 20 characters.';
        }

        $category = Category::find($id);
        $image = $category->image;

        // dd($data);

        // handling image
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
            $data['image'] = $image;
        }

        if (empty($errors)) {
            Category::update($data, $id);
            $_SESSION['category_success'] = 'Category: ' . $data['name'] . ' updated successfully.';
            return redirect('admin/category/edit/' . $id);
        } else {
            $_SESSION['category_error'] = $errors;
            return redirect('admin/category/edit/' . $id);
        }
    }

    public function destroy($id)
    {
        Category::delete($id);
        $_SESSION['category_success'] = 'Category deleted successfully.';
        return redirect('admin/categories');
    }
}
