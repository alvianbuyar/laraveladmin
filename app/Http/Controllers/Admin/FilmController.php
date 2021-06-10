<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Film;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Fields;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Data Film';
        $data = Film::all();
        return view('admin/film/index', compact('pagename', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagename = 'Form Input Film';
        return view('admin.film.create' , compact('pagename'));
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
            'film' => 'required',
            'kode_film' => 'required',
            'judul_film' => 'required',
            'genre_film' => 'required',
        ]);

        $data_film = new Film([
            'film'=> $request -> get('film'),
            'kode_film' => $request -> get('kode_film'),
            'judul_film' => $request -> get('judul_film'),
            'genre_film' => $request -> get('genre_film'),
        ]);

        $data_film->save();
        return redirect('admin\film')->with('sukses', 'Data film berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pagename = 'Form Edit Film';
        $data = Film::find($id);
        // $data_genre_film = [

        //     "Senin",
        //     "Selasa",
        //     "Rabu",
        //     "Kamis",
        //     "Jumat",
        //     "Sabtu",
        //     "Minggu",
        // ];
        return view('admin.film.edit' , compact('pagename', 'data', 'data_genre_film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'film' => 'required',
            'kode_film' => 'required',
            'judul_film' => 'required',
            'genre_film' => 'required',
        ]);

       $film= Film::find($id);
            $film->film = $request -> get('film');
            $film->kode_film = $request -> get('kode_film');
            $film->judul_film = $request -> get('judul_film');
            $film->genre_film = $request -> get('genre_film');
        

        $film->save();
        return redirect('admin\film')->with('sukses', 'FIlm berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);

        $film->delete();
        return redirect('datasapi')->with('sukses', 'film berhasil dihapus');
    }
}
