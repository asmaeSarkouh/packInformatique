<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Etablisement;
use Illuminate\Http\Request;

class EtablisementController extends Controller
{
    public function index(){
        $etablisements=Etablisement::with('materials','users')->paginate(5);
        return view('page.etablisement.index',compact('etablisements'));
    }

    public function destroy($id){
        Etablisement::destroy($id);
        return back();
    }
}
