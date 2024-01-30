<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MovieModel;
use CodeIgniter\HTTP\ResponseInterface;


class MovieController extends BaseController
{
    public function index()
    {
        $movie_model = new MovieModel();
        $movies = $movie_model->findAll();

        $array = [
            "movies" => $movies,
        ];

        return view('website/movie/movie', $array);
    
    }

    public function create()
    {
        return view("website/movie/createMovie");
    }
    
    public function edit($id)
    {
        $movie_model = new MovieModel;
        $movie = $movie_model->where('id', $id)->first();
        
        return view('editMovie', [
            "id" => $id,
            "movie" => $movie,
        ]);
    }

    public function store()
    {
        $movie_title = esc($this->request->getPost('movie_title'));
        $movie_synopsis = esc($this->request->getPost('movie_synopsis'));

        $movie_data = [
            'movie_title' => $movie_title,
            'movie_synopsis' => $movie_synopsis,
        ];

        $movie_model = new MovieModel();
        $movie_model->insert($movie_data);

        return redirect()->back();

    }

    public function update($id)
    {
        $movie_title = esc($this->request->getPost('movie_title'));
        $movie_synopsis = esc($this->request->getPost('movie_synopsis'));

        $movie_data = [
            'movie_title' => $movie_title,
            'movie_synopsis' => $movie_synopsis,
        ];

        $movie_model = new MovieModel();

        $movie = $movie_model->where('id', $id)
            ->set($movie_data)
            ->update();

        return redirect()->back();

    }
}