<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
    	$artikel= Artikel::all();
    	return view('artikel.index',['artikel'=>$artikel]);
    }
    public function create()
    {
    	return view('artikel.create');
    }
    public function store(Request $request)
    {
    	Artikel::create([
    		'judul' =>request('judul'),
    		'isi' =>request('isi'),
    		'tag' =>request('tag'),
    		'slug' =>Str::slug($request->judul)
    	]);

    	return redirect('/artikel');
    }

    public function edit($id)
    {
    	$artikel = Artikel::find($id);
    	return view('artikel.edit', ['artikel' => $artikel]);
    }
    public function update(Request $request,$id)
    {
    	$artikel = Artikel::find($id);
    	$artikel->update($request->all());
    	return redirect('/artikel');
    }
    public function delete($id)
    {
    	$artikel = Artikel::find($id);
    	$artikel->delete($artikel);
    	return redirect('/artikel');
    }

    public function show($id)
    {
    	$artikel = Artikel::find($id);
    	return view('artikel.show', ['artikel' => $artikel]);

    }
}
