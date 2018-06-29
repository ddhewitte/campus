<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class HomeController extends Controller
{
    public function index(){
        //get mahasiswa
        $list_mahasiswa = Mahasiswa::all()->sortByDesc('id'); // asc = sortBy()
        $total_mahasiswa = $list_mahasiswa->count();
        return view('homepage',compact('list_mahasiswa', 'total_mahasiswa'));
    }
    
    public function detail($id){
        //get mahasiswa
        $detail_mahasiswa = Mahasiswa::findOrFail($id); 
        return view('detail',compact('detail_mahasiswa'));
    }
}
