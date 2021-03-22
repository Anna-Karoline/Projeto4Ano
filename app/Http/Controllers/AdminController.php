<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(StoreAdminRequest $request){
        $ad = true;
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'admin' => $ad,
            'telefone' => $request['telefone'],
            'cpf' => $request['cpf'],
            'endereco' => $request['endereco'],
        ]);
        return redirect()->route('home');
    }
    public function register(){
        return view('admin.criarAdmin');
    }
    

}
