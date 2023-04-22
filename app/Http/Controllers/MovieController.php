<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected function index(){
        $movie = Movie::all();
        return  $movie;
    }

    protected function show(string $id){
      $movie = Movie::find($id);
    }

    protected function store(Request $request){
        Movie::create($request -> all());
        return 'them thanh cong';

    }
}
