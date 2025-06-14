<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index(){
        $genres = DB::table('genres')->get();
        return view('genres.index', compact('genres'));
    }

    public function create(){
        return view('genres.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $query = DB::table('genres')->insert([
            'name' => $request['name'],
            'description' => $request['description'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/genre');
    }

    public function show($id){
        $genres = DB::table('genres')->where('id', $id)->first();
        return view('genres.show', compact('genres'));
    }

    public function edit($id){
        $genres = DB::table('genres')->where('id', $id)->first();
        return view('genres.edit', compact('genres'));
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $query = DB::table('genres')->where('id', $id)->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/genre');
    }

    public function destroy($id){
        $query = DB::table('genres')->where('id', $id)->delete();
        return redirect('/genre');
    }
}
