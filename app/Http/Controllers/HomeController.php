<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class HomeController extends Controller
{
    public function index(){
        //get mahasiswa
        $list_mahasiswa = Mahasiswa::all()->sortByDesc('id'); // asc = sortBy() only
        $total_mahasiswa = $list_mahasiswa->count();
        return view('homepage',compact('list_mahasiswa', 'total_mahasiswa'));
    }
    
    public function detail($id){
        //get mahasiswa by id
        $detail_mahasiswa = Mahasiswa::findOrFail($id); 
        return view('detail',compact('detail_mahasiswa'));
    }
    
     public function add_new(){
        return view('add'); 
    }
    
    public function store(Request $request){
        $mahasiswa = new \App\Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->save();
        return redirect('/');
    }
	
	public function edit($id){
        //get mahasiswa by id
        $row_mahasiswa = Mahasiswa::findOrFail($id); 
        return view('edit',compact('row_mahasiswa'));
    }
	
	public function update($id, Request $request){
        //get mahasiswa by id
        $edit_mahasiswa = Mahasiswa::findOrFail($id); 
		$edit_mahasiswa->nama = $request->nama;
        $edit_mahasiswa->alamat = $request->alamat;
        $edit_mahasiswa->jurusan = $request->jurusan;
		$edit_mahasiswa->update();
		return redirect('/');
    }
	
	public function delete($id){
        //get mahasiswa by id
        $edit_mahasiswa = Mahasiswa::findOrFail($id); 
		$edit_mahasiswa->delete();
		return redirect('/');
    }
    
}
