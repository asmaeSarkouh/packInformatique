<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialAdminController extends Controller
{
    public function index(){
        $materials=Material::with('etablisements')->paginate(5);
        return view('admin.material.index',compact('materials'));
    }
    public function destroy($id){
        Material::destroy($id);
        return back();
    }
}
