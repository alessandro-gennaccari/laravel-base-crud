<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
// Validation Unique Update
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('film.index', ['films' => Film::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
            'name' => 'required|unique:films|max:255',
            'genre' => 'required|max:30',
            'director' => 'required|max:100',
            'year' => 'required|max:4'
        ]);
        
        $addFilm = new Film();
        
        $addFilm->fill($request->all());
        $addFilm->save();

        return redirect()->route('film.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        if($film){

            return view('film.show', ['info' => $film]);
            
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        if($film){

            return view('film.edit', ['edit' => $film]);
            
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FIlm $film)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('films')->ignore($film),
                'max:255'
            ],
            'genre' => 'required|max:30',
            'director' => 'required|max:100',
            'year' => 'required|max:4'
        ]);

        $film->update($request->all());

        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        
        return redirect()->route('film.index');
    }
}
