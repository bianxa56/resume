<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    public function index()
    {

        $blog_model = new BlogModel();
        $blogs = $blog_model->findAll();

        $array = [
            "blogs" => $blogs,
        ];

        return view('blog/index', $array);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function edit($id)
    {
        $blog_model = new BlogModel();
        $blog = $blog_model->where('blog_id', $id)->first();

        return view('blog/edit', [
            "user_id" => $id,
            "blog" => $blog,
        ]);
    }

    public function store()
    {
        $blog_title = esc($this->request->getPost('blog_title'));
        $blog_description = esc($this->request->getPost('blog_description'));

        $blog_data = [
            'blog_title' => $blog_title,
            'blog_description' => $blog_description,
        ];

        $blog_model = new BlogModel();
        $blog_model->insert($blog_data);

        return redirect()->back();
    }

    public function update($id)
    {
        $blog_title = esc($this->request->getPost('blog_title'));
        $blog_description = esc($this->request->getPost('blog_description'));

        $blog_data = [
            'blog_title' => $blog_title,
            'blog_description' => $blog_description,
        ];

        $blog_model = new BlogModel();

        $blog = $blog_model->where('blog_id', $id)
            ->set($blog_data)
            ->update();

        return redirect()->back();
    }
}