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
        
        return view('website/movie/editMovie', [
            "id" => $id,
            "movie" => $movie,
        ]);
    }

    public function showAll()
    {
        $movie_model = new MovieModel();
        $movies = $movie_model->findAll();

        $array = [
            "movies" => $movies,
        ];

        return view('website/movie/showAll', $array);
    }

    public function store()
    {
        $movie_title = esc($this->request->getPost('movie_title'));
        $movie_synopsis = esc($this->request->getPost('movie_synopsis'));
        $movie_genre = esc($this->request->getPost('movie_genre'));
        $movie_date = esc($this->request->getPost('movie_date'));
        
        $movie_data = [
            'movie_title' => $movie_title,
            'movie_synopsis' => $movie_synopsis,
            'movie_genre' => $movie_genre,
            'movie_date' => $movie_date,
        ];

        $movie_model = new MovieModel();
        $movie_model->insert($movie_data);

        return redirect()->to(base_url('movie'));

        // return redirect()->back();

    }

    public function update($id)
    {
        $movie_title = esc($this->request->getPost('movie_title'));
        $movie_synopsis = esc($this->request->getPost('movie_synopsis'));
        $movie_genre = esc($this->request->getPost('movie_genre'));
        $movie_date = esc($this->request->getPost('movie_date'));

        $movie_data = [
            'movie_title' => $movie_title,
            'movie_synopsis' => $movie_synopsis,
            'movie_genre' => $movie_genre,
            'movie_date' => $movie_date,
        ];

        $movie_model = new MovieModel();

        $movie = $movie_model->where('id', $id)
            ->set($movie_data)
            ->update();

        return redirect()->to(base_url('movie'));    
        // return redirect()->back();

    }

    public function delete($id)
    {
        $movie_model = new MovieModel();

        $existingMovie = $movie_model->find($id);

        if ($existingMovie) {
            
            $movie_model->delete($id);

            return redirect()->to(base_url('movie'));

        } else {
            return "Movie not found";
        }
    }
}