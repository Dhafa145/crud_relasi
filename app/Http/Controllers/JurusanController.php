<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;//add jurusan Model - Data is coming from the database via Model.

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view ('jurusan.index')->with('jurusan',$jurusan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
       Jurusan::create($input);

        return redirect('jurusan')->with('flash_message', 'jurusan Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan.show')->with('jurusan', $jurusan);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $jurusan = Jurusan::find($id);
        return view('jurusan.edit')->with('jurusan', $jurusan);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $jurusan = Jurusan::find($id);
        $input =$request->all();
        $jurusan->update($input);
        return redirect('jurusan')->with('flash_message', 'jurusan Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Jurusan::destroy($id);
        return redirect('jurusan')->with('flash_message', 'jurusan deleted!');

    }
}
