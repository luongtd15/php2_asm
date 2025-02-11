<?php

namespace App\Controllers;

class CategoryController
{

    public function apple()
    {
        return view('categories.apple');
    }

    public function grapes()
    {
        return view('categories.grapes');
    }

    public function peach()
    {
        return view('categories.peach');
    }

    public function list()
    {
        return view('admin.category.list');
    }
}
