<?php

namespace  Hillel\Controllers;

use Hillel\Models\Category;
class CategoryController
{
    public function index()
    {
        $categories = Category\all();

        return view(view: 'categories.index',( ['categories' => $categories]));
    }

    public function from()
    {
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (!isset($_POST['id'])){
                \Hillel\Models\Category::creste([
                    'title' => $_POST['title'],
                    'slug' => $_POST['slug'],
                ]);
            }  else {
                $category = \Hillel\Models\Category::find($_POST['id']);
                $category->update([
                    'title' => $_POST['title'],
                    'slug' => $_POST['slug'],
                ]);
            }
            header(header:'Location: / categories');
        }
        if(!empty($_GET['id'])){
            $data['category']=\Hillel\Models\Category::find($_POST['id']);
        }
        return view('categories.form', $data);
    }
}
