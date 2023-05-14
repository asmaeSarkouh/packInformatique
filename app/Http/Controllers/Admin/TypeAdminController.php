<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeAdminController extends Controller
{
    public function index(){
        $types=Type::paginate(3);
        return view('admin.typeMaterial.index',compact('types'));
    }
    public function create(){
        return view('admin.typeMaterial.index');
    }
    public function store(Request $request){
        $valide=$request->validate([
            'title' => 'required|max:255',
        ]);

        Type::create($valide);
        return redirect('admin/types');
    }
    public function destroy($id){
        Type::destroy($id);
        return back();
    }
}
