<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index(){
    $materials=Material::all();
    return view('admin.home.index',compact('materials'));
   }
}
