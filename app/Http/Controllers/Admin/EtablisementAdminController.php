<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Etablisement;
use App\Models\User;
use Illuminate\Http\Request;

class EtablisementAdminController extends Controller
{
    public function index(){
        $etablisements=Etablisement::with('users')->paginate(5);
        return view('admin.etablisement.index',compact('etablisements'));
    }
    public function create(){
        $users=User::all();
        return view('admin.etablisement.index',compact('users'));
    }
    public function store(Request $request){
        $valide=$request->validate([
            'codeEtablisement' => 'required|unique:etablisements',
            'nom' => 'required|max:255',
        ]);

        Etablisement::create($valide);
        return redirect('admin/etablisements');
    }
    public function destroy($id){
        Etablisement::destroy($id);
        return back();
    }
}
