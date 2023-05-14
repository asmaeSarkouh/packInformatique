<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Providers\RouteServiceProvider;
use Faker\Core\Number;
use Livewire\Component;
class UserAdminController extends Component
{
    public function index(){
        $users=User::paginate(5);
        return view('admin.user.index',compact('users'));
    }
    public function create(){
        return view('admin.user.index');
    }
    public function store(Request $request){
        $valide=$request->validate([
            'name' => 'required|max:255',
            'ppr' => 'required|numeric|min:0|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|same:passwordConfirmation',
        ]);
        
        User::create($valide);
        return redirect('admin/users');
    }
    public function destroy($id){
        User::destroy($id);
        return back();
    }
//     /** @var string */
//     public $name = '';
//     /** @var integer */ 
//     public $ppr = 0;

//     /** @var string */
//     public $email = '';

//     /** @var string */
//     public $password = '';

//     /** @var string */
//     public $passwordConfirmation = '';

//    public function create(){
//     return view('admin.user.index');
//    }
//    public function store()
//    {
//        $this->validate([
//            'name' => ['required'],
//            'ppr' => ['required', 'numeric', 'min:0','unique:users'],
//            'email' => ['required', 'email', 'unique:users'],
//            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
//        ]);

//        $user = User::create([
//            'email' => $this->email,
//            'ppr' => $this->ppr,
//            'name' => $this->name,
//            'password' => Hash::make($this->password),
//        ]);

//        event(new Registered($user));

//        Auth::login($user, true);

//        return redirect()->intended(route('admin.user.index'));
//    }

//    public function render()
//    {
//        return view('admin.user.index')->extends('admin.layouts.app');
//        // return view('livewire.auth.register')->extends('layouts.auth');
//    }
}
