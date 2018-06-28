<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class HomeController extends Controller
{
    public function index(){
	//get mahasiswa
	$list_mahasiswa = Mahasiswa::all();
	return view('homepage',compact('list_mahasiswa'));
    }
}
